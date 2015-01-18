<?php include( "inc/header.php"); $title="服务员中心-账户安全" ; ?>
<!--主体 开始-->
<div class="big_content">
<div class="content03">
            <div class="member">
            <div class="memcate">
                <h2><strong>服务员会员</strong></h2><div class="memcate_main"><div class="info"><h3>交易管理</h3><ul><li ><a href="#">首页</a></li><li ><a href="#" >我的合同</a></li></ul></div><div class="info"><h3>账户管理</h3><ul><li><a href="#">个人资料</a></li><li class="on"><a href="#">账户安全</a></li></ul></div><div class="info"><h3>客户服务</h3><ul><li><a href="#">发布简历</a></li></ul></div></div><div class="memcate_bo"></div>
            </div>
            <div class="memcontent">
                    <h2 class="title09">
                        <strong>账户安全</strong></h2>
                    <div class="main" style="position: relative;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="5" class="table_padding_6" style="margin-top:15px;">
                            <form name="frm_account_profile" method="post" action="/member/account_do.aspx"></form>
                            <tbody><tr>
                                <td width="100" align="right" class="t12_53">
                                    旧密码
                                </td>
                                <td>
                                    <input name="member_oldpassword" type="password" class="txt_border" id="Password1" size="40" maxlength="20">
                                    <span class="t12_red">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    &nbsp;
                                </td>
                                <td class="tip">
                                    <div id="Div1">
                                        输入原有密码</div>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" class="t12_53">
                                    新密码
                                </td>
                                <td>
                                    <input name="member_password" type="password" class="txt_border" id="Password2" size="40" maxlength="20">
                                    <span class="t12_red">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    &nbsp;
                                </td>
                                <td class="tip">
                                    <div id="Div2">
                                    </div>
                                    请使用由数字和字母共同组成的密码来增强您的帐号的安全型。请输入6～20位密码（A-Z，a-z，0-9，不要输入空格）
                                </td>
                            </tr>
                            <tr>
                                <td align="right" class="t12_53">
                                    确认新密码
                                </td>
                                <td>
                                    <input name="member_password_confirm" class="txt_border" type="password" id="Password3" size="40" maxlength="12">
                                    <span class="t12_red">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    &nbsp;
                                </td>
                                <td class="tip">
                                    <div id="Div3">
                                    </div>
                                    请再次输入密码
                                </td>
                            </tr>
                            <tr>
                                <td align="right" class="t12_53">
                                    验证码
                                </td>
                                <td>
                                    <input name="verifycode" type="text" onfocus="$('#var_img').attr('src','/Public/verifycode.aspx?timer='+Math.random());" class="txt_border" id="Text1" size="10" maxlength="10">
                                    <span class="t12_red">*</span>
                                    <img id="Img1" alt="看不清？换一张" title="看不清？换一张" src="images/vcode.png" onclick="this.src='../Public/verifycode.aspx?timer='+Math.random();" style="cursor: pointer; display: inline;" align="absmiddle">
                                </td>
                            </tr>
                            <tr>
                                <td align="right" class="t12_53">
                                    &nbsp;
                                </td>
                                <td>
                                    <span class="tip">
                                        <div id="Div4">
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" class="t12_53">
                                    &nbsp;
                                </td>
                                <td>
                                    <span class="table_v_title">
                                        <input name="action" type="hidden" id="Hidden1" value="account_password">
                                        <input name="btn_submit" type="submit" class="buttonSkinA" id="Submit1" value="修改密码">
                                    </span>
                                </td>
                            </tr>
                            
                        </tbody></table>
                    </div>
                </div>
            <div class="clear"></div>
      </div>
      </div><!--关于我们主体 结束-->
</div>
<!--主体 结束-->
<?php include( "inc/footer.php");?>