<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"D:\phpStudy\PHPTutorial\WWW\dm\public/../application/index\view\videolst\videolst.html";i:1564309337;s:69:"D:\phpStudy\PHPTutorial\WWW\dm\application\index\view\common\top.html";i:1564283243;s:70:"D:\phpStudy\PHPTutorial\WWW\dm\application\index\view\common\foot.html";i:1564283243;}*/ ?>
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
        <a href="https://www.360kan.com" class="eb-head-logo" target="_self">
            <img src="https://p2.ssl.qhimg.com/t01db9f7ee470e741ac.png" /></a>
        <div class="eb-head-ad-wrap">
            <a href="https://v.360kan.com/sv/c4PkOmLoThnyTy.html" class="eb-head-ad" style="background-image:url(https://p.ssl.qhimg.com/t0182e4824401e5013d.png)"></a>
        </div>
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
                        <b class="on">全部</b>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=100" target="_self">热血
                            <!-- <i class="s-hot-icon"></i></a> 右上角H小标志-->
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=134" target="_self">科幻</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=102" target="_self">美少女</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=109" target="_self">魔幻</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=135" target="_self">经典</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=136" target="_self">励志</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=111" target="_self">少儿</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=107" target="_self">冒险</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=105" target="_self">搞笑</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=137" target="_self">推理</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=101" target="_self">恋爱</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=138" target="_self">治愈</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=106" target="_self">幻想</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=104" target="_self">校园</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=110" target="_self">动物</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=112" target="_self">机战</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=131" target="_self">亲子</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=139" target="_self">儿歌</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=103" target="_self">运动</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=108" target="_self">悬疑</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=113" target="_self">怪物</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=115" target="_self">战争</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=114" target="_self">益智</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=123" target="_self">青春</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=121" target="_self">童话</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=119" target="_self">竞技</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=126" target="_self">动作</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=116" target="_self">社会</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=117" target="_self">友情</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=127" target="_self">真人版</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=130" target="_self">电影版</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=128" target="_self">OVA版</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=129" target="_self">TV版</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=132" target="_self">新番动画</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?year=all&amp;area=all&amp;cat=133" target="_self">完结动画</a></dd>
                    <dd class="act">
                        <a class="open js-filter-open" href="https://www.360kan.com/#" style="display: inline;">更多</a>
                        <a class="close js-filter-close" href="https://www.360kan.com/#">收起</a></dd>
                </dl>
                <dl class="s-filter-item js-s-filter">
                    <dt class="type">年代:</dt>
                    <dd class="item g-clear js-filter-content">
                        <b class="on">全部</b>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2019" target="_self">2019</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2018" target="_self">2018</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2017" target="_self">2017</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2016" target="_self">2016</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2015" target="_self">2015</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2014" target="_self">2014</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2013" target="_self">2013</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2012" target="_self">2012</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2011" target="_self">2011</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2010" target="_self">2010</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2009" target="_self">2009</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2008" target="_self">2008</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2007" target="_self">2007</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2006" target="_self">2006</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2005" target="_self">2005</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=2004" target="_self">2004</a>
                        <a class="js-tongjip" href="https://www.360kan.com/dongman/list?cat=all&amp;area=all&amp;year=other" target="_self">更早</a></dd>
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
                                    <img src="<?php echo $vo['pic']; ?>">
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
                <img src="./index_files/t01cce0452825687104.png" /></p>
            <p>Copyright &copy; 360安全网址. All Rights Reserved.</p>
            <p>
                <a href="http://www.miibeian.gov.cn/">浙ICP证B2-20090064号</a>&nbsp;&nbsp;
                <span>信息网络传播视听节目许可证1109357号</span>&nbsp;&nbsp;
                <span>浙网文[2016]0179-079号</span></p>
            <p>
                <a class="ga" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33030202000714">浙公网安备 33030202000714号</a></p>
        </div>
        <div class="eb-foot-right g-clear">
            <dl>
                <dt>关于</dt>
                <dd>
                    <a href="https://www.360kan.com/more/aboutus" target="_blank">关于我们</a></dd>
                <dd>
                    <a href="https://www.360kan.com/more/copyright" target="_blank">版权声明</a></dd>
                <dd>
                    <a href="https://www.360kan.com/more/protocol" target="_blank">用户协议</a></dd>
            </dl>
            <dl>
                <dt>服务</dt>
                <dd>
                    <a class="js-addfavorite" href="https://www.360kan.com/###">加入收藏</a></dd>
                <dd>
                    <a href="https://www.360kan.com/more/feedback" target="_blank">意见反馈</a></dd>
                <dd>
                    <a href="http://weibo.com/360yingshi" target="_blank">官方微博</a></dd>
                <dd>
                    <a href="https://www.360kan.com/more/cooperation">联系方式</a></dd>
            </dl>
            <dl>
                <dt>扫码下载APP</dt>
                <dd>
                    <img src="./index_files/t0138a5be69a4b76db3.png" /></dd>
            </dl>
        </div>
    </div>
</div>

</body>

</html>