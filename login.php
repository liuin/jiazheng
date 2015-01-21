<?php include( "inc/header.php"); $title="雇主登陆" ; ?>
<!--主体 开始-->
<div class="big_content">
<div class="content04">
<div class="login_register">
            <h2><span>我还未注册,<a href="reg.php">[立即注册]</a></span>用户登录</h2>
            <div class="main">
                  <h3 class="title10">
                      <ul>
                          <li class="on"><a href="login.php">雇主登录</a></li>
                          <li><a href="login2.php">服务员登录</a></li>
                      </ul>
                      <div class="clear"></div>
                  </h3>
                  <div class="main_01" style=" background-image:none;">
                        <form action="login_do.aspx?action=login&amp;Login_Type=1" method="post" name="login_form" id="login_form">
                               <ul>
                                  <li><strong><i>*</i>用 户 名：</strong><label><input name="member_name" id="member_name" type="text" value=""></label></li>
                                  <li style="padding-left:145px;padding-top:0px; font-size:12px; color:#cc0000"></li>
                                  <li><strong><i>*</i>密&nbsp;&nbsp;&nbsp;&nbsp;码：</strong><label><input name="member_password" id="member_password" type="password"></label><a href="#" target="_blank" class="a6">找回密码</a></li>
                                  <li style="padding-left:145px;padding-top:0px;font-size:12px; color:#cc0000"></li>
                                  <li><strong><i>*</i>验 证 码：</strong><label style="width:169px;"><input name="vierfy_code" id="vierfy_code" type="text" style="width:149px;" value=""></label><img id="var_img" src="images/vcode.png" align="absmiddle">&nbsp;&nbsp;看不清？<a href="#" onclick="$('#var_img').attr('src','/Public/verifycode.aspx?timer='+Math.random());">换一张</a><div class="clear"></div><span style="width:132px;font-size:12px;display:block;"></span><div class="clear"></div></li>
                                  <li style="padding-left:145px;padding-top:0px;font-size:12px; color:#cc0000"></li>
                                  <li class="li03" style=" margin-top:0; margin-left:92px;"><input name="chk_UserName" id="chk_UserName" type="checkbox" value="1" checked="checked">记住账户名 <input name="chk_AutoLogin" id="chk_AutoLogin" type="checkbox" value="1">自动登录</li>
                                  <li class="li02"><a id="login" href="#" onclick="document.login_form.submit();" class="buttom006"></a></li>
                               </ul>
                        </form>
                  </div>
                  
            </div>
      </div>
</div>
<!--关于我们主体 结束-->
</div>
<!--主体 结束-->
<?php include( "inc/footer.php");?>