<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"D:\phpStudy\PHPTutorial\WWW\dm\public/../application/index\view\index\index.html";i:1564283243;s:69:"D:\phpStudy\PHPTutorial\WWW\dm\application\index\view\common\top.html";i:1564283243;s:70:"D:\phpStudy\PHPTutorial\WWW\dm\application\index\view\common\foot.html";i:1564283243;}*/ ?>
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
    <script>var ua = window.navigator.userAgent.toLocaleLowerCase();
        if (ua.indexOf('mobile') > 0 && ua.indexOf('ipad') < 0) {
            window.location.href = 'http://m.360kan.com/';
        }</script>
    <link href="http://127.0.0.1/dm/public/static/index/styles/index.css" type="text/css" rel="stylesheet" />
    <link href="http://127.0.0.1/dm/public/static/index/styles/top.css" type="text/css" rel="stylesheet" />
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

    <div class="b-topslider js-toplslider" id="tj-topslider" data-block="tj-轮播图" monitor-desc="轮播图" monitor-shortpv="">
        <div class="group-wrap">
            <div class="b-topslider-item js-g-slide-item g-slide-item" style="display: none; left: -1180px; top: 0px; opacity: 1;">
                <a href="https://www.360kan.com/tv/RLpqaX7lRm4lOH.html" class="p0 g-playicon js-playicon">
                    <img src="./index_files/t01852484ac53eb0621.jpg" alt="九州缥缈录" />
                    <span class="title">九州缥缈录</span>
                    <span class="desc">刘昊然血战沙场，乱世纷争铁甲依然在</span>
                    <b>
                    </b>
                </a>
                <a href="https://www.360kan.com/va/Z8Ioa3Ny8pM3ET.html" class="p1 g-playicon js-playicon">
                    <img src="./index_files/t0178ed101797b69a53.jpg" alt="我家小两口" />
                    <span class="title">我家小两口</span>
                    <span class="desc">向佐郭碧婷草原举办婚礼</span>
                    <b>
                    </b>
                </a>
                <a href="https://www.360kan.com/tv/RbJrcX7lRm8uNn.html" class="p2 g-playicon js-playicon">
                    <img src="./index_files/t01157edf29b8fcb670.jpg" alt="红樱剑" />
                    <span class="title">红樱剑</span>
                    <span class="desc">黄海冰杠上最刚女土匪</span>
                    <b>
                    </b>
                </a>
                <a href="https://www.360kan.com/va/Ys5scHNy8ZUBFT.html" class="p3 g-playicon js-playicon">
                    <img src="./index_files/t0113745f26285ea7d9.jpg" alt="青春环游记" />
                    <span class="title">青春环游记</span>
                    <span class="desc">沙溢杨迪被打惨</span>
                    <b>
                    </b>
                </a>
                <a href="https://www.360kan.com/va/ZsEob6Jv7JQ3Dz.html" class="p4 g-playicon js-playicon">
                    <img src="./index_files/t016c79bd8c0490da48.jpg" alt="快乐大本营" />
                    <span class="title">快乐大本营</span>
                    <span class="desc">王俊凯歌单曝光遭吐槽？</span>
                    <b>
                    </b>
                </a>
            </div>
            <div class="b-topslider-item js-g-slide-item g-slide-item" style="left: 0px; top: 0px; opacity: 1; display: block;">
                <a href="https://www.360kan.com/tv/QbVqbH7lRm8pOX.html" class="p0 g-playicon js-playicon">
                    <img src="./index_files/t01da592c3ba7864752.jpg" alt="亲爱的，热爱的" />
                    <span class="title">亲爱的，热爱的</span>
                    <span class="desc">杨紫李现勇敢寻梦放肆追爱</span>
                    <b>
                    </b>
                </a>
                <a href="https://www.360kan.com/va/as5mcHNy8pMAFD.html" class="p1 g-playicon js-playicon">
                    <img src="./index_files/t01a8ae85246f3a2297.jpg" alt="跨界喜剧王4" />
                    <span class="title">跨界喜剧王4</span>
                    <span class="desc">柳岩古装亮相挑战黄蓉</span>
                    <b>
                    </b>
                </a>
                <a href="https://www.360kan.com/tv/QrZrb07lRm8pOH.html" class="p2 g-playicon js-playicon">
                    <img src="./index_files/t01e12667002c9c5277.jpg" alt="请赐我一双翅膀" />
                    <span class="title">请赐我一双翅膀</span>
                    <span class="desc">鞠婧祎炎亚纶破蒙冤谜案</span>
                    <b>
                    </b>
                </a>
                <a href="https://www.360kan.com/va/Y85raXNy8pI6ET.html" class="p3 g-playicon js-playicon">
                    <img src="./index_files/t0152bf3e730ba3bb39.jpg" alt="明日之子3" />
                    <span class="title">明日之子3</span>
                    <span class="desc">火箭少女空降！</span>
                    <b>
                    </b>
                </a>
                <a href="https://www.360kan.com/va/ZcApaXNy8pQ3Ez.html" class="p4 g-playicon js-playicon">
                    <img src="./index_files/t016a0c9f6080b07944.jpg" alt="中国好声音2019" />
                    <span class="title">中国好声音2019</span>
                    <span class="desc">李荣浩抢人遭那英闭麦</span>
                    <b>
                    </b>
                </a>
            </div>
            <div class="b-topslider-item js-g-slide-item g-slide-item" style="left: -1180px; top: 0px; opacity: 1; display: none;">
                <a href="https://www.360kan.com/tv/PbhqaX7lRm8uMX.html" class="p0 g-playicon js-playicon">
                    <img src="./index_files/t01205bbf5191a23b46.jpg" alt="宸汐缘" />
                    <span class="title">宸汐缘</span>
                    <span class="desc">倪妮误撩禁欲男神张震，两人邂逅浪漫情缘</span>
                    <b>
                    </b>
                </a>
                <a href="https://www.360kan.com/va/YcAqa3Ny8ZY3Ez.html" class="p1 g-playicon js-playicon">
                    <img src="./index_files/t01a3ca1ffdee5a12bf.jpg" alt="向往的生活3" />
                    <span class="title">向往的生活3</span>
                    <span class="desc">刘宪华回归蘑菇屋再出名句</span>
                    <b>
                    </b>
                </a>
                <a href="https://www.360kan.com/tv/Q4Frb07lRm8mMH.html" class="p2 g-playicon js-playicon">
                    <img src="./index_files/t01ff18e82aa6219471.jpg" alt="陈情令" />
                    <span class="title">陈情令</span>
                    <span class="desc">肖战王一博共闯江湖</span>
                    <b>
                    </b>
                </a>
                <a href="https://www.360kan.com/va/ZsItcHNy8pQ4DD.html" class="p3 g-playicon js-playicon">
                    <img src="./index_files/t0189d64d5ad0612b6d.jpg" alt="中餐厅 第三季" />
                    <span class="title">中餐厅 第三季</span>
                    <span class="desc">先导片：王俊凯杨紫姐弟重逢</span>
                    <b>
                    </b>
                </a>
                <a href="https://www.360kan.com/m/fqbiaRH2RHX0Th.html" class="p4 g-playicon js-playicon">
                    <img src="./index_files/t012964fb5eb4454fa6.jpg" alt="奇葩朵朵" />
                    <span class="title">奇葩朵朵</span>
                    <span class="desc">直男李现竟被张若昀强吻！</span>
                    <b>
                    </b>
                </a>
            </div>
            <b class="leftbtn js-leftbtn"></b>
            <b class="rightbtn js-rightbtn"></b>
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
                                <span class="p-mod-b">&middot;</span>
                                <a class="p-mod-desc" href="https://www.360kan.com/dianshi/list.php?cat=101&amp;year=all&amp;area=all&amp;act=all">言情</a>
                                <span class="p-mod-b">&middot;</span>
                                <a class="p-mod-desc" href="https://www.360kan.com/dianshi/list.php?cat=104&amp;year=all&amp;area=all&amp;act=all">古装</a>
                                <span class="p-mod-b">&middot;</span>
                                <a class="p-mod-desc" href="https://www.360kan.com/dianshi/list.php?cat=109&amp;year=all&amp;area=all&amp;act=all">喜剧</a>
                                <span class="p-mod-b">&middot;</span>
                                <a class="p-mod-desc" href="https://www.360kan.com/dianshi/list.php?cat=111&amp;year=all&amp;area=all&amp;act=all">都市</a>
                                <span class="p-mod-b">&middot;</span>
                                <a class="p-mod-desc" href="https://www.360kan.com/dianshi/list.php?cat=118&amp;year=all&amp;area=all&amp;act=all">谍战</a></div>
                            <div class="content">
                                <ul class="list g-clear w-newfigure-list js-list">
                                    <li title="时间都知道" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/Q4FpcH7lRm8uN3.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t01b672a23b1b2f1f8d.jpg" data-src="https://p.ssl.qhimg.com/t01b672a23b1b2f1f8d.jpg" alt="时间都知道" />
                                                <span class="w-newfigure-hint">更新至9集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">时间都知道</span></p>
                                                <p class="w-newfigure-desc">唐嫣窦骁跨越时间寻真爱</p></div>
                                        </a>
                                    </li>
                                    <li title="九州缥缈录" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/RLpqaX7lRm4lOH.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t013b7e0ebf84d6617d.jpg" data-src="https://p.ssl.qhimg.com/t013b7e0ebf84d6617d.jpg" alt="九州缥缈录" />
                                                <span class="w-newfigure-hint">更新至12集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">九州缥缈录</span></p>
                                                <p class="w-newfigure-desc">刘昊然赤子追梦守护九州</p></div>
                                        </a>
                                    </li>
                                    <li title="宸汐缘" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/PbhqaX7lRm8uMX.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t015364058b9a85acbf.jpg" data-src="https://p.ssl.qhimg.com/t015364058b9a85acbf.jpg" alt="宸汐缘" />
                                                <span class="w-newfigure-hint">更新至20集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">宸汐缘</span></p>
                                                <p class="w-newfigure-desc">张震倪妮邂逅浪漫情缘</p></div>
                                        </a>
                                    </li>
                                    <li title="亲爱的，热爱的" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/QbVqbH7lRm8pOX.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t016cc62d3de2d5ac24.gif" data-src="https://p.ssl.qhimg.com/t016cc62d3de2d5ac24.gif" alt="亲爱的，热爱的" />
                                                <span class="w-newfigure-hint">更新至21集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">亲爱的，热爱的</span></p>
                                                <p class="w-newfigure-desc">“童颜夫妇”甜蜜上线</p></div>
                                        </a>
                                    </li>
                                    <li title="那年夏天有风吹过" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/Q4Jobn7lRm8rNH.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t01151c3bd20c2c8eb3.jpg" data-src="https://p.ssl.qhimg.com/t01151c3bd20c2c8eb3.jpg" alt="那年夏天有风吹过" />
                                                <span class="w-newfigure-hint">更新至18集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">那年夏天有风吹过</span></p>
                                                <p class="w-newfigure-desc">白衣少年上演纯恋故事</p></div>
                                        </a>
                                    </li>
                                    <li title="流淌的美好时光" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/PrNsb07lRm8nMn.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t01ff2a42f5f8b0a683.gif" data-src="https://p.ssl.qhimg.com/t01ff2a42f5f8b0a683.gif" alt="流淌的美好时光" />
                                                <span class="w-newfigure-hint">更新至33集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">流淌的美好时光</span></p>
                                                <p class="w-newfigure-desc">马天宇郑爽两小无猜</p></div>
                                        </a>
                                    </li>
                                    <li title="大宋少年志" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/PrFpaX7lRm4lOX.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t01c2ffeedb33c47554.jpg" data-src="https://p.ssl.qhimg.com/t01c2ffeedb33c47554.jpg" alt="大宋少年志" />
                                                <span class="w-newfigure-hint">全42集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">大宋少年志</span></p>
                                                <p class="w-newfigure-desc">张新成周雨彤谍战江湖</p></div>
                                        </a>
                                    </li>
                                    <li title="暗恋橘生淮南" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/RLlvbX7lRm4pMX.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t01bfc79548beb9c4a6.jpg" data-src="https://p.ssl.qhimg.com/t01bfc79548beb9c4a6.jpg" alt="暗恋橘生淮南" />
                                                <span class="w-newfigure-hint">全24集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">暗恋橘生淮南</span></p>
                                                <p class="w-newfigure-desc">青春记忆中的绝美暗恋</p></div>
                                        </a>
                                    </li>
                                    <li title="陪你到世界之巅" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/QbhxbX7lRm4nOH.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t01d60fc13b228086d9.jpg" data-src="https://p.ssl.qhimg.com/t01d60fc13b228086d9.jpg" alt="陪你到世界之巅" />
                                                <span class="w-newfigure-hint">全35集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">陪你到世界之巅</span></p>
                                                <p class="w-newfigure-desc">王一博王子璇蜜桃味初恋</p></div>
                                        </a>
                                    </li>
                                    <li title="少年派" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/RLNwb07lRm4nOX.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t014451f1187678928c.jpg" data-src="https://p.ssl.qhimg.com/t014451f1187678928c.jpg" alt="少年派" />
                                                <span class="w-newfigure-hint">全41集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">少年派</span></p>
                                                <p class="w-newfigure-desc">麻辣夫妻硬核带娃</p></div>
                                        </a>
                                    </li>
                                    <li title="我们与恶的距离" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/Pblsan7lRm4uOH.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t018115a612e48ffdba.jpg" data-src="https://p.ssl.qhimg.com/t018115a612e48ffdba.jpg" alt="我们与恶的距离" />
                                                <span class="w-newfigure-hint">全10集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">我们与恶的距离</span></p>
                                                <p class="w-newfigure-desc">直击无差别杀人！</p></div>
                                        </a>
                                    </li>
                                    <li title="带着爸爸去留学" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/RLRvbH7lRm4pN3.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t01b18fac0632d8db8e.jpg" data-src="https://p.ssl.qhimg.com/t01b18fac0632d8db8e.jpg" alt="带着爸爸去留学" />
                                                <span class="w-newfigure-hint">全46集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">带着爸爸去留学</span></p>
                                                <p class="w-newfigure-desc">孙红雷辛芷蕾变操心爸妈</p></div>
                                        </a>
                                    </li>
                                    <li title="凤弈" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/Q4psan7lRm0tNn.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t01b50ac4b465501c11.jpg" data-src="https://p.ssl.qhimg.com/t01b50ac4b465501c11.jpg" alt="凤弈" />
                                                <span class="w-newfigure-hint">全41集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">凤弈</span></p>
                                                <p class="w-newfigure-desc">小琵琶精倒追叉腰大师</p></div>
                                        </a>
                                    </li>
                                    <li title="白发" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/PLRqan7lRm0qOH.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t01f273275e77582094.gif" data-src="https://p.ssl.qhimg.com/t01f273275e77582094.gif" alt="白发" />
                                                <span class="w-newfigure-hint">全58集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">白发</span></p>
                                                <p class="w-newfigure-desc">张雪迎李治廷甜蜜互撩</p></div>
                                        </a>
                                    </li>
                                    <li title="破冰行动" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/PbZsaH7lRm0oMH.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t0136e7e6f1e195921e.jpg" data-src="https://p.ssl.qhimg.com/t0136e7e6f1e195921e.jpg" alt="破冰行动" />
                                                <span class="w-newfigure-hint">全48集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">破冰行动</span></p>
                                                <p class="w-newfigure-desc">正邪对抗，悬念迭生</p></div>
                                        </a>
                                    </li>
                                    <li title="我的真朋友" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/Q4Ntb07lRm0rN3.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t018f15fb5667157797.jpg" data-src="https://p.ssl.qhimg.com/t018f15fb5667157797.jpg" alt="我的真朋友" />
                                                <span class="w-newfigure-hint">全48集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">我的真朋友</span></p>
                                                <p class="w-newfigure-desc">邓伦朱一龙抢Baby</p></div>
                                        </a>
                                    </li>
                                    <li title="听雪楼" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/RLdtcH7lRm0nMn.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t01186b0f60c61c9c0c.jpg" data-src="https://p.ssl.qhimg.com/t01186b0f60c61c9c0c.jpg" alt="听雪楼" />
                                                <span class="w-newfigure-hint">全56集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">听雪楼</span></p>
                                                <p class="w-newfigure-desc">南楚下线，爆哭！</p></div>
                                        </a>
                                    </li>
                                    <li title="我们都要好好的" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/Qrppan7lRm0oMn.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t01d32cb67358d913a1.gif" data-src="https://p.ssl.qhimg.com/t01d32cb67358d913a1.gif" alt="我们都要好好的" />
                                                <span class="w-newfigure-hint">全44集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">我们都要好好的</span></p>
                                                <p class="w-newfigure-desc">找姐出场，slay职场</p></div>
                                        </a>
                                    </li>
                                    <li title="筑梦情缘" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/PrNsan7lRm0lMX.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t013b71838d84648472.jpg" data-src="https://p.ssl.qhimg.com/t013b71838d84648472.jpg" alt="筑梦情缘" />
                                                <span class="w-newfigure-hint">全59集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">筑梦情缘</span></p>
                                                <p class="w-newfigure-desc">杨幂霍建华半生爱恨</p></div>
                                        </a>
                                    </li>
                                    <li title="封神演义" class="w-newfigure w-newfigure-180x153">
                                        <a href="https://www.360kan.com/tv/QrJvbH7lRWXoN3.html" class="js-link">
                                            <div class="w-newfigure-imglink g-playicon js-playicon">
                                                <img src="./index_files/t01c34f0a74494177e8.jpg" data-src="https://p.ssl.qhimg.com/t01c34f0a74494177e8.jpg" alt="封神演义" />
                                                <span class="w-newfigure-hint">更新至53集</span></div>
                                            <div class="w-newfigure-detail">
                                                <p class="title g-clear">
                                                    <span class="s1">封神演义</span></p>
                                                <p class="w-newfigure-desc">妲己智救姬昌，子虚相助</p></div>
                                        </a>
                                    </li>
                                </ul>
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
                                                <span class="vv">90.6万</span></div>
                                        </li>
                                        <li class="rank-item">
                                            <div class="normal-type g-clear">
                                                <span class="num top3">2</span>
                                                <a title="九州缥缈录" href="https://www.360kan.com/tv/RLpqaX7lRm4lOH.html" class="name">九州缥缈录</a>
                                                <span class="vv">55.4万</span></div>
                                        </li>
                                        <li class="rank-item">
                                            <div class="normal-type g-clear">
                                                <span class="num top3">3</span>
                                                <a title="红樱剑" href="https://www.360kan.com/tv/RbJrcX7lRm8uNn.html" class="name">红樱剑</a>
                                                <span class="vv">39万</span></div>
                                        </li>
                                        <li class="rank-item">
                                            <div class="normal-type g-clear">
                                                <span class="num">4</span>
                                                <a title="李三枪" href="https://www.360kan.com/tv/QbZtaX7lRm8uOH.html" class="name">李三枪</a>
                                                <span class="vv">34.6万</span></div>
                                        </li>
                                        <li class="rank-item">
                                            <div class="normal-type g-clear">
                                                <span class="num">5</span>
                                                <a title="流淌的美好时光" href="https://www.360kan.com/tv/PrNsb07lRm8nMn.html" class="name">流淌的美好时光</a>
                                                <span class="vv">30万</span></div>
                                        </li>
                                        <li class="rank-item">
                                            <div class="normal-type g-clear">
                                                <span class="num">6</span>
                                                <a title="请赐我一双翅膀" href="https://www.360kan.com/tv/QrZrb07lRm8pOH.html" class="name">请赐我一双翅膀</a>
                                                <span class="vv">29.7万</span></div>
                                        </li>
                                        <li class="rank-item">
                                            <div class="normal-type g-clear">
                                                <span class="num">7</span>
                                                <a title="陈情令" href="https://www.360kan.com/tv/Q4Frb07lRm8mMH.html" class="name">陈情令</a>
                                                <span class="vv">26.4万</span></div>
                                        </li>
                                        <li class="rank-item">
                                            <div class="normal-type g-clear">
                                                <span class="num">8</span>
                                                <a title="宸汐缘" href="https://www.360kan.com/tv/PbhqaX7lRm8uMX.html" class="name">宸汐缘</a>
                                                <span class="vv">26.2万</span></div>
                                        </li>
                                        <li class="rank-item">
                                            <div class="normal-type g-clear">
                                                <span class="num">9</span>
                                                <a title="哥哥姐姐的花样年华" href="https://www.360kan.com/tv/QLhpan7lRm4uNH.html" class="name">哥哥姐姐的花样年华</a>
                                                <span class="vv">19.7万</span></div>
                                        </li>
                                        <li class="rank-item">
                                            <div class="normal-type g-clear">
                                                <span class="num">10</span>
                                                <a title="时间都知道" href="https://www.360kan.com/tv/Q4FpcH7lRm8uN3.html" class="name">时间都知道</a>
                                                <span class="vv">18.5万</span></div>
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
            <div data-block="tj-xuexijinxingshi" class="p-xuexijinxingshi" monitor-desc="奋斗新时代" monitor-shortpv=""></div>
            <div class="p-banner" data-block="tj-banner" monitor-desc="横幅" monitor-shortpv="">
                <a href="https://v.360kan.com/album/eqLpPLZWbYa57v.html">
                    <img src="./index_files/t01bee39e64e525999f.jpg" alt="" class="p-bigcover" />
                    <img src="./index_files/t01bee39e64e525999f(1).jpg" alt="" class="p-smallcover" /></a>
            </div>
            <div class="content-wrap g-clear">
                <div class="zongyi g-clear">
                    <div data-block="tj-bbzy" monitor-desc="百变综艺" class="p-mod content-left" monitor-shortpv="">
                        <div class="p-mod-title g-clear">
                            <span class="p-mod-label">百变综艺</span>
                            <a class="p-mod-more" href="https://www.360kan.com/zongyi/index.html">更多&gt;</a>
                            <a class="p-mod-desc" href="https://www.360kan.com/zongyi/list.php">最新热播</a>
                            <span class="p-mod-b">&middot;</span>
                            <a class="p-mod-desc" href="https://www.360kan.com/zongyi/list.php?cat=104&amp;year=&amp;area=all&amp;act=all">情感</a>
                            <span class="p-mod-b">&middot;</span>
                            <a class="p-mod-desc" href="https://www.360kan.com/zongyi/list.php?cat=103&amp;year=&amp;area=all&amp;act=all">访谈</a>
                            <span class="p-mod-b">&middot;</span>
                            <a class="p-mod-desc" href="https://www.360kan.com/zongyi/list.php?cat=107&amp;year=&amp;area=all&amp;act=all">搞笑</a></div>
                        <div class="content zycontent">
                            <ul class="list w-newfigure-list g-clear">
                                <li title="向往的生活 第三季" class="w-newfigure w-newfigure-380x321">
                                    <a href="https://www.360kan.com/va/YcAqa3Ny8ZY3Ez.html" class="js-link">
                                        <div class="w-newfigure-imglink g-playicon js-playicon">
                                            <img src="./index_files/t01b613fe54a4958b91.jpg" data-src="https://p.ssl.qhimg.com/t01b613fe54a4958b91.jpg" alt="向往的生活 第三季" />
                                            <span class="w-newfigure-hint">2019-07-19期</span></div>
                                        <div class="w-newfigure-detail">
                                            <p class="title g-clear">
                                                <span class="s1">向往的生活 第三季</span></p>
                                            <p class="w-newfigure-desc">蘑菇屋五人温馨齐聚！</p></div>
                                    </a>
                                </li>
                                <li title="快乐大本营" class="w-newfigure w-newfigure-180x153">
                                    <a href="https://www.360kan.com/va/ZsEob6Jv7JQ3Dz.html" class="js-link">
                                        <div class="w-newfigure-imglink g-playicon js-playicon">
                                            <img src="./index_files/t011992155b689bd590.gif" data-src="https://p.ssl.qhimg.com/t011992155b689bd590.gif" alt="快乐大本营" />
                                            <span class="w-newfigure-hint">2019-07-20期</span></div>
                                        <div class="w-newfigure-detail">
                                            <p class="title g-clear">
                                                <span class="s1">快乐大本营</span></p>
                                            <p class="w-newfigure-desc">王俊凯歌单曝光遭吐槽？</p></div>
                                    </a>
                                </li>
                                <li title="我家小两口" class="w-newfigure w-newfigure-180x153">
                                    <a href="https://www.360kan.com/va/Z8Ioa3Ny8pM3ET.html" class="js-link">
                                        <div class="w-newfigure-imglink g-playicon js-playicon">
                                            <img src="./index_files/dy_c402ac82df8c83cddc89c1f7c3e63336_" data-src="https://p.ssl.qhimg.com/d/dy_c402ac82df8c83cddc89c1f7c3e63336." alt="我家小两口" />
                                            <span class="w-newfigure-hint">2019-07-20期</span></div>
                                        <div class="w-newfigure-detail">
                                            <p class="title g-clear">
                                                <span class="s1">我家小两口</span></p>
                                            <p class="w-newfigure-desc">向佐郭碧婷草原举办婚礼</p></div>
                                    </a>
                                </li>
                                <li title="跨界喜剧王4" class="w-newfigure w-newfigure-180x153">
                                    <a href="https://www.360kan.com/va/as5mcHNy8pMAFD.html" class="js-link">
                                        <div class="w-newfigure-imglink g-playicon js-playicon">
                                            <img src="./index_files/t01999c4cc321d05ce4.webp" data-src="https://p.ssl.qhimg.com/t01999c4cc321d05ce4.webp" alt="跨界喜剧王4" />
                                            <span class="w-newfigure-hint">2019-07-20期</span></div>
                                        <div class="w-newfigure-detail">
                                            <p class="title g-clear">
                                                <span class="s1">跨界喜剧王4</span></p>
                                            <p class="w-newfigure-desc">泼辣柳岩狂拧宋晓峰耳朵</p></div>
                                    </a>
                                </li>
                                <li title="笑傲江湖4" class="w-newfigure w-newfigure-180x153">
                                    <a href="https://www.360kan.com/va/ZcYlanNy8pE2FD.html" class="js-link">
                                        <div class="w-newfigure-imglink g-playicon js-playicon">
                                            <img src="./index_files/t01f936191561dfdae6.jpg" data-src="https://p.ssl.qhimg.com/t01f936191561dfdae6.jpg" alt="笑傲江湖4" />
                                            <span class="w-newfigure-hint">2019-07-20期</span></div>
                                        <div class="w-newfigure-detail">
                                            <p class="title g-clear">
                                                <span class="s1">笑傲江湖4</span></p>
                                            <p class="w-newfigure-desc">&quot;小贾玲&quot;贴身扭胯舞看懵老郭</p></div>
                                    </a>
                                </li>
                                <li title="中国好声音2019" class="w-newfigure w-newfigure-180x153">
                                    <a href="https://www.360kan.com/va/ZcApaXNy8pQ3Ez.html" class="js-link">
                                        <div class="w-newfigure-imglink g-playicon js-playicon">
                                            <img src="./index_files/dy_c8eafd6ba87a7e2c5053a046d7be6dc9_" data-src="https://p.ssl.qhimg.com/d/dy_c8eafd6ba87a7e2c5053a046d7be6dc9." alt="中国好声音2019" />
                                            <span class="w-newfigure-hint">2019-07-19期</span></div>
                                        <div class="w-newfigure-detail">
                                            <p class="title g-clear">
                                                <span class="s1">中国好声音2019</span></p>
                                            <p class="w-newfigure-desc">李荣浩抢人遭那英闭麦</p></div>
                                    </a>
                                </li>
                                <li title="我最爱的女人们" class="w-newfigure w-newfigure-180x153">
                                    <a href="http://www.mgtv.com/b/328920/6052900.html?cxid=90f0zbamf" data-daochu="to=imgo&amp;id=246736&amp;category=3&amp;type=zongyi" class="js-link">
                                        <div class="w-newfigure-imglink g-playicon js-playicon">
                                            <img src="./index_files/dy_6ad10dab818432d9be49df35eb14fe56_" data-src="https://p.ssl.qhimg.com/d/dy_6ad10dab818432d9be49df35eb14fe56." alt="我最爱的女人们" />
                                            <span class="w-newfigure-hint">2019-07-20期</span></div>
                                        <div class="w-newfigure-detail">
                                            <p class="title g-clear">
                                                <span class="s1">我最爱的女人们</span></p>
                                            <p class="w-newfigure-desc">人鱼夫妇打架吓懵张晋</p></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div data-block="tj-zyrank" monitor-desc="综艺排行" class="content-right" monitor-shortpv="">
                        <div class="p-mod rank">
                            <div class="p-mod-title g-clear">
                                <span class="p-mod-label">综艺排行榜</span></div>
                            <div class="content rank-content">
                                <ul class="rank-list g-clear">
                                    <li class="rank-item">
                                        <div class="normal-type g-clear">
                                            <span class="num top3">1</span>
                                            <a title="向往的生活 第三季" href="https://www.360kan.com/va/YcAqa3Ny8ZY3Ez.html" class="name">向往的生活 第三季</a>
                                            <span class="vv">111万</span></div>
                                    </li>
                                    <li class="rank-item">
                                        <div class="normal-type g-clear">
                                            <span class="num top3">2</span>
                                            <a title="中国好声音2019" href="https://www.360kan.com/va/ZcApaXNy8pQ3Ez.html" class="name">中国好声音2019</a>
                                            <span class="vv">69.5万</span></div>
                                    </li>
                                    <li class="rank-item">
                                        <div class="normal-type g-clear">
                                            <span class="num top3">3</span>
                                            <a title="中餐厅 第三季" href="https://www.360kan.com/va/ZsItcHNy8pQ4DD.html" class="name">中餐厅 第三季</a>
                                            <span class="vv">64.8万</span></div>
                                    </li>
                                    <li class="rank-item">
                                        <div class="normal-type g-clear">
                                            <span class="num">4</span>
                                            <a title="快乐大本营" href="https://www.360kan.com/va/ZsEob6Jv7JQ3Dz.html" class="name">快乐大本营</a>
                                            <span class="vv">32.7万</span></div>
                                    </li>
                                    <li class="rank-item">
                                        <div class="normal-type g-clear">
                                            <span class="num">5</span>
                                            <a title="奔跑吧 第三季" href="https://www.360kan.com/va/Y85lb3Ny8ZY5Dj.html" class="name">奔跑吧 第三季</a>
                                            <span class="vv">26.9万</span></div>
                                    </li>
                                    <li class="rank-item">
                                        <div class="normal-type g-clear">
                                            <span class="num">6</span>
                                            <a title="极限挑战第5季" href="https://www.360kan.com/va/Y8YncHNy8Zk3Ez.html" class="name">极限挑战第5季</a>
                                            <span class="vv">20.7万</span></div>
                                    </li>
                                    <li class="rank-item">
                                        <div class="normal-type g-clear">
                                            <span class="num">7</span>
                                            <a title="我家那小子 第二季" href="https://www.360kan.com/va/ZcEpbnNy8Zc4ED.html" class="name">我家那小子 第二季</a>
                                            <span class="vv">17.2万</span></div>
                                    </li>
                                    <li class="rank-item">
                                        <div class="normal-type g-clear">
                                            <span class="num">8</span>
                                            <a title="中国新说唱2019" href="https://www.360kan.com/va/YsQpbHNy8pI6DT.html" class="name">中国新说唱2019</a>
                                            <span class="vv">16.6万</span></div>
                                    </li>
                                    <li class="rank-item">
                                        <div class="normal-type g-clear">
                                            <span class="num">9</span>
                                            <a title="声入人心 第二季" href="https://www.360kan.com/va/acMpa3Ny8pMAEj.html" class="name">声入人心 第二季</a>
                                            <span class="vv">15.5万</span></div>
                                    </li>
                                    <li class="rank-item">
                                        <div class="normal-type g-clear">
                                            <span class="num">10</span>
                                            <a title="新生日记" href="https://www.360kan.com/va/Z8Ykb3Ny8pI8Dz.html" class="name">新生日记</a>
                                            <span class="vv">9.3万</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrap p-ad g-clear index-ad">
                <!--第一个广告需引入这个js库，之后的广告不需引入，即只引入一次即可-->
                <script src="./index_files/mvf_shop_window.js"></script>
                <div class="b-bannerad  js-bannerad" data-block="tj-jpyx" monitor-desc="精品优选" monitor-shortpv="" data-small="pCACTz" data-wide="iRv4rq">
                    <h3 class="a-common-title g-clear">
                        <span>精品优选</span>
                        <!-- <b class="b-bannerad-change js-change"><i></i>换一换</b> --></h3>
                    <div class="b-bannerad-main js-bannerad-main" id="360video_bottominteractivead_1"></div>
                </div>
            </div>
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