<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<meta name="renderer" content="webkit">
<meta name="description" content="">
<meta name="author" content="cuki13">
<title><?php if(isset($title)){echo $title;} ?></title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/MSClass.js" type="text/javascript"></script>
<script src="js/jquery.lazyload.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>  

<!--[if IE 8]>
  <link href="css/ie.css" rel="stylesheet" media="all" type="text/css" />
<![endif]-->

<!--[if lt IE 8]>
  <link href="css/ie.css" rel="stylesheet" media="all" type="text/css" />
<![endif]-->
<!--[if IE 6]>
  <script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js"></script>
  <script type="text/javascript">
    //<![CDATA[
    DD_belatedPNG.fix('.png');
    //]]></script>
<![endif]-->
</head>

<body class="<?php if(isset($page)){echo $page;} ?>">
<noscript>
  <strong>你的浏览器似乎禁用了 JavaScript。</strong><br />您必须在浏览器中启用JavaScript才能使用本网站的功能。 
</noscript>

<!--top-->
<div class="top">
    <!--头部 开始-->
    <div class="head">
        <div class="head_main">
            <div class="head_info01">
                <div class="main">
                    <div class="head_info01_left" id="top_left">
                        您好,欢迎来到泰维峰! <a href="#">[请登录]</a> <a href="#">
                            [雇主注册]</a> <a href="#">[服务员注册]</a></div>

                    <div class="head_info01_left" id="login_area">
                    
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
            <div class="head_info02">
                <div class="main">
                    <div class="logo">
                        <a href="#" >
                            <img src="images/logo2.gif" width="300" height="76" alt="家政网logo"></a></div>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--头部 结束-->
    <!--导航 开始-->
    <div class="nav">
        <div class="main">
            <div class="nav_main_left">
            <div class="nav_all_information <?php if($title!='首页'){echo 'nav_all_information02';} ?>">快捷搜索<span class="navarrow-down">↓</span><span class="navarrow-up">↑</span>
    <div class="nav_info  <?php if($title!='首页'){echo 'nav_info02';} ?>">
        <div class="headNav">
            <div class="navCon w1020">
                <div class="navCon-cate fl">
                    <div class="cateMenu">
                        <ul>
                            <li class="li001" style="background-color: #FFF; height: 115px; *height: 113px; overflow: hidden; display: block;">
                                <div class="cate-tag"><strong class="dt_title01"><a style="text-decoration:none;">家政分类</a></strong>
                                    <div class="listModel">
                                        <p><a href="#">日常家务</a>
                                        </p>
                                        <p><a href="#">育儿服务</a>
                                        </p>
                                        <p><a href="#">月嫂服务</a>
                                        </p>
                                        <p><a href="#">老人看护</a>
                                        </p>
                                        <p><a href="#">病患特护</a>
                                        </p>
                                        <p><a href="#">小时工</a>
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="list-item hide" id="top01" style="display: none;">
                                    <h2><a href="#" onclick="$('#top01').hide();">[X] 关闭菜单</a>家政分类</h2>
                                    <div class="hide_main01">
                                        <div class="blk001">
                                             <h3><a href="#">日常家务</a></h3>
                                            <div class="blk001_main">
                                                <p><a href="#">一般家务</a>
                                                <a href="#">高端家务</a>
                                                <a href="#">别墅家务</a>
                                                <a href="#">涉外家务</a>
                                                <a href="#">管家服务</a>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="blk001">
                                             <h3><a href="#">育儿服务</a></h3>
                                            <div class="blk001_main">
                                                <p><a href="#">育儿嫂</a>
                                                <a href="#">育儿兼家务</a>
                                                <a href="#">高级育婴师</a>
                                                <a href="#">早教师</a>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="blk001">
                                             <h3><a href="#">月嫂服务</a></h3>
                                            <div class="blk001_main">
                                                <p><a href="#">月嫂服务</a>
                                                <a href="#">催乳服务</a>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="blk001">
                                             <h3><a href="#">老人看护</a></h3>
                                            <div class="blk001_main">
                                                <p><a href="#">自理老人看护</a>
                                                <a href="#">半自理老人看护</a>
                                                <a href="#">不自理老人看护</a>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="blk001">
                                             <h3><a href="#">病患特护</a></h3>
                                            <div class="blk001_main">
                                                <p><a href="#">病患家庭护理</a>
                                                <a href="#">医院护工</a>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="blk001">
                                             <h3><a href="#">小时工</a></h3>
                                            <div class="blk001_main">
                                                <p><a href="#">家务小时工</a>
                                                <a href="#">清洁卫生小时工</a>
                                                <a href="#">烹饪做饭小时工</a>
                                                <a href="#">接送小孩小时工</a>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="li001" style="background-color: #efefef; height: 92px; *height: 90px; overflow: hidden; display: block;">
                                <div class="cate-tag"><strong class="dt_title02"><a style="text-decoration:none;">我要找</a></strong>
                                    <div class="listModel">
                                        <p><a href="#">最新推荐</a>
                                        </p>
                                        <p><a href="#">找服务员</a>
                                        </p>
                                        <p><a href="#">找雇主</a>
                                        </p>
                                        <p><a href="#">找店面</a>
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="list-item hide" id="top02" style="display: none;">
                                    <h2><a href="#" onclick="$('#top02').hide();">[X] 关闭菜单</a>我要找</h2>
                                    <div class="hide_main02 hide_main02_ie6">
                                        <div class="blk002">
                                            <h3><a>服务员推荐</a></h3>
                                            <div class="blk002_main">
                                                <dl style="border-bottom: none"><dt><a href="#">编号:TWF0002240 籍贯:河北省 年龄:49岁</a></dt>
                                                    <dd>
                                                        <p>服务类型: 日常家务、小时工、一般家务、高端家务、别墅家务、涉外家务、管家服务、家务小时工、清洁卫生小时工、烹饪做饭小时工</p>
                                                        <p>好评指数: 80
                                                            <img src="images/x.jpg">
                                                            <img src="images/x.jpg">
                                                            <img src="images/x.jpg">
                                                            <img src="images/x.jpg">
                                                            <img src="images/x.jpg">
                                                        </p>
                                                        <p>关注:0</p>
                                                    </dd>
                                                </dl>
                                                <dl style="border-bottom: none"><dt><a href="#">编号:TWF0002241 籍贯:安徽省 年龄:48岁</a></dt>
                                                    <dd>
                                                        <p>服务类型: 日常家务、老人看护、小时工、一般家务、高端家务、别墅家务、涉外家务、管家服务、自理老人看护、半自理老人看护</p>
                                                        <p>好评指数: 80
                                                            <img src="images/x.jpg">
                                                            <img src="images/x.jpg">
                                                            <img src="images/x.jpg">
                                                            <img src="images/x.jpg">
                                                            <img src="images/x.jpg">
                                                        </p>
                                                        <p>关注:0</p>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="blk002">
                                            <h3><a>雇主推荐</a></h3>
                                            <div class="blk002_main">
                                                <dl style="border-bottom: none"><dt><a href="#" target="_blank">需求:别墅家务</a></dt>
                                                    <dd>
                                                        <p>招聘人:朱女士</p>
                                                        <p>工作地点：北京市 市辖区 东城区</p>
                                                        <p>关注:57</p>
                                                    </dd>
                                                </dl>
                                                <dl style="border-bottom: none"><dt><a href="#" target="_blank">需求:医院护工</a></dt>
                                                    <dd>
                                                        <p>招聘人:谭先生</p>
                                                        <p>工作地点：北京市 市辖区 朝阳区</p>
                                                        <p>关注:44</p>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="blk002">
                                            <h3><a>店面推荐</a></h3>
                                            <div class="blk002_main">
                                                <dl style="border-bottom: none"><dt><a href="#">劲松店</a></dt>
                                                    <dd>
                                                        <p>电话:400 666 4266-801</p>
                                                        <p>地址:朝阳区东三环南路58号富顿中心D座2207室</p>
                                                    </dd>
                                                </dl>
                                                <dl style="border-bottom: none"><dt><a href="#">中关村店</a></dt>
                                                    <dd>
                                                        <p>电话:400 666 4266-808</p>
                                                        <p>地址:海淀区北三环西路48号科技会展中心2号楼8层8C</p>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="li001" style="background-color: #FFF; height: 92px; *height: 90px; overflow: hidden;display: block;">
                                <div class="cate-tag"><strong class="dt_title03"><a style="text-decoration:none;">前沿资讯</a></strong>
                                    <div class="listModel">
                                        <p><a href="#">温馨提示</a>
                                        </p>
                                        <p><a href="#">家政常识</a>
                                        </p>
                                        <p><a href="#">育儿嫂</a>
                                        </p>
                                        <p><a href="#">知识中心</a>
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="list-item hide" id="top03" style="display: none;">
                                    <h2 style="padding: 15px 20px 0 25px;"><a href="#" onclick="$('#top03').hide();">[X] 关闭菜单</a>前沿资讯</h2>
                                    <div class="hide_main03 hide_main03_ie6" style="height:260px;">
                                        <div class="blk001">
                                            <h3><a href="#">温馨提示</a></h3>
                                            <div class="blk001_main">
                                                <p><a title="手机辐射充电器请出卧室，一定要转啊!" href="#">手机辐射充</a>
                                                <a title="放到你的朋友圈上，大家都会感激你的！" href="#">放到你的朋</a>
                                                <a title="育儿嫂提示您如何顺应四季养五脏方法？" href="#">育儿嫂提示</a>
                                                <a title="全球十大长寿食物排行榜，建议保存。" href="#">全球十大长</a>
                                                <a title="春季适合高血压患者降血压的廉价六种食物" href="#">春季适合高</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="blk001">
                                            <h3><a href="#">家政常识</a></h3>
                                            <div class="blk001_main">
                                                <p><a title="泰维峰家政服务让宝宝在冬季睡得暖和又踏实" href="#">泰维峰家政</a>
                                                <a title="育婴师服务权拍出高价 家庭服务业一人难求" href="#">育婴师服务</a>
                                                <a title="保姆：走心的雇主更能留住我们" href="#">保姆：走心</a>
                                                <a title="北京家政2014年春节保供活动圆满结束" href="#">北京家政2</a>
                                                <a title="家政公司提醒：找保姆需要注意的事项？" href="#">家政公司提</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="blk001">
                                            <h3><a href="#">育儿嫂</a></h3>
                                            <div class="blk001_main">
                                                <p><a title="育儿嫂教您怎么陪3岁宝宝玩的五种小游戏" href="#">育儿嫂教您</a>
                                                <a title="北京育儿嫂教您怎么护理孩子外伤的处理" href="#">北京育儿嫂</a>
                                                <a title="育儿嫂常识都有哪些：如何进行宝宝的清洁护理" href="#">育儿嫂常识</a>
                                                    <a title="育儿嫂提醒您这些零食让宝宝越吃越笨" href="#">育儿嫂提醒</a>
                                                    <a title="病从口入五种吃饭方式对身体不好" href="#">病从口入五</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="blk001">
                                            <h3><a href="#">知识中心</a></h3>
                                            <div class="blk001_main">
                                                <p><a title="北京旅游需注意哪些。泰维峰温馨提示" href="#">北京旅游需</a>
                                                <a title="宝宝游泳急救小常识 泰维峰分享" href="#">宝宝游泳急</a>
                                                <a title="如何教宝宝游泳和游泳的水温与室温要求" href="#">如何教宝宝</a>
                                                <a title=" 泰维峰家政温馨提示：健康常识" href="#"> 泰维峰家</a>
                                                <a title="果蔬纤维素对人体的12大好处，不可不看！" href="#">果蔬纤维素</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="li001" style="background-color: #efefef; height: 121px; overflow: hidden; display: block;">
                                <div class="cate-tag"><strong class="dt_title04"><a style="text-decoration:none;">关于我们</a></strong>
                                    <div class="listModel">
                                        <p><a href="#">公司简介</a>
                                        </p>
                                        <p><a href="#">企业文化</a>
                                        </p>
                                        <p><a href="#">权威资质</a>
                                        </p>
                                        <p><a href="#">荣誉成绩</a>
                                        </p>
                                        <p><a href="#">公司相册</a>
                                        </p>
                                        <p><a href="#">培训中心</a>
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="list-item hide" id="top04" style="display: none;">
                                    <h2><a href="#" onclick="$('#top04').hide();">[X] 关闭菜单</a>关于我们</h2>
                                    <div class="hide_main04 hide_main04_ie6">
                                        <div class="blk004">
                                            <h3><a href="#">公司简介</a></h3>
                                            <div class="blk001_main">
                                                <p>      泰维峰家政是“北京泰维峰家政服务有限公司”创立并运营的一家为国内外籍家庭、高端家庭及广大市民，提供完<a href="#">[详情]</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="blk004">
                                            <h3><a href="#">企业文化</a></h3>
                                            <div class="blk001_main">
                                                <p>泰维峰企业文化 核心价值观 ------  团队、协作、关爱、高效、创新 品牌理念 ------   关心关怀、热心服务、真诚奉献 企业使命<a href="#">[详情]</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="blk004">
                                            <h3><a href="#">权威资质</a></h3>
                                            <div class="blk001_main">
                                                <p> 北京唯一1家政府菜篮子工程家政示范企业！北京市政府家政服务企业建设单位！    权威资质更包括：   
<a href="#">[详情]</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="blk004">
                                            <h3><a href="#">荣誉成绩</a></h3>
                                            <div class="blk001_main">
                                                <p>客户赠与马连道店张老师锦旗 客户王女士赠与东直门店贾阿姨锦旗 客户李女士赠与亚运村店老师锦旗  80岁高龄客户陈女士亲自<a href="#">[详情]</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="blk004">
                                            <h3><a href="#">公司相册</a></h3>
                                            <div class="blk001_main">
                                                <p> 第二排右起第四位为（吉）马集团董事主席拿督严孟杰先生  中国家协副会长韩兵先生，北京家协会长李大经女士出席泰维峰表彰大会 &n<a href="#">[详情]</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </li>
                            <li style="display: none; height: 0; overflow: hidden; border: none;"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="nav_main_right">
                <ul>
                    <li class="on"><a href="#" >首 页</a></li>
                    <li class=""><a href="#">找服务员</a></li>
                    <li class=""><a href="#" >店面顾问</a></li>
                    <li class=""><a href="#" >前沿资讯</a></li>
                    <li style="background-image: none;" class=""><a href="#" >关于我们</a></li>
                    
                </ul>
                <div class="clear">
                </div>
               
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <!--导航 结束-->
</div>
<!--top-->