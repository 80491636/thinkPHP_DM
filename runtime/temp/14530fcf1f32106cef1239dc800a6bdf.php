<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\phpStudy\PHPTutorial\WWW\dm\public/../application/index\view\play\play.html";i:1564745047;s:69:"D:\phpStudy\PHPTutorial\WWW\dm\application\index\view\common\top.html";i:1564663757;s:70:"D:\phpStudy\PHPTutorial\WWW\dm\application\index\view\common\foot.html";i:1564730944;}*/ ?>
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


    <div class="p-body">
            <div class="g-wrap">
                <div class="content-wrap g-clear"></div>
                <div class="content-wrap g-clear">
                    <div class="content-left p-content-dianshi">
                        <div class="p-wordad-wrap">
                            <div class="b-wordad js-b-wordad g-clear" data-block="tj-文字链广告" monitor-desc="文字链广告">
                                <div class="b-adicon">广告</div>
                                <a class="b-adcontent js-b-adcontent"></a>
                            </div>
                        </div>
                        <div class="p-mod dianshi" id="js-dianshi">
                            <div data-block="tj-newds" monitor-desc="最新电视剧" monitor-shortpv="">
                                <div class="p-mod-title g-clear">
                                    <span class="p-mod-label">最新电视剧</span>
                                    <a class="p-mod-more" href="https://www.360kan.com/dianshi/index.html">更多&gt;</a>
                                    <a class="p-mod-desc" href="https://www.360kan.com/dianshi/list.php?cat=107&amp;year=all&amp;area=all&amp;act=all">军事</a>
                                    <span class="p-mod-b">·</span>
                                    <a class="p-mod-desc" href="https://www.360kan.com/dianshi/list.php?cat=101&amp;year=all&amp;area=all&amp;act=all">言情</a>
                                    <span class="p-mod-b">·</span>
                                    <a class="p-mod-desc" href="https://www.360kan.com/dianshi/list.php?cat=104&amp;year=all&amp;area=all&amp;act=all">古装</a>
                                    <span class="p-mod-b">·</span>
                                    <a class="p-mod-desc" href="https://www.360kan.com/dianshi/list.php?cat=109&amp;year=all&amp;area=all&amp;act=all">喜剧</a>
                                    <span class="p-mod-b">·</span>
                                    <a class="p-mod-desc" href="https://www.360kan.com/dianshi/list.php?cat=111&amp;year=all&amp;area=all&amp;act=all">都市</a>
                                    <span class="p-mod-b">·</span>
                                    <a class="p-mod-desc" href="https://www.360kan.com/dianshi/list.php?cat=118&amp;year=all&amp;area=all&amp;act=all">谍战</a></div>
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
                            <div data-block="tj-dsrank" monitor-desc="电视剧排行榜" monitor-shortpv="">
                                <div class="p-mod rank">
                                    <div class="p-mod-title g-clear">
                                        <span class="p-mod-label">电视剧排行榜</span></div>
                                    <div class="content rank-content">
                                        <ul class="rank-list g-clear">
                                            <li class="rank-item">
                                                <div class="normal-type g-clear">
                                                    <span class="num top3">1</span>
                                                    <a title="亲爱的，热爱的" href="https://www.360kan.com/tv/QbVqbH7lRm8pOX.html" class="name">亲爱的，热爱的</a>
                                                    <span class="vv">129.8万</span></div>
                                            </li>
                                            <li class="rank-item">
                                                <div class="normal-type g-clear">
                                                    <span class="num top3">2</span>
                                                    <a title="李三枪" href="https://www.360kan.com/tv/QbZtaX7lRm8uOH.html" class="name">李三枪</a>
                                                    <span class="vv">58.7万</span></div>
                                            </li>
                                            <li class="rank-item">
                                                <div class="normal-type g-clear">
                                                    <span class="num top3">3</span>
                                                    <a title="红樱剑" href="https://www.360kan.com/tv/RbJrcX7lRm8uNn.html" class="name">红樱剑</a>
                                                    <span class="vv">49万</span></div>
                                            </li>
                                            <li class="rank-item">
                                                <div class="normal-type g-clear">
                                                    <span class="num">4</span>
                                                    <a title="全职高手" href="https://www.360kan.com/tv/RbJsb07lRmDuM3.html" class="name">全职高手</a>
                                                    <span class="vv">42.7万</span></div>
                                            </li>
                                            <li class="rank-item">
                                                <div class="normal-type g-clear">
                                                    <span class="num">5</span>
                                                    <a title="九州缥缈录" href="https://www.360kan.com/tv/RLpqaX7lRm4lOH.html" class="name">九州缥缈录</a>
                                                    <span class="vv">42.2万</span></div>
                                            </li>
                                            <li class="rank-item">
                                                <div class="normal-type g-clear">
                                                    <span class="num">6</span>
                                                    <a title="陈情令" href="https://www.360kan.com/tv/Q4Frb07lRm8mMH.html" class="name">陈情令</a>
                                                    <span class="vv">37.4万</span></div>
                                            </li>
                                            <li class="rank-item">
                                                <div class="normal-type g-clear">
                                                    <span class="num">7</span>
                                                    <a title="请赐我一双翅膀" href="https://www.360kan.com/tv/QrZrb07lRm8pOH.html" class="name">请赐我一双翅膀</a>
                                                    <span class="vv">27.6万</span></div>
                                            </li>
                                            <li class="rank-item">
                                                <div class="normal-type g-clear">
                                                    <span class="num">8</span>
                                                    <a title="流淌的美好时光" href="https://www.360kan.com/tv/PrNsb07lRm8nMn.html" class="name">流淌的美好时光</a>
                                                    <span class="vv">26.9万</span></div>
                                            </li>
                                            <li class="rank-item">
                                                <div class="normal-type g-clear">
                                                    <span class="num">9</span>
                                                    <a title="宸汐缘" href="https://www.360kan.com/tv/PbhqaX7lRm8uMX.html" class="name">宸汐缘</a>
                                                    <span class="vv">25万</span></div>
                                            </li>
                                            <li class="rank-item">
                                                <div class="normal-type g-clear">
                                                    <span class="num">10</span>
                                                    <a title="归还世界给你" href="https://www.360kan.com/tv/Q4Vpan7lRmDlMX.html" class="name">归还世界给你</a>
                                                    <span class="vv">24.3万</span></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div data-block="tj-dsfilter" monitor-desc="电视剧筛选" class="p-filter" monitor-shortpv="">
                                <div class="p-mod-title g-clear">
                                    <span class="p-mod-label">电视剧筛选</span>
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

            </div>
        </div>    

        <input type="hidden" id="url" value="https://v.qq.com/x/cover/<?php echo $playData['pageid']; ?>/<?php echo $playData['nomal_id']; ?>.html"/>

    <script>

      function dihejk2() {
          console.log("调用JS")
        var diz = document.getElementById("url").value;
        // var jkurl = document.getElementById("jk");
        // var jk = document.getElementById("jk").selectedIndex;
        var jkv = "http://jx.618ge.com/?url=";
        var cljurl = document.getElementById("player");
        window.open(jkv + diz, "_blank");
      }

    function dihejk() {
        var diz = document.getElementById("url").value;
        // var jkurl = document.getElementById("jk");
        // var jk = document.getElementById("jk").selectedIndex;
        var jkv = "http://jx.618ge.com/?url=";
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