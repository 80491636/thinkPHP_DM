<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"D:\phpStudy\PHPTutorial\WWW\dm\public/../application/index\view\index\index.html";i:1564729988;s:69:"D:\phpStudy\PHPTutorial\WWW\dm\application\index\view\common\top.html";i:1564663757;s:70:"D:\phpStudy\PHPTutorial\WWW\dm\application\index\view\common\foot.html";i:1564730944;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0023)https://www.360kan.com/ -->
<html class="" lang="zh-cn">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>360影视-更新更全更受欢迎的影视网站-在线观看</title>
    <!--<base target="_blank">-->
    <base href="." target="_blank" />
    <!--<base href="https://www.360kan.com">-->
    <base href="." target="_blank" />
    <!-- <script>var ua = window.navigator.userAgent.toLocaleLowerCase();
        if (ua.indexOf('mobile') > 0 && ua.indexOf('ipad') < 0) {
            window.location.href = 'http://m.360kan.com/';
        }</script> -->
    <link href="http://127.0.0.1/dm/public/static/index/styles/index.css" type="text/css" rel="stylesheet" />
    <link href="http://127.0.0.1/dm/public/static/index/styles/top.css" type="text/css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    
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


    <div class="b-topslider js-toplslider" id="tj-topslider" data-block="tj-轮播图" monitor-desc="轮播图" monitor-shortpv="">
        <div class="group-wrap">
            <div class="c-banner">
                <div class="banner">
                    <ul>
                        <?php if(is_array($bander) || $bander instanceof \think\Collection || $bander instanceof \think\Paginator): $i = 0; $__LIST__ = $bander;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li><img src="<?php echo $vo['url']; ?>"></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="nexImg">

                </div>
                <div class="preImg">

                </div>
                <div class="jumpBtn">
                    <ul>
                        <?php if(is_array($bander) || $bander instanceof \think\Collection || $bander instanceof \think\Paginator): $k = 0; $__LIST__ = $bander;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                        <li jumpImg="<?php echo $k - 1; ?>"></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>


        </div>
    </div>
    <div class="p-body">
        <div class="g-wrap">
            <div class="content-wrap g-clear"></div>
            <div class="content-wrap g-clear">
                <div class="content-left p-content-dianshi">

                    <div class="p-mod dianshi" id="js-dianshi">
                        <div data-block="tj-newds" monitor-desc="最新动漫" monitor-shortpv="">
                            <div class="p-mod-title g-clear">
                                <span class="p-mod-label">最新更新</span>
                                <a class="p-mod-more" href="<?php echo url('videolst/index'); ?>">更多&gt;</a>
                                <?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): $k = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k == 1): ?>
                                <a class="p-mod-desc" href="<?php echo url('videolst/index',array('keyword'=>$vo['tagname'])); ?>"><?php echo $vo['tagname']; ?></a>
                                <?php else: ?>
                                <span class="p-mod-b">&middot;</span>
                                <a class="p-mod-desc" href="<?php echo url('videolst/index',array('keyword'=>$vo['tagname'])); ?>"><?php echo $vo['tagname']; ?></a>
                                
                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <div class="content">
                                <ul class="list g-clear w-newfigure-list js-list">

                                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li title="<?php echo $vo['series_name']; ?>" class="w-newfigure w-newfigure-180x153">
                                        <a href="<?php echo url('playlst/index',array('id'=>$vo['vcate_id'])); ?>" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="<?php echo $vo['horizontal_pic_url']; ?>" data-src="<?php echo $vo['horizontal_pic_url']; ?>" alt="<?php echo $vo['series_name']; ?>" />
                                                <span class="w-newfigure-hint"><?php echo $vo['episode_updated']; ?></span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1"><?php echo $vo['series_name']; ?></span></p>
                                                <p class="w-newfigure-desc"><?php echo $vo['second_title']; ?></p></div>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-right">
                    <div class="dsside">
                        <div data-block="tj-dsrank" monitor-desc="热播排行" monitor-shortpv="">
                            <div class="p-mod rank">
                                <div class="p-mod-title g-clear">
                                    <span class="p-mod-label">热播排行</span></div>
                                <div class="content rank-content">
                                    <ul class="rank-list g-clear">

                                    <?php if(is_array($count) || $count instanceof \think\Collection || $count instanceof \think\Paginator): $k = 0; $__LIST__ = $count;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                        <li class="rank-item">
                                            <div class="normal-type g-clear">
                                                <span class="num top3"><?php echo $k; ?></span>
                                                <a title="<?php echo $vo['series_name']; ?>" href="<?php echo url('playlst/index',array('id'=>$vo['vcate_id'])); ?>" class="name"><?php echo $vo['series_name']; ?></a>
                                                <span class="vv"><?php echo round($vo['view_today_count']/10000,2); ?> 万</span></div>
                                        </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div data-block="tj-dsfilter" monitor-desc="动漫筛选" class="p-filter" monitor-shortpv="">
                            <div class="p-mod-title g-clear">
                                <span class="p-mod-label">动漫筛选</span>
                                <a class="p-mod-more" href="https://www.360kan.com/dianshi/list.php">更多&gt;</a></div>
                            <div class="p-filter-main">
                                <div class="g-clear list">
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=107">军事</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=104">古装</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=118">谍战</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=109">喜剧</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=101">言情</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=105">伦理</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=111">都市</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=112">历史</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=103">警匪</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=117">神话</a></div>
                                <div class="g-clear list">
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?area=10">大陆</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?area=11">香港</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?area=12">韩国</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?area=13">美国</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?area=16">台湾</a></div>
                                <div class="g-clear list">
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=all&amp;year=all&amp;area=all&amp;act=%E6%9D%A8%E5%B9%82">杨幂</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=all&amp;year=all&amp;area=all&amp;act=%E7%83%AD%E5%B7%B4">热巴</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=all&amp;year=all&amp;area=all&amp;act=%E9%83%91%E7%88%BD">郑爽</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=all&amp;year=all&amp;area=all&amp;act=%E5%BC%A0%E5%98%89%E8%AF%91">张嘉译</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=all&amp;year=all&amp;area=all&amp;act=%E5%BE%90%E5%B3%A5">徐峥</a>
                                    <a class="item" href="https://www.360kan.com/dianshi/list.php?cat=all&amp;year=all&amp;area=all&amp;act=%E9%98%AE%E7%BB%8F%E5%A4%A9">阮经天</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div data-block="tj-xuexijinxingshi" class="p-xuexijinxingshi" monitor-desc="奋斗新时代" monitor-shortpv=""></div> -->


            <div class="content-wrap p-ad g-clear index-ad">

                <div class="b-bannerad  js-bannerad" data-block="tj-jpyx" monitor-desc="精品优选" monitor-shortpv="" data-small="pCACTz" data-wide="iRv4rq">
                    <h3 class="a-common-title g-clear">
                        <span>精品优选</span>
                        <!-- <b class="b-bannerad-change js-change"><i></i>换一换</b> --></h3>
                    <div class="b-bannerad-main js-bannerad-main" id="360video_bottominteractivead_1">
                        <img src="https://p.ssl.qhimg.com/t01bee39e64e525999f.jpg">
                    </div>
                </div>
            </div>
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
<script src="http://127.0.0.1/dm/public/static/index/js/lunbo.js"></script>
</html>