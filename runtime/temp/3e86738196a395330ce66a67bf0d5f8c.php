<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"D:\phpStudy\PHPTutorial\WWW\dm\public/../application/index\view\videolst\videolst.html";i:1564728771;s:69:"D:\phpStudy\PHPTutorial\WWW\dm\application\index\view\common\top.html";i:1564663757;s:70:"D:\phpStudy\PHPTutorial\WWW\dm\application\index\view\common\foot.html";i:1564730944;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0035)https://www.360kan.com/dongman/list -->
<html class="" lang="zh-cn">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>360动漫分类列表-更新更全更受欢迎的影视网站-在线观看</title>
    <meta name="referrer" content="always">
    <!--<base target="_blank">-->
    <base href="." target="_blank">
    <!--<base href="https://www.360kan.com">-->
    <base href="." target="_blank">
    <link href="http://127.0.0.1/dm/public/static/index/styles/top.css" type="text/css" rel="stylesheet" />
    <link href="http://127.0.0.1/dm/public/static/index/styles/videolst.css" type="text/css" rel="stylesheet" />
</head>
<body class="g-wide">
    <div class="eb-head" data-block="tj-head" monitor-desc="head" monitor-shortpv="">
    <div class="eb-head-top eb-head-width g-clear">
        <a href="#" class="eb-head-logo" target="_self">
            <img alt="大树根动漫网" src="http://127.0.0.1/dm/public/static/index/images/LOGO.png" /></a>
        <!-- <div class="eb-head-ad-wrap">
            <a href="#" class="eb-head-ad" style="background-image:url()"></a>
        </div> -->
        <div class="eb-head-s">
            <form class="js-eb-search eb-search eb-search-xklong" target="_top" method="GET" action="" id="search-form">
                <div class="js-eb-suggest eb-suggest  eb-suggest-xklong g-clear" id="js-eb-suggest">
                    <input class="eb-suggest-query js-query" autocomplete="off" value="" id="kw" />
                    <div class="eb-suggest-wrap js-wrap" style="display:none">
                        <iframe frameborder="0"></iframe>
                        <ul class="js-list eb-suggest-ul"></ul>
                    </div>
                </div>
                <div class="eb-search-btn-wrap">
                    <input type="submit" value="" class="eb-search-btn" id="js-eb-search-btn" />
                    <label for="js-eb-search-btn">搜索</label></div>
            </form>
        </div>
    </div>
    <div class="eb-head-bottom">
        <div class="wrap eb-head-width g-clear">
            <ul id="js-ebhead-more" class="eb-head-nav g-clear">
                <li class="eb-head-nav-wrap js-ebsubhead-menu">
                    <a href="<?php echo url('index/index'); ?>" class="nav-item current" target="_self">首页</a></li>
                <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="eb-head-nav-wrap js-ebsubhead-menu">
                    <a href="<?php echo url('videolst/index',array('id'=>$vo['id'])); ?>" 
                        <?php if($cateid == $vo['id']): ?>
                        class="nav-item current" 
                        <?php else: ?>
                        class="nav-item" 
                        <?php endif; ?>
                        target="_self"><?php echo $vo['catename']; ?></a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>

    <div class="s-common-top g-wrap js-common-top s-dongman-top" data-channel="dongman">
        <div data-block="tj-filter" monitor-desc="筛选" monitor-shortpv="">
            <div class="s-filter">
                <dl class="s-filter-item js-s-filter">
                    <dt class="type">类型:</dt>
                    <dd class="item g-clear js-filter-content">
                        <!-- <b class="on">全部</b> -->
                        
                        <?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($keyword == $vo['tagname']): ?> 
                        <b class="on"><?php echo $vo['tagname']; ?></b>
                        <?php else: ?> 
                        <a class="js-tongjip" href="<?php echo url('videolst/index',array('keyword'=>$vo['tagname'])); ?>" target="_self"><?php echo $vo['tagname']; ?></a>
                        <?php endif; ?>
                        
                            <!-- <i class="s-hot-icon"></i></a> 右上角H小标志-->
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                    <dd class="act">
                        <a class="open js-filter-open" href="#" style="display: inline;">更多</a>
                        <a class="close js-filter-close" href="https://www.360kan.com/#">收起</a></dd>
                </dl>
                <dl class="s-filter-item js-s-filter">
                    <dt class="type">年代:</dt>
                    <dd class="item g-clear js-filter-content" id="dd-item">

                        <?php if($time == '全部'): ?>
                            <b class="on">全部</b>
                        <?php else: ?>
                            <a class="js-tongjip" href="<?php echo url('videolst/index'); ?>" target="_self">全部</a>
                        <?php endif; $__FOR_START_31037__=0;$__FOR_END_31037__=16;for($i=$__FOR_START_31037__;$i < $__FOR_END_31037__;$i+=1){ if($time == date('Y') - $i): ?>
                                <b class="on"><?php echo date("Y") - $i; ?></b>
                                
                            <?php else: ?>
                                <a class="js-tongjip" href="<?php echo url('videolst/index',array('time'=>date('Y') - $i)); ?>" target="_self"><?php echo date("Y") - $i; ?></a>
                            <?php endif; } ?>
                        
                            
                    </dd>
                    <dd class="act">
                        <a class="open js-filter-open" href="https://www.360kan.com/#">更多</a>
                        <a class="close js-filter-close" href="https://www.360kan.com/#">收起</a></dd>
                </dl>
            </div>
        </div>
        <div data-block="tj-list" monitor-desc="列表" monitor-shortpv="">
            <div class="s-tab">
                <div class="s-tab-main">
                    <ul class="list g-clear">
                        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="item">
                            <a class="js-tongjic" href="<?php echo url('playlst/index',array('id'=>$vo['id'])); ?>">
                                <div class="cover g-playicon">
                                    <img alt="<?php echo $vo['title']; ?>" src="<?php echo $vo['pic']; ?>">
                                    <div class="mask-wrap">
                                        <span class="hint"><?php echo $vo['sets']; ?></span></div>
                                </div>
                                <div class="detail">
                                    <p class="title g-clear">
                                        <span class="s1" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></span></p>
                                </div>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div monitor-desc="分页" id="js-ew-page" data-block="js-ew-page" class="ew-page">
                <?php echo $data->render(); ?>
        </div>
    </div>

    <div class="eb-foot " data-block="tj-foot" monitor-desc="foot" monitor-shortpv="">
    <div class="eb-foot-wrap g-clear">
        <div class="eb-foot-left">
            <p>
                <img alt="大树根动漫网" src="http://127.0.0.1/dm/public/static/index/images/LOGO3.png" /></p>
            <p>Copyright &copy; 大树根动漫网. All Rights Reserved.</p>
            <p>
                <a href="#">大树根动漫网不参与所有视频的录制、上传。本站所有视频均来自互联网，版权归原创者所有。</a>&nbsp;&nbsp;
                
                <span> </span>
            
            </p>

            <p>
            
                <a class="ga" href="#">不以营利为目的，若侵犯您的权益，请联系我们删除。</a></p>
        </div>
        <div class="eb-foot-right g-clear">
            <dl>
                <dt>关于</dt>
                <dd>
                    <a href="#" target="_blank">关于我们</a></dd>
                <dd>
                    <a href="#" target="_blank">版权声明</a></dd>
                <dd>
                    <a href="#" target="_blank">用户协议</a></dd>
            </dl>
            <dl>
                <dt>服务</dt>
                <dd>
                    <a class="js-addfavorite" href="#">加入收藏</a></dd>
                <dd>
                    <a href="#" target="_blank">意见反馈</a></dd>
                <dd>
                    <a href="#" target="_blank">官方微博</a></dd>
                <dd>
                    <a href="#">联系方式</a></dd>
            </dl>
            <dl>
                <dt>大树根动漫</dt>
                <dd>
                    <img alt="大树根动漫" src="http://127.0.0.1/dm/public/static/index/images/LOGO2.png" /></dd>
            </dl>
        </div>
    </div>
</div>

</body>

</html>