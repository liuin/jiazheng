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
                        您好,欢迎来到泰维峰! <a href="login.php">[请登录]</a> <a href="reg.php">
                            [雇主注册]</a> <a href="reg2.php">[服务员注册]</a></div>

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
                                <div class="cate-tag"><strong class="dt_title01"><a href="category.php" style="text-decoration:none;">家政分类</a></strong>
                                    <div class="listModel">
                                        <p><a href="category.php">日常家务</a>
                                        </p>
                                        <p><a href="category.php">育儿服务</a>
                                        </p>
                                        <p><a href="category.php">月嫂服务</a>
                                        </p>
                                        <p><a href="category.php">老人看护</a>
                                        </p>
                                        <p><a href="category.php">病患特护</a>
                                        </p>
                                        <p><a href="category.php">小时工</a>
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="li001" style="background-color: #efefef; height: 92px; *height: 90px; overflow: hidden; display: block;">
                                <div class="cate-tag"><strong class="dt_title02"><a style="text-decoration:none;" href="product.php">我要找</a></strong>
                                    <div class="listModel">
                                        <p><a href="product.php">最新推荐</a>
                                        </p>
                                        <p><a href="product.php">找服务员</a>
                                        </p>
                                        <p><a href="product.php">找店面</a>
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="li001" style="background-color: #FFF;  overflow: hidden;display: block;">
                                <div class="cate-tag"><strong class="dt_title03" style="padding-bottom:10px;"><a style="text-decoration:none;" href="article.php">前沿资讯</a></strong>
                                </div>
                            </li>
                            <li class="li001" style="background-color: #efefef;  overflow: hidden; display: block; padding-bottom:10px;">
                                <div class="cate-tag"><strong class="dt_title04"><a href="about.php" style="text-decoration:none;">关于我们</a></strong>
                                </div>
                            </li>
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
                    <li class="<?php if($title == '首页'){echo 'on';} ?>"><a href="index.php" >首 页</a></li>
                    <li class="<?php if($title == '找服务员'){echo 'on';} ?>"><a href="category.php">找服务员</a></li>
                    <li class="<?php if($title == '店面顾问'){echo 'on';} ?>"><a href="stores.php" >店面顾问</a></li>
                    <li class="<?php if($title == '前沿资讯'){echo 'on';} ?>"><a href="article.php" >前沿资讯</a></li>
                    <li class="<?php if($title == '关于我们'){echo 'on';} ?>"><a href="about.php" >关于我们</a></li>
                    
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