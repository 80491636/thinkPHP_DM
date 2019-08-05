<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\Program Files\Apache24\htdocs\dm/application/index\view\play\play.html";i:1565028363;s:74:"D:\Program Files\Apache24\htdocs\dm\application\index\view\common\top.html";i:1565023731;s:75:"D:\Program Files\Apache24\htdocs\dm\application\index\view\common\foot.html";i:1565010133;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0035)http://www.dsgdm.net/dongman/list -->
<html class="" lang="zh_CN.UTF-8">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $playData['series_name'],'第',$playData['current_num']; ?>集 高清免费在线观看-<?php echo $playData['series_name']; ?>-大树根动漫网</title>
	<meta itemprop="url" content="<?php echo url('play/index',array('id'=>$playData['id'],'current_num'=>$playData['current_num'])); ?>" />
	<meta itemprop="name" name="title" content="<?php echo $playData['series_name'],'第',$playData['current_num']; ?>集 高清免费在线观看-<?php echo $playData['series_name']; ?>-大树根动漫网">
	<meta name="author" content="dsgdm VFE Team" />
	<meta name="keywords" itemprop="keywords" content="<?php echo $playData['series_name']; ?>动画版,<?php echo $playData['leading_actor_id']; ?>,动漫">
	<meta name="description" itemprop="description" content="<?php echo $playData['series_name'],$playData['current_num']; ?>集,<?php echo $playData['description']; ?>">
	<meta itemprop="image" content="<?php echo $playData['horizontal_pic_url']; ?>">
	<meta itemprop="thumbnailUrl" content="<?php echo $playData['horizontal_pic_url']; ?>">
	<!-- <meta itemprop="uploadDate" content="2018-01-20" /> -->
	<meta itemprop="duration" content="PT19M16S" />
	<meta itemprop="interactionCount" content="9190333181" />
	<meta itemprop="inLanguage" content="" />
	<!-- <meta itemprop="datePublished" content="2018-01-20" /> -->
	<meta itemprop="contentLocation" content="<?php echo $playData['area_name']; ?>" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:url" property="og:url" content="<?php echo url('play/index',array('id'=>$playData['id'],'current_num'=>$playData['current_num'])); ?>" />
	<meta name="twitter:title" property="og:title" content="<?php echo $playData['series_name'],'第',$playData['current_num']; ?>集 高清免费在线观看-<?php echo $playData['series_name']; ?>-大树根动漫网" />
	<meta name="twitter:description" property="og:description" content="<?php echo $playData['series_name'],$playData['current_num']; ?>集,<?php echo $playData['description']; ?>" />
	<meta name="twitter:image" property="og:image" content="<?php echo $playData['horizontal_pic_url']; ?>" />
	<!-- <link rel="canonical" href="<?php echo url('play/index',array('id'=>$playData['id'],'current_num'=>$playData['current_num'])); ?>" /> -->

    <link href="http://127.0.0.1/dm/public/static/index/styles/top.css" type="text/css" rel="stylesheet" />
    <link href="http://127.0.0.1/dm/public/static/index/styles/index.css" type="text/css" rel="stylesheet" />
