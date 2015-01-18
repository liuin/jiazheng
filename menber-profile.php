<?php include( "inc/header.php"); $title="服务员中心-个人资料" ; ?>
<!--主体 开始-->
<div class="big_content">
<div class="content03">
            <div class="member">
            <div class="memcate">
                <h2><strong>服务员会员</strong></h2><div class="memcate_main"><div class="info"><h3>交易管理</h3><ul><li ><a href="#">首页</a></li><li ><a href="#" >我的合同</a></li></ul></div><div class="info"><h3>账户管理</h3><ul><li class="on"><a href="#">个人资料</a></li><li><a href="#">账户安全</a></li></ul></div><div class="info"><h3>客户服务</h3><ul><li><a href="#">发布简历</a></li></ul></div></div><div class="memcate_bo"></div>
            </div>
            <div class="memcontent">
                    <h2 class="title09">
                        <strong>个人资料</strong></h2>
                    <div class="main" style="position: relative;">
                        
                        <table width="100%" border="0" cellspacing="0" cellpadding="5" class="table_padding_6">
                            <form name="frm_account_profile" method="post" action="/member/account_do.aspx"></form>
                            <tbody><tr>
                                <td width="100" align="right" class="t12_53">
                                    昵称
                                </td>
                                <td>
                                    cuki13
                                </td>
                            </tr>
                            <tr>
                                <td width="100" align="right" class="t12_53">
                                    头像
                                </td>
                                <td>
                                    <img id="img_member_img" src="images/detail_no_pic.gif" width="130" height="130" onload="javascript:AutosizeImage(this,180,180);">
                                </td>
                            </tr>
                            <tr>
                                <td width="100" align="right" class="t12_53">
                                </td>
                                <td align="left">
                                    <input type="button" name="btn_upload" value="上传" class="smb_btn" onclick="javascript:openUpload('member_img');">
                                    <input type="button" name="btn_upload" value="删除" class="smb_btn" onclick="javascript:delImage('member_img');"><input type="hidden" name="member_img" id="member_img" value="images/detail_no_pic.gif">
                                </td>
                            </tr>
                            <tr id="td_upload" style="display: none">
                                <td width="100" align="right" class="t12_53">
                                    上传图片
                                </td>
                                <td class="cell_content">
                                    <iframe id="iframe_upload" src="" width="100%" height="35" frameborder="0" scrolling="no">
                                    </iframe>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" style="line-height: 24px;" class="t12_53">
                                    姓名
                                </td>
                                <td>
                                    <input name="member_name" type="text" id="member_name" class="txt_border" size="20" maxlength="50" value="">
                                    <span class="t14_red">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" class="t12_53">
                                    身份证
                                </td>
                                <td>
                                    <input name="member_idcard" type="text" id="member_idcard" class="txt_border" size="20" maxlength="20" value="">
                                    <span class="t14_red">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" style="line-height: 24px;" class="t12_53">
                                    性别
                                </td>
                                <td>
                                    <input name="member_sex" type="radio" id="member_sex_male" value="0">
                                    男
                                    <input name="member_sex" type="radio" id="member_sex_female" value="1">
                                    女 <span class="t14_red">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="top" style="line-height: 24px;" class="t12_53">
                                    联系地址
                                </td>
                                <td>
                                    <table border="0" cellspacing="0" cellpadding="2">
                                        <tbody><tr>
                                            <td>
                                                省份
                                            </td>
                                            <td>
                                                &nbsp;
                                                <input type="hidden" id="Member_Province" name="Member_Province" value="">
                                                <input type="hidden" id="Member_City" name="Member_City" value="">
                                                <input type="hidden" id="Member_District" name="Member_District" value="">
                                            </td>
                                            <td id="div_area">
                                                <select name="s_Member_Province" id="s_Member_Province" onchange="RefillAddress('div_area', 'Member_Province', 'Member_City', 'Member_District', this.options[this.selectedIndex].value, '', '');"><option value="">----选择省----</option><option value="1">北京市</option><option value="2">天津市</option><option value="3">上海市</option><option value="4">重庆市</option><option value="5">河北省</option><option value="6">山西省</option><option value="7">内蒙古自治区</option><option value="8">辽宁省</option><option value="9">吉林省</option><option value="10">黑龙江省</option><option value="11">江苏省</option><option value="12">浙江省</option><option value="13">安徽省</option><option value="14">福建省</option><option value="15">江西省</option><option value="16">山东省</option><option value="17">河南省</option><option value="18">湖北省</option><option value="19">湖南省</option><option value="20">广东省</option><option value="21">广西壮族自治区</option><option value="22">海南省</option><option value="23">四川省</option><option value="24">贵州省</option><option value="25">云南省</option><option value="26">西藏自治区</option><option value="27">陕西省</option><option value="28">甘肃省</option><option value="29">青海省</option><option value="30">宁夏回族自治区</option><option value="31">新疆维吾尔自治区</option><option value="32">香港特别行政区</option><option value="33">澳门特别行政区</option><option value="34">台湾省</option></select><select name="s_Member_City" id="s_Member_City"><option value="">----选择市/地区----</option></select><select name="s_Member_District" id="s_Member_District"><option value="">----选择区/县----</option></select>
                                                <span class="t14_red">*</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                地址
                                            </td>
                                            <td>
                                                &nbsp;
                                            </td>
                                            <td>
                                                <input type="hidden" name="Member_country" id="Member_country" value="CN"><input name="Member_StreetAddress" class="txt_border" type="text" id="Member_StreetAddress" size="40" maxlength="100" value="">
                                                <span class="t14_red">*</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                邮政编码
                                            </td>
                                            <td>
                                                &nbsp;
                                            </td>
                                            <td>
                                                <input name="Member_Zip" type="text" class="txt_border" id="Member_Zip" size="15" maxlength="10" value="">
                                                <span class="t14_red">*</span>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" class="t12_53">
                                    电话
                                </td>
                                <td>
                                    <input name="member_phone_countrycode" type="hidden" id="member_phone_countrycode" value="+86">
                                    <input name="member_phone_number" type="text" class="txt_border" id="member_phone_number" size="20" maxlength="20" value="">
                                    <span class="t14_red">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" class="t12_53">
                                    手机
                                </td>
                                <td>
                                    <input name="member_mobile" type="text" id="member_mobile" class="txt_border" size="20" maxlength="20" value="">
                                    电话与手机至少填写一项<span class="t14_red">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" class="t12_53">
                                    年龄
                                </td>
                                <td>
                                    <input name="member_age" type="text" id="member_age" class="txt_border" size="20" maxlength="20" value="0">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td align="right" class="t12_53">
                                    学历
                                </td>
                                <td>
                                    <select id="Education_ID" name="Education_ID" onchange=""><option value="">选择学历</option><option value="1">小学</option><option value="2">初中</option><option value="3">高中</option><option value="4">大专</option><option value="5">本科</option></select>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td align="right" class="t12_53">
                                    职业
                                </td>
                                <td>
                                    <input name="member_work" type="text" id="member_work" class="txt_border" size="20" maxlength="20" value="">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td align="right" class="t12_53">
                                    生日
                                </td>
                                <td>
                                    <input name="member_birthday" type="text" id="member_birthday" class="txt_border" size="20" maxlength="20" value="">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td align="right" class="t12_53">
                                </td>
                                <td>
                                    <input name="action" type="hidden" id="action" value="account_profile"><input name="btn_submit" type="submit" class="buttonSkinA" id="btn_submit" value="保存">
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