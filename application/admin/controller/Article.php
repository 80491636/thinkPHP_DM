<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Article as ArticleModel;
use app\admin\controller\Base;
class Article extends Base
{
    public function add()
    {
        if(request()->isPost()){
            $data = [
                'title' => input('title'),
                'desc' => input('desc'),
                'author' => input('author'),
                'keywords' => input('keywords'),
                'content' => input('content'),
                'cateid' => input('cateid'),
                'time' => time(),
            ];
            if(input('state') == 'on'){
                $data['state'] = 1;
            }else{
                $data['state'] = 0;
            }
            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('pic');
            if($file){
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                if($info){
                    // 成功上传后 获取上传信息
                    $data['pic'] = $info->getSaveName();
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
            if(db('article')->insert($data)){
                return $this->success('添加文章成功！','lst');
            }else{
                return $this->error('添加文章失败！');
            }
        }
        $cate = db('cate')->select();
        $this->assign('cate',$cate);
        return  $this->fetch();
    }
    public function lst()
    {
        // 查询状态为1的用户数据 并且每页显示10条数据
        // $list = Db::name('article')->paginate(3);
        $list = ArticleModel::paginate(3);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        // 渲染模板输出
        return $this->fetch();
    }
    public function edit()
    {
        if(request()->isPost()){
            $data = [
                'id' => input('id'),
                'title' => input('title'),
                'desc' => input('desc'),
                'author' => input('author'),
                'keywords' => input('keywords'),
                'content' => input('content'),
                'cateid' => input('cateid'),
                'time' => time(),
            ];
            if(input('state') == 'on'){
                $data['state'] = 1;
            }else{
                $data['state'] = 0;
            }
            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('pic');
            if($file){
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                if($info){
                    // 成功上传后 获取上传信息
                    $data['pic'] = $info->getSaveName();
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
            $sql = db('article')->where('id',$data['id'])->update($data);
            if($sql){
                return $this->success('修改文章信息成功','lst');
            }else{
                return $this->error('修改文章失败！');
            }
        }
        $id = input('id');
        $article = db('article')->where('id',$id)->find();
        $this->assign('article',$article);
        $cate = db('cate') -> select();
        $this->assign('cate',$cate);
        return $this->fetch();
    }
    public function del()
    {
        $id = input('id');
        $sql = db('article')->delete($id);
        if($sql){
            return $this->success('删除文章成功'.$id,'lst');
        }else{
            return $this->error('删除文章失败'.$id,'lst');
        }
    }
}