</head>
<body class="g-wide" onload="dihejk();">
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
                    <a href="<?php echo url('videolst/videolst',array('cateid'=>$vo['id'])); ?>" 
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


    <div class="p-body">
            <div class="g-wrap">
                <div class="content-wrap g-clear"></div>
                <div class="content-wrap g-clear">
                    <div class="content-left p-content-dianshi">

                        <div class="p-mod dianshi" id="js-dianshi">
                            <div data-block="tj-newds" monitor-desc="位置" monitor-shortpv="">
                                <div class="p-mod-title g-clear">
                                    <span class="p-mod-label">当前位置:</span>
                                    <a class="p-mod-more" href="<?php echo url('videolst/index'); ?>">首页&gt;</a>
                                    <?php echo $playData['series_name'],$playData['current_num']; ?>集

                                </div>
                                <div class="p-mod-title g-clear">
                                    视频中广告非本站添加，切勿相信。如不能播放请切换线路刷新重试
    
                                </div>

                                <div class="content">
                                        <div class="col-md-14 column">
                                            <div class="panel panel-default">
                                                <div id="kj" class="panel-body">
                                                <iframe src="http://127.0.0.1/dm/public/static/index/jiekou/ks.html" id="player" width="100%" height="600px" allowtransparency="true" allowfullscreen="true" frameborder="0" scrolling="no"></iframe>
                                                </div>
                                            </div>
                                            <script>
                                            if (navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)) {
                                                document.getElementById("sdfdf").style.display = "block";
                                            }
                                            </script>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-right">
                        <div class="dsside">
                            <div data-block="tj-dsrank" monitor-desc="动漫热度排行" monitor-shortpv="">
                                <div class="p-mod rank">
                                    <div class="p-mod-title g-clear">
                                        <span class="p-mod-label">动漫热度排行</span></div>
                                    <div class="content rank-content">
                                        <ul class="rank-list g-clear">
                                            <?php if(is_array($count) || $count instanceof \think\Collection || $count instanceof \think\Paginator): $k = 0; $__LIST__ = $count;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                                <li class="rank-item">
                                                    <div class="normal-type g-clear">
                                                        <span class="num top3"><?php echo $k; ?></span>
                                                        <a title="<?php echo $vo['series_name']; ?>" href="<?php echo url('playlst/playlst',array('vcateid'=>$vo['vcate_id'])); ?>" class="name"><?php echo $vo['series_name']; ?></a>
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
                                    <a class="p-mod-more" href="http://www.dsgdm.net/#">更多&gt;</a></div>
                                <div class="p-filter-main">
          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>    

        <input type="hidden" id="url" value="https://v.qq.com/x/cover/<?php echo $playData['pageid']; ?>/<?php echo $playData['nomal_id']; ?>.html"/>

    <script>

    function dihejk() {
        var diz = document.getElementById("url").value;
        var jkv = "http://mv.688ing.com/player?url=";
        var cljurl = document.getElementById("player");
        cljurl.src = jkv + diz
    }

    </script>
    <div class="eb-foot " data-block="tj-foot" monitor-desc="foot" monitor-shortpv="">
    <div class="eb-foot-wrap g-clear">
        <div class="eb-foot-left">
            <p>
                <img alt="大树根动漫网" src="http://127.0.0.1/dm/public/static/index/images/LOGO3.png" /></p>
            <p>Copyright &copy; 大树根动漫网. All Rights Reserved.</p>
            <p>
                <a href="http://www.dsgdm.net/#"></a>大树根动漫网不提供任何视听上传及存储服务。本站所有视频均来自互联网，版权归原创者所有。&nbsp;&nbsp;
                
                <span> </span>
            
            </p>

            <p>
            
                <a class="ga" href="http://www.dsgdm.net/#">不以营利为目的，若侵犯您的权益，请联系我们删除  kfyzjd2008#gmail.com</a></p>
        </div>
        <div class="eb-foot-right g-clear">
            <dl>
                <dt>关于</dt>
                <dd>
                    <a href="http://www.dsgdm.net/#" target="_blank">关于我们</a></dd>
                <dd>
                    <a href="http://www.dsgdm.net/#" target="_blank">版权声明</a></dd>
                <dd>
                    <a href="http://www.dsgdm.net/#" target="_blank">用户协议</a></dd>
            </dl>
            <dl>
                <dt>服务</dt>
                <dd>
                    <a class="js-addfavorite" href="http://www.dsgdm.net/"  title="收藏本站到收藏夹">加入收藏</a>
                </dd>
                <dd>
                    <a href="http://www.dsgdm.net/#" target="_blank">意见反馈</a></dd>
                <dd>
                    <a href="http://www.dsgdm.net/#" target="_blank">官方微博</a></dd>
                <dd>
                    <a href="http://www.dsgdm.net/#">联系方式</a></dd>
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