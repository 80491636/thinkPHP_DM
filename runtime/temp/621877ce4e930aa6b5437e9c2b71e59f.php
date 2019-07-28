<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"D:\phpStudy\PHPTutorial\WWW\dm\public/../application/index\view\playlst\playlst.html";i:1564313543;s:69:"D:\phpStudy\PHPTutorial\WWW\dm\application\index\view\common\top.html";i:1564283243;s:70:"D:\phpStudy\PHPTutorial\WWW\dm\application\index\view\common\foot.html";i:1564283243;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0045)https://www.360kan.com/ct/OUPkaZ7kNY7vDj.html -->
<html class="" lang="zh-cn">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>斗罗大陆-更新更全更受欢迎的影视网站-在线观看</title>
    <meta name="referrer" content="always">
    <!--<base target="_blank">-->
    <link href="http://127.0.0.1/dm/public/static/index/styles/top.css" type="text/css" rel="stylesheet" />
    <link href="http://127.0.0.1/dm/public/static/index/styles/playlst.css" type="text/css" rel="stylesheet" /><body class="g-wide">
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

    <div class="c-top">
        <div class="c-top-main-wrap">
            <div class="c-top-main">
                <!-- 数据开始 -->
                <div class="m-top m-top-dongman g-clear">
                    <div class="m-top-left">
                        <div class="s-cover" data-block="tj-cover" monitor-desc="大海报" monitor-shortpv="" id="js-s-cover">
                            <a href="http://v.qq.com/x/page/m00253deqqo.html?ptag=360kan.cartoon.free" class="g-playicon s-cover-img" data-daochu="to=qq" data-num="1">
                                <img src="<?php echo $data['vertical_pic_url']; ?>">
                                <!-- <i class="ico-pay"></i> -->
                            </a>
                        </div>
                    </div>
                    <div class="m-top-right">
                        <div data-block="tj-info" monitor-desc="详细信息" monitor-shortpv="" class="m-top-info">
                            <div class="m-top-info-title g-clear">
                                <div class="title-left g-clear">
                                    <h1><?php echo $data['series_name']; ?></h1>
                                    <p class="tag"><?php echo $data['episode_updated']; ?></p>
                                    <div id="js-eb-store" class="eb-store">
                                        <a target="_self" href="https://www.360kan.com/ct/OUPkaZ7kNY7vDj.html####" class="eb-unstore">收藏</a>
                                        <a target="_self" href="https://www.360kan.com/ct/OUPkaZ7kNY7vDj.html####" class="eb-stored">已收藏</a></div>
                                </div>
                                <div class="m-title-right"></div>
                            </div>
                            <div id="js-desc-switch" class="m-top-info-detail g-clear">
                                <div class="g-clear item-wrap">
                                    <p class="item">
                                        <span>类型 ：</span>
                                        <?php if(is_array($data['tag']) || $data['tag'] instanceof \think\Collection || $data['tag'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['tag'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <span class="cat"><?php echo $vo; ?></span>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </p>
                                        
                                    <p class="item">
                                        <span>年代 ：</span><?php echo $data['publish_date']; ?></p>
                                    <p class="item">
                                        <span>地区 ：</span>
                                        <a class="area first" href="http://www.360kan.com/dongman/list.php?cat=all&amp;year=all&amp;act=all&amp;area=10" target="_blank"><?php echo $data['area_name']; ?></a></p>
                                    <p style="clear:both"></p>
                                    <p class="item item-director">
                                        <span>导演 ：</span>
                                        <?php if(is_array($data['director_id']) || $data['director_id'] instanceof \think\Collection || $data['director_id'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['director_id'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <a class="name" href="http://so.360kan.com/index.php?kw=%E6%B2%88%E4%B9%90%E5%B9%B3&amp;from=yingshi"><?php echo $vo; ?></a>&nbsp;
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </p>
                                    <p class="item item-actor">
                                        <span>人物 ：</span>
                                        <?php if(is_array($data['leading_actor_id']) || $data['leading_actor_id'] instanceof \think\Collection || $data['leading_actor_id'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['leading_actor_id'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <a class="name" href="http://so.360kan.com/index.php?kw=%E6%B2%88%E7%A3%8A&amp;from=yingshi"><?php echo $vo; ?></a>&nbsp;/
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </p>
                                </div>
                                <div class="item-desc-wrap g-clear js-open-wrap">
                                    <span>简介 ：</span>
                                    <p class="item-desc"><?php echo $data['description']; ?>
                                        <a href="https://www.360kan.com/ct/OUPkaZ7kNY7vDj.html#" class="js-open btn">展开更多&gt;&gt;</a></p>
                                </div>
                                <div class="item-desc-wrap g-clear js-close-wrap" style="display:none;">
                                    <span>简介 ：</span>
                                    <p class="item-desc">唐门外门弟子唐三，因偷学内门绝学为唐门所不容，跳崖明志时却发现没有死，反而以另外一个身份来到了另一个世界，一个属于武魂的世界，名叫斗罗大陆。这里没有魔法，没有斗气，没有武术，却有神奇的武魂。这里的每个人，在自己六岁的时候，都会在武魂殿中令武魂觉醒。武魂有动物，有植物，有器物，武魂可以辅助人们的日常生活。而其中一些特别出色的武魂却可以用来修炼并进行战斗，这个职业，是斗罗大陆上最为强大也是最荣耀的职业“魂师”。小小的唐三在圣魂村开始了他的魂师修炼之路，并萌生了振兴唐门的梦想。当唐门暗器来到斗罗大陆，当唐三武魂觉醒，他能否在这片武魂的世界再铸唐门的辉煌？
                                        <a href="https://www.360kan.com/ct/OUPkaZ7kNY7vDj.html#" class="js-close btn">收起&lt;&lt;</a></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div id="js-siteact" class="m-top-list" data-block="tj-site" monitor-desc="剧集" monitor-shortpv="">
                                <div class="m-top-list-zd g-clear m-top-list-zd-wide">
                                    <div style=" visibility:hidden" class="js-s-hitclient s-hitclient s-hitclient-dongman"></div>
                                    <div class="s-playsite" id="js-s-playsite">
                                        <p class="js-current s-playsite-current">
                                            <span class="ea-site ea-site-qq">大树根动漫</span></p>
                                        <div class="sites js-sites">
                                        </div>
                                    </div>
                                </div>
                                <div class="site-wrap" id="js-site-wrap">
                                    <h2 class="title g-clear">
                                        <em></em>全部剧集</h2>
                                    <div class="m-series-content js-tab-content" data-default="t_4_OUPkaZ7kNY7vDj_qq">
                                        <div class="js-series-part m-series-number-container g-clear" data-daochu="to=qq&amp;id=OUPkaZ7kNY7vDj&amp;category=4">
                                            <?php if(is_array($data['nomal_ids']) || $data['nomal_ids'] instanceof \think\Collection || $data['nomal_ids'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['nomal_ids'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['F'] != 0): ?>
                                                    <a data-num="1" data-daochu="to=qq" href="https://v.qq.com/x/cover/<?php echo $data['pageid']; ?>/<?php echo $vo['V']; ?>.html"><?php echo $vo['E']; ?></a>
                                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                            <!-- <a data-num="61" data-daochu="to=qq" href="http://v.qq.com/x/page/e0031m3rkbq.html?ptag=360kan.cartoon.pay">61
                                                <i class="ico-fufei"></i>
                                                <i class="ico-pay"></i>
                                            </a> -->
                                            <a href="https://www.360kan.com/ct/OUPkaZ7kNY7vDj.html###" title="展开" class="expand-series js-expand-series" target="_self" style="width:126px;">展开</a></div>
                                        <div class="m-series-slice-tabs js-series-slice-tabs g-clear" style="display:none;">
                                            <div class="m-leftarrow-wrap js-m-leftarrow-wrap m-arrow-hide">
                                                <i class="m-leftarrow js-m-leftarrow"></i>
                                            </div>
                                            <div class="m-rightarrow-wrap js-m-rightarrow-wrap m-arrow-hide">
                                                <i class="m-rightarrow js-m-rightarrow"></i>
                                            </div>
                                            <div class="m-series-inner" style="margin-left: 0;">
                                                <div style="width:100px;" class="m-series-slice-wrap js-m-series-slice-wrap">
                                                    <a href="https://www.360kan.com/ct/OUPkaZ7kNY7vDj.html###" target="_self" data-seriesindex="series0" class="on">
                                                        <span>1-50</span></a>
                                                    <a href="https://www.360kan.com/ct/OUPkaZ7kNY7vDj.html###" target="_self" data-seriesindex="series1" class="">
                                                        <span>51-61</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="js-series-all m-series-number-container" style="display: none;" data-daochu="to=qq&amp;id=OUPkaZ7kNY7vDj&amp;category=4">
                                            <div class="series-slice-view g-clear js-series0">
                                                <a data-num="1" data-daochu="to=qq" href="http://v.qq.com/x/page/m00253deqqo.html?ptag=360kan.cartoon.free">1</a>
                                                <a data-num="2" data-daochu="to=qq" href="http://v.qq.com/x/page/h0025x3mn7z.html?ptag=360kan.cartoon.free">2</a>
                                                <a data-num="3" data-daochu="to=qq" href="http://v.qq.com/x/page/h00251u5sdp.html?ptag=360kan.cartoon.free">3</a>
                                                <a data-num="4" data-daochu="to=qq" href="http://v.qq.com/x/page/m0025m9timl.html?ptag=360kan.cartoon.free">4</a>
                                                <a data-num="5" data-daochu="to=qq" href="http://v.qq.com/x/page/h0025iluh3s.html?ptag=360kan.cartoon.free">5</a>
                                                <a data-num="6" data-daochu="to=qq" href="http://v.qq.com/x/page/i0025secmkz.html?ptag=360kan.cartoon.free">6</a>
                                                <a data-num="7" data-daochu="to=qq" href="http://v.qq.com/x/page/l0025jj5k4c.html?ptag=360kan.cartoon.free">7</a>
                                                <a data-num="8" data-daochu="to=qq" href="http://v.qq.com/x/page/t0026lw4wuj.html?ptag=360kan.cartoon.free">8</a>
                                                <a data-num="9" data-daochu="to=qq" href="http://v.qq.com/x/page/s0026bky36e.html?ptag=360kan.cartoon.free">9</a>
                                                <a data-num="10" data-daochu="to=qq" href="http://v.qq.com/x/page/i0026ro7v46.html?ptag=360kan.cartoon.free">10</a>
                                                <a data-num="11" data-daochu="to=qq" href="http://v.qq.com/x/page/y0026zwfcxz.html?ptag=360kan.cartoon.free">11</a>
                                                <a data-num="12" data-daochu="to=qq" href="http://v.qq.com/x/page/l0026lr4jrl.html?ptag=360kan.cartoon.free">12</a>
                                                <a data-num="13" data-daochu="to=qq" href="http://v.qq.com/x/page/q0026v58uya.html?ptag=360kan.cartoon.free">13</a>
                                                <a data-num="14" data-daochu="to=qq" href="http://v.qq.com/x/page/u0026n1fqcf.html?ptag=360kan.cartoon.free">14</a>
                                                <a data-num="15" data-daochu="to=qq" href="http://v.qq.com/x/page/z0026zhgtq0.html?ptag=360kan.cartoon.free">15</a>
                                                <a data-num="16" data-daochu="to=qq" href="http://v.qq.com/x/page/l0026rvdd95.html?ptag=360kan.cartoon.free">16</a>
                                                <a data-num="17" data-daochu="to=qq" href="http://v.qq.com/x/page/h00263hz9gh.html?ptag=360kan.cartoon.free">17</a>
                                                <a data-num="18" data-daochu="to=qq" href="http://v.qq.com/x/page/r0026l4olp9.html?ptag=360kan.cartoon.free">18</a>
                                                <a data-num="19" data-daochu="to=qq" href="http://v.qq.com/x/page/h0026vya197.html?ptag=360kan.cartoon.free">19</a>
                                                <a data-num="20" data-daochu="to=qq" href="http://v.qq.com/x/page/y0026y628hy.html?ptag=360kan.cartoon.free">20</a>
                                                <a data-num="21" data-daochu="to=qq" href="http://v.qq.com/x/page/d0026ctu9ot.html?ptag=360kan.cartoon.free">21</a>
                                                <a data-num="22" data-daochu="to=qq" href="http://v.qq.com/x/page/h0026gyumr9.html?ptag=360kan.cartoon.free">22</a>
                                                <a data-num="23" data-daochu="to=qq" href="http://v.qq.com/x/page/m0026b97sz3.html?ptag=360kan.cartoon.free">23</a>
                                                <a data-num="24" data-daochu="to=qq" href="http://v.qq.com/x/page/z00266v5bai.html?ptag=360kan.cartoon.free">24</a>
                                                <a data-num="25" data-daochu="to=qq" href="http://v.qq.com/x/page/v0026042pe7.html?ptag=360kan.cartoon.free">25</a>
                                                <a data-num="26" data-daochu="to=qq" href="http://v.qq.com/x/page/r00260v0o32.html?ptag=360kan.cartoon.free">26</a>
                                                <a data-num="27" data-daochu="to=qq" href="http://v.qq.com/x/page/u0029odpjaq.html?ptag=360kan.cartoon.free">27</a>
                                                <a data-num="28" data-daochu="to=qq" href="http://v.qq.com/x/page/p002905zkgq.html?ptag=360kan.cartoon.free">28</a>
                                                <a data-num="29" data-daochu="to=qq" href="http://v.qq.com/x/page/s0029jlq2mi.html?ptag=360kan.cartoon.free">29</a>
                                                <a data-num="30" data-daochu="to=qq" href="http://v.qq.com/x/page/i0029ge5l6h.html?ptag=360kan.cartoon.free">30</a>
                                                <a data-num="31" data-daochu="to=qq" href="http://v.qq.com/x/page/y0029iv1i36.html?ptag=360kan.cartoon.free">31</a>
                                                <a data-num="32" data-daochu="to=qq" href="http://v.qq.com/x/page/t00290se6d1.html?ptag=360kan.cartoon.free">32</a>
                                                <a data-num="33" data-daochu="to=qq" href="http://v.qq.com/x/page/t0029388uqa.html?ptag=360kan.cartoon.free">33</a>
                                                <a data-num="34" data-daochu="to=qq" href="http://v.qq.com/x/page/y00296wgtf4.html?ptag=360kan.cartoon.free">34</a>
                                                <a data-num="35" data-daochu="to=qq" href="http://v.qq.com/x/page/t0029j2qjzi.html?ptag=360kan.cartoon.free">35</a>
                                                <a data-num="36" data-daochu="to=qq" href="http://v.qq.com/x/page/b0029mdp69c.html?ptag=360kan.cartoon.free">36</a>
                                                <a data-num="37" data-daochu="to=qq" href="http://v.qq.com/x/page/n0029iv6xsm.html?ptag=360kan.cartoon.free">37</a>
                                                <a data-num="38" data-daochu="to=qq" href="http://v.qq.com/x/page/e00297fvh8c.html?ptag=360kan.cartoon.free">38</a>
                                                <a data-num="39" data-daochu="to=qq" href="http://v.qq.com/x/page/x0029fi8g5f.html?ptag=360kan.cartoon.free">39</a>
                                                <a data-num="40" data-daochu="to=qq" href="http://v.qq.com/x/page/x0029mu5avs.html?ptag=360kan.cartoon.free">40</a>
                                                <a data-num="41" data-daochu="to=qq" href="http://v.qq.com/x/page/h003065spwu.html?ptag=360kan.cartoon.free">41</a>
                                                <a data-num="42" data-daochu="to=qq" href="http://v.qq.com/x/page/p0030dxx286.html?ptag=360kan.cartoon.free">42</a>
                                                <a data-num="43" data-daochu="to=qq" href="http://v.qq.com/x/page/t0030oucbdd.html?ptag=360kan.cartoon.free">43</a>
                                                <a data-num="44" data-daochu="to=qq" href="http://v.qq.com/x/page/o00301ova85.html?ptag=360kan.cartoon.free">44</a>
                                                <a data-num="45" data-daochu="to=qq" href="http://v.qq.com/x/page/m0030a5hfoi.html?ptag=360kan.cartoon.free">45</a>
                                                <a data-num="46" data-daochu="to=qq" href="http://v.qq.com/x/page/b0030n6ydzg.html?ptag=360kan.cartoon.free">46</a>
                                                <a data-num="47" data-daochu="to=qq" href="http://v.qq.com/x/page/s0030yz79ai.html?ptag=360kan.cartoon.free">47</a>
                                                <a data-num="48" data-daochu="to=qq" href="http://v.qq.com/x/page/z0030kuc8p9.html?ptag=360kan.cartoon.free">48</a>
                                                <a data-num="49" data-daochu="to=qq" href="http://v.qq.com/x/page/s0030xyjlgv.html?ptag=360kan.cartoon.free">49</a>
                                                <a data-num="50" data-daochu="to=qq" href="http://v.qq.com/x/page/d00309oy7b5.html?ptag=360kan.cartoon.free">50</a>
                                                <a href="https://www.360kan.com/ct/OUPkaZ7kNY7vDj.html####" class="js-slice-series-slide" style="width:126px;">收起</a></div>
                                            <div class="series-slice-view g-clear js-series1" style="display:none;">
                                                <a data-num="51" data-daochu="to=qq" href="http://v.qq.com/x/page/r0030jqn37g.html?ptag=360kan.cartoon.free">51</a>
                                                <a data-num="52" data-daochu="to=qq" href="http://v.qq.com/x/page/a0030xwuufi.html?ptag=360kan.cartoon.free">52</a>
                                                <a data-num="53" data-daochu="to=qq" href="http://v.qq.com/x/page/x00300dqata.html?ptag=360kan.cartoon.free">53</a>
                                                <a data-num="54" data-daochu="to=qq" href="http://v.qq.com/x/page/u0031ivs6kv.html?ptag=360kan.cartoon.free">54</a>
                                                <a data-num="55" data-daochu="to=qq" href="http://v.qq.com/x/page/o0031vi0i37.html?ptag=360kan.cartoon.free">55</a>
                                                <a data-num="56" data-daochu="to=qq" href="http://v.qq.com/x/page/i00313ax78g.html?ptag=360kan.cartoon.free">56</a>
                                                <a data-num="57" data-daochu="to=qq" href="http://v.qq.com/x/page/r0031hnk2re.html?ptag=360kan.cartoon.free">57</a>
                                                <a data-num="58" data-daochu="to=qq" href="http://v.qq.com/x/page/u0031yygc9w.html?ptag=360kan.cartoon.free">58</a>
                                                <a data-num="59" data-daochu="to=qq" href="http://v.qq.com/x/page/b00318b53sv.html?ptag=360kan.cartoon.free">59</a>
                                                <a data-num="60" data-daochu="to=qq" href="http://v.qq.com/x/page/x0031kdbg1u.html?ptag=360kan.cartoon.free">60</a>
                                                <a data-num="61" data-daochu="to=qq" href="http://v.qq.com/x/page/e0031m3rkbq.html?ptag=360kan.cartoon.pay">61
                                                    <i class="ico-fufei"></i>
                                                    <i class="ico-pay"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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