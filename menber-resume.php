<?php include( "inc/header.php"); $title="服务员中心-发布简历" ; ?>
<!--主体 开始-->
<div class="big_content">
<div class="content03">
            <div class="member">
            <div class="memcate">
                <h2><strong>服务员会员</strong></h2><div class="memcate_main"><div class="info"><h3>交易管理</h3><ul><li ><a href="#">首页</a></li><li ><a href="#" >我的合同</a></li></ul></div><div class="info"><h3>账户管理</h3><ul><li ><a href="#">个人资料</a></li><li><a href="#">账户安全</a></li></ul></div><div class="info"><h3>客户服务</h3><ul><li class="on"><a href="#">发布简历</a></li></ul></div></div><div class="memcate_bo"></div>
            </div>
            <div class="memcontent">
                    <h2 class="title09">
                        <strong>发布简历</strong></h2>
                    <div class="main" style="position: relative;padding:20px;">
                        <form name="form_feedback" method="post" action="/member/Resume_do.aspx">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="8" class="table_padding_5">
                                        <tbody><tr>
                                            <td width="100" align="center" class="t12_53">
                                                姓名
                                            </td>
                                            <td class="t12_grey" align="left">
                                                <input name="Resume_Name" type="text" id="Resume_Name" size="50" maxlength="100">
                                                <span class="t12_red">*</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100" align="center" class="t12_53">
                                                性别
                                            </td>
                                            <td class="t12_grey" align="left">
                                                <input name="Resume_Sex" type="radio" id="Resume_Sex1" value="1">男
                                            <input type="radio" name="Resume_Sex" id="Resume_Sex2" value="2" checked="checked">女
                                                <span class="t12_red">*</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100" align="center" class="t12_53">
                                                年龄
                                            </td>
                                            <td class="t12_grey" align="left">
                                                <input type="text" id="Resume_Age" name="Resume_Age" size="6">&nbsp;岁
                                                <span class="t12_red">*</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100" align="center" class="t12_53">
                                                籍贯
                                            </td>
                                            <td class="t12_grey" align="left">
                                                <select name="Resume_HomeTown" id="s_Resume_HomeTown"><option value="">----选择籍贯----</option><option value="1">北京市</option><option value="2">天津市</option><option value="3">上海市</option><option value="4">重庆市</option><option value="5">河北省</option><option value="6">山西省</option><option value="7">内蒙古自治区</option><option value="8">辽宁省</option><option value="9">吉林省</option><option value="10">黑龙江省</option><option value="11">江苏省</option><option value="12">浙江省</option><option value="13">安徽省</option><option value="14">福建省</option><option value="15">江西省</option><option value="16">山东省</option><option value="17">河南省</option><option value="18">湖北省</option><option value="19">湖南省</option><option value="20">广东省</option><option value="21">广西壮族自治区</option><option value="22">海南省</option><option value="23">四川省</option><option value="24">贵州省</option><option value="25">云南省</option><option value="26">西藏自治区</option><option value="27">陕西省</option><option value="28">甘肃省</option><option value="29">青海省</option><option value="30">宁夏回族自治区</option><option value="31">新疆维吾尔自治区</option><option value="32">香港特别行政区</option><option value="33">澳门特别行政区</option><option value="34">台湾省</option></select>
                                                <span class="t12_red">*</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" class="t12_53">
                                                民族
                                            </td>
                                            <td align="left">
                                                <select id="Resume_NationID" name="Resume_NationID"><option value="">选择民族</option><option value="1">汉族</option><option value="2">壮族</option><option value="3">满族</option><option value="4">回族</option><option value="5">苗族</option><option value="6">维吾尔族</option><option value="7">土家族</option><option value="8">彝族</option><option value="9">蒙古族</option><option value="10">藏族</option><option value="11">布依族</option><option value="12">侗族</option><option value="13">瑶族</option><option value="14">朝鲜族</option><option value="15">白族</option><option value="16">哈尼族</option><option value="17">哈萨克族</option><option value="18">黎族</option><option value="19">傣族</option><option value="20">畲族</option><option value="21">僳僳族</option><option value="22">仡佬族</option><option value="23"> 东乡族</option><option value="24">高山族</option><option value="25">拉祜族</option><option value="26"> 水族</option><option value="27"> 佤族</option><option value="28">纳西族</option><option value="29"> 羌族</option><option value="30">土族</option><option value="31">仫佬族</option><option value="32">锡伯族</option><option value="33">柯尔克孜族</option><option value="34">达斡尔族</option><option value="35">景颇族</option><option value="36">毛南族</option><option value="37">撒拉族</option><option value="38">布朗族</option><option value="39">塔吉克族</option><option value="40">阿昌族</option><option value="41">普米族</option><option value="42">鄂温克族</option><option value="43">怒族</option><option value="44">京族</option><option value="45">基诺族</option><option value="46">德昂族</option><option value="47">保安族</option><option value="48">俄罗斯族</option><option value="49">裕固族</option><option value="50">乌兹别克族</option><option value="51">门巴族</option><option value="52">鄂伦春族</option><option value="53">独龙族</option><option value="54">塔塔尔族</option><option value="55">赫哲族</option><option value="56">珞巴族</option></select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" class="t12_53">
                                                身高
                                            </td>
                                            <td align="left">
                                                <input name="Resume_Height" type="text" id="Resume_Height" size="6">&nbsp;cm
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                体重
                                            </td>
                                            <td align="left">
                                                <input name="Resume_Weight" type="text" id="Resume_Weight" size="6">&nbsp;kg
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                婚否
                                            </td>
                                            <td align="left">
                                                <select id="Resume_MarriageID" name="Resume_MarriageID"><option value="">选择婚姻状况</option><option value="2">已婚</option><option value="3">单身</option></select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                属相
                                            </td>
                                            <td align="left">
                                                <select id="Resume_ZodiacID" name="Resume_ZodiacID" onchange=""><option value="">选择属相</option><option value="1">鼠</option><option value="2">牛</option><option value="3">虎</option><option value="4">兔</option><option value="5">龙</option><option value="6">蛇</option><option value="7">马</option><option value="8">羊</option><option value="9">猴</option><option value="10">鸡</option><option value="11">狗</option><option value="12">猪</option></select>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                星座
                                            </td>
                                            <td align="left">
                                                <select id="Resume_ConstellationID" name="Resume_ConstellationID" onchange=""><option value="">选择星座</option><option value="1">白羊座</option><option value="2">金牛座</option><option value="3">双子座</option><option value="4">巨蟹座</option><option value="5">狮子座</option><option value="6">处女座</option><option value="7">天秤座</option><option value="8">天蝎座</option><option value="9">射手座</option><option value="10">摩羯座</option><option value="11">水瓶座</option><option value="12">双鱼座</option></select>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                学历
                                            </td>
                                            <td align="left">
                                                <select id="Resume_EducationID" name="Resume_EducationID" onchange=""><option value="">选择学历</option><option value="1">小学</option><option value="2">初中</option><option value="3">高中</option><option value="4">大专</option><option value="5">本科</option></select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                手机
                                            </td>
                                            <td align="left">
                                                <input name="Resume_MobileNum" type="text" id="Resume_MobileNum" size="50" maxlength="50">
                                                <span class="t12_red">*</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                身份证号
                                            </td>
                                            <td align="left">
                                                <input type="text" id="Resume_IDCard" name="Resume_IDCard" maxlength="50" size="50" onblur="check_product_idcard('Product_IDCard',0);">
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                身份证地址
                                            </td>
                                            <td align="left">
                                                <input name="Resume_IDCardAddress" type="text" id="Resume_IDCardAddress" size="50" maxlength="100">
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                现居地区
                                            </td>
                                            <td align="left">
                                                <span id="textDiv">
                                                <select name="s_Resume_StateCode" id="s_Resume_StateCode" onchange="RefillAddress('textDiv', 'Resume_StateCode', 'Resume_CityCode', 'Resume_CountyCode', this.options[this.selectedIndex].value, '', '');"><option value="">----选择省----</option><option value="1">北京市</option><option value="2">天津市</option><option value="3">上海市</option><option value="4">重庆市</option><option value="5">河北省</option><option value="6">山西省</option><option value="7">内蒙古自治区</option><option value="8">辽宁省</option><option value="9">吉林省</option><option value="10">黑龙江省</option><option value="11">江苏省</option><option value="12">浙江省</option><option value="13">安徽省</option><option value="14">福建省</option><option value="15">江西省</option><option value="16">山东省</option><option value="17">河南省</option><option value="18">湖北省</option><option value="19">湖南省</option><option value="20">广东省</option><option value="21">广西壮族自治区</option><option value="22">海南省</option><option value="23">四川省</option><option value="24">贵州省</option><option value="25">云南省</option><option value="26">西藏自治区</option><option value="27">陕西省</option><option value="28">甘肃省</option><option value="29">青海省</option><option value="30">宁夏回族自治区</option><option value="31">新疆维吾尔自治区</option><option value="32">香港特别行政区</option><option value="33">澳门特别行政区</option><option value="34">台湾省</option></select><select name="s_Resume_CityCode" id="s_Resume_CityCode"><option value="">----选择市/地区----</option></select><select name="s_Resume_CountyCode" id="s_Resume_CountyCode"><option value="">----选择区/县----</option></select></span>
                                            <input type="hidden" id="Resume_StateCode" name="Resume_StateCode">
                                            <input type="hidden" id="Resume_CityCode" name="Resume_CityCode">
                                            <input type="hidden" id="Resume_CountyCode" name="Resume_CountyCode">
                                                <span class="t12_red">*</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                现居地址
                                            </td>
                                            <td align="left">
                                                <input type="text" id="Resume_Address" name="Resume_Address" size="70" maxlength="100">
                                                <span class="t12_red">*</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                家中排行
                                            </td>
                                            <td align="left">
                                                <select name="Resume_HomeRanking" id="Resume_HomeRanking"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                子女数量
                                            </td>
                                            <td align="left">
                                                <select name="Resume_ChildNum" id="Resume_ChildNum"><option value="0" selected="selected">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                子女年龄
                                            </td>
                                            <td align="left">
                                                <input type="text" id="Resume_ChildAge" name="Resume_ChildAge" size="6" value="0">&nbsp;岁
                                            &nbsp;&nbsp;<input type="text" id="Resume_ChildAge1" name="Resume_ChildAge" size="6" value="0">&nbsp;岁
                                            &nbsp;&nbsp;<input type="text" id="Resume_ChildAge2" name="Resume_ChildAge" size="6" value="0">&nbsp;岁
                                            &nbsp;&nbsp;<input type="text" id="Resume_ChildAge3" name="Resume_ChildAge" size="6" value="0">&nbsp;岁
                                            &nbsp;&nbsp;<input type="text" id="Resume_ChildAge4" name="Resume_ChildAge" size="6" value="0">&nbsp;岁
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                配偶职业
                                            </td>
                                            <td align="left">
                                                <input type="text" id="Resume_SpouseJob" name="Resume_SpouseJob" size="50" maxlength="20">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                在本市的家人
                                            </td>
                                            <td align="left">
                                                <table cellspacing="0" cellpadding="0" border="0"><tbody><tr>    <td><input type="checkbox" name="Resume_Family" id="Resume_Family1" value="1">父母&nbsp;<input type="checkbox" name="Resume_Family" id="Resume_Family2" value="2">配偶&nbsp;<input type="checkbox" name="Resume_Family" id="Resume_Family3" value="3">子女&nbsp;    </td></tr></tbody></table>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                工作类型
                                            </td>
                                            <td align="left">
                                                <div class="li_box"><p><span class="sp_tit" style="text-align:right;">日常家务：</span><span><input name="Resume_CateID" type="checkbox" value="7">一般家务</span><span><input name="Resume_CateID" type="checkbox" value="8">高端家务</span><span><input name="Resume_CateID" type="checkbox" value="9">别墅家务</span><span><input name="Resume_CateID" type="checkbox" value="10">涉外家务</span><span><input name="Resume_CateID" type="checkbox" value="11">管家服务</span></p><p><span class="sp_tit" style="text-align:right;">育儿服务：</span><span><input name="Resume_CateID" type="checkbox" value="15">育儿嫂</span><span><input name="Resume_CateID" type="checkbox" value="16">育儿兼家务</span><span><input name="Resume_CateID" type="checkbox" value="17">高级育婴师</span><span><input name="Resume_CateID" type="checkbox" value="18">早教师</span></p><p><span class="sp_tit" style="text-align:right;">月嫂服务：</span><span><input name="Resume_CateID" type="checkbox" value="19">月嫂服务</span><span><input name="Resume_CateID" type="checkbox" value="20">催乳服务</span></p><p><span class="sp_tit" style="text-align:right;">老人看护：</span><span><input name="Resume_CateID" type="checkbox" value="21">自理老人看护</span><span><input name="Resume_CateID" type="checkbox" value="22">半自理老人看护</span><span><input name="Resume_CateID" type="checkbox" value="23">不自理老人看护</span></p><p><span class="sp_tit" style="text-align:right;">病患特护：</span><span><input name="Resume_CateID" type="checkbox" value="24">病患家庭护理</span><span><input name="Resume_CateID" type="checkbox" value="25">医院护工</span></p><p><span class="sp_tit" style="text-align:right;">小时工：</span><span><input name="Resume_CateID" type="checkbox" value="26">家务小时工</span><span><input name="Resume_CateID" type="checkbox" value="27">清洁卫生小时工</span><span><input name="Resume_CateID" type="checkbox" value="28">烹饪做饭小时工</span><span><input name="Resume_CateID" type="checkbox" value="29">接送小孩小时工</span></p><p><span class="sp_tit" style="text-align:right;">专业服务：</span><span><input name="Resume_CateID" type="checkbox" value="30">家庭司机</span><span><input name="Resume_CateID" type="checkbox" value="31">家庭教师</span><span><input name="Resume_CateID" type="checkbox" value="32">厨师</span><span><input name="Resume_CateID" type="checkbox" value="37">公司用工</span><span><input name="Resume_CateID" type="checkbox" value="35">公司保洁</span><span><input name="Resume_CateID" type="checkbox" value="36">公司做饭</span></p><p><span class="sp_tit" style="text-align:right;">其他：</span></p></div>
                                                <span class="t12_red">*</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                从业时间
                                            </td>
                                            <td align="left">
                                                <input type="text" id="Resume_Experience" name="Resume_Experience" size="6">&nbsp;年
                                                <span class="t12_red">*</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                技能证书
                                            </td>
                                            <td align="left">
                                                <table cellspacing="0" cellpadding="0" border="0"><tbody><tr>    <td><br><input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID1" value="1">母婴护理师证&nbsp;<input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID2" value="2">高级育婴师证&nbsp;<input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID3" value="3">育婴师证&nbsp;<input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID4" value="4">营养师证&nbsp;<input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID5" value="5">催乳师证&nbsp;<br><input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID6" value="6">早教师证&nbsp;<input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID7" value="7">高级家政管理师证&nbsp;<input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID8" value="8">教师资格证&nbsp;<input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID9" value="9">医师证&nbsp;<input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID10" value="10">护士证&nbsp;<br><input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID11" value="11">驾照&nbsp;<input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID12" value="12">厨师证&nbsp;<input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID13" value="13">会计证&nbsp;<input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID14" value="14">计算机等级证 &nbsp;<input type="checkbox" name="Resume_CertificationID" id="Resume_CertificationID15" value="15">英语等级证&nbsp;    </td></tr></tbody></table>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                普通话程度
                                            </td>
                                            <td align="left">
                                                <select name="Resume_Mandarin" id="Resume_Mandarin"><option value="1">标准</option><option value="2">一般</option><option value="3">有口音</option></select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                职业特长
                                            </td>
                                            <td align="left">
                                                <table cellspacing="0" cellpadding="0" border="0"><tbody><tr>    <td style="width:80px; text-align:right;">日常家务:    </td>    <td><input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID1" value="1">烹饪&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID2" value="2">煲汤&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID3" value="3">面食&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID4" value="4">北方风味&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID5" value="5">南方风味&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID6" value="6">家务清洁&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID7" value="7">洗衣熨烫&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID8" value="8">驾驶&nbsp;    </td></tr><tr style="height:15px;"></tr><tr>    <td style="width:80px; text-align:right;">育儿嫂:    </td>    <td><input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID9" value="9">洗澡抚触&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID10" value="10">儿歌游戏&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID11" value="11">早教开发&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID12" value="12">辅食制作&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID13" value="13">婴儿操&nbsp;    </td></tr><tr style="height:15px;"></tr><tr>    <td style="width:80px; text-align:right;">月嫂:    </td>    <td><input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID14" value="14">新生儿洗澡抚触&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID15" value="15">新生儿常见病观察&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID16" value="16">双胞胎护理&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID17" value="17">月子餐&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID18" value="18">乳房护理&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID19" value="19">产后恢复&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID20" value="20">产妇心理疏导&nbsp;    </td></tr><tr style="height:15px;"></tr><tr>    <td style="width:80px; text-align:right;">老人看护:    </td>    <td><input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID21" value="21">老年餐制作&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID22" value="22">自理老人护理&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID23" value="23">半自理护理&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID24" value="24">不自理护理&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID25" value="25">老人常见病护理&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID26" value="26">老人心理慰藉&nbsp;    </td></tr><tr style="height:15px;"></tr><tr>    <td style="width:80px; text-align:right;">病患特护:    </td>    <td><input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID27" value="27">医护常识&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID28" value="28">医护技能&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID29" value="29">中医知识&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID30" value="30">康复训练&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID31" value="31">按摩推拿&nbsp;    </td></tr><tr style="height:15px;"></tr><tr>    <td style="width:80px; text-align:right;">高端家政:    </td>    <td><input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID32" value="32">英语&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID33" value="33">西餐&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID34" value="34">西点&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID35" value="35">插花&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID36" value="36">茶艺&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID37" value="37">植物养护&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID38" value="38">宠物饲养&nbsp;    </td></tr><tr style="height:15px;"></tr><tr>    <td style="width:80px; text-align:right;">家庭教师:    </td>    <td><input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID39" value="39">课业辅导&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID40" value="40">外语&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID41" value="41">美术&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID42" value="42">音乐&nbsp;<input type="checkbox" name="Resume_SpecialtyID" id="Resume_SpecialtyID43" value="43">舞蹈&nbsp;    </td></tr><tr style="height:15px;"></tr></tbody></table>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                其他技能
                                            </td>
                                            <td align="left">
                                                <input type="text" id="Resume_OtherSkills" name="Resume_OtherSkills" maxlength="50" size="50">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                理想工作
                                            </td>
                                            <td align="left">
                                                <table cellspacing="0" cellpadding="0" border="0"><tbody><tr>    <td><br><input type="checkbox" name="Resume_Working" id="Resume_Working1" value="1">日常家务&nbsp;<input type="checkbox" name="Resume_Working" id="Resume_Working2" value="2">高端家务&nbsp;<input type="checkbox" name="Resume_Working" id="Resume_Working3" value="3">涉外家政&nbsp;<input type="checkbox" name="Resume_Working" id="Resume_Working4" value="4">管家&nbsp;<input type="checkbox" name="Resume_Working" id="Resume_Working5" value="5">育儿嫂&nbsp;<br><input type="checkbox" name="Resume_Working" id="Resume_Working6" value="6">育儿兼家务&nbsp;<input type="checkbox" name="Resume_Working" id="Resume_Working7" value="7">月嫂&nbsp;<input type="checkbox" name="Resume_Working" id="Resume_Working8" value="8">自理老人看护&nbsp;<input type="checkbox" name="Resume_Working" id="Resume_Working9" value="9">半自理老人看护&nbsp;<input type="checkbox" name="Resume_Working" id="Resume_Working10" value="10">不自理老人看护&nbsp;<br><input type="checkbox" name="Resume_Working" id="Resume_Working11" value="11">病患特护&nbsp;<input type="checkbox" name="Resume_Working" id="Resume_Working12" value="12">医院护工&nbsp;<input type="checkbox" name="Resume_Working" id="Resume_Working13" value="13">小时工&nbsp;    </td></tr></tbody></table>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                其他工作
                                            </td>
                                            <td align="left">
                                                <input type="text" id="Resume_OtherWorking" name="Resume_OtherWorking" maxlength="50" size="50">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                期望工资
                                            </td>
                                            <td align="left">
                                                <input name="Resume_LowPrice" type="text" id="Resume_LowPrice" maxlength="10" size="6" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')">
                                           --
                                            <input name="Resume_HighPrice" type="text" id="Resume_HighPrice" maxlength="10" size="6" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')">
                                                <span class="t12_red">*</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                工作状态
                                            </td>
                                            <td align="left">
                                                <select name="Resume_WorkingStatus" id="Resume_WorkingStatus"><option value="1">住家</option><option value="2">不住家</option><option value="3">临时小时工</option><option value="4">长期小时工</option><option value="5">无特别要求</option></select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                休息时间
                                            </td>
                                            <td align="left">
                                                <select name="Resume_Rest" id="Resume_Rest"><option value="1">每周1天</option><option value="2">每周2天</option><option value="3">两周1天</option><option value="4">无休</option><option value="5">无特别要求</option></select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                个人特点
                                            </td>
                                            <td align="left">
                                                <table cellspacing="0" cellpadding="0" border="0"><tbody><tr>    <td style="width:80px; text-align:right;">性格:    </td>    <td><input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID1" value="1">开朗&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID2" value="2">热情&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID3" value="3">温和&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID4" value="4">爽快&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID5" value="5">稳重&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID6" value="6">踏实&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID7" value="7">细心&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID8" value="8">健谈&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID9" value="9">善良&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID10" value="10">老实&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID11" value="11">亲切&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID12" value="12">幽默&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID13" value="13">斯文&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID14" value="14">朴素&nbsp;    </td></tr><tr style="height:15px;"></tr><tr>    <td style="width:80px; text-align:right;">态度:    </td>    <td><input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID15" value="15">吃苦耐劳&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID16" value="16">谦虚&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID17" value="17">自信&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID18" value="18">敬业&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID19" value="19">有责任心&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID20" value="20">严谨&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID21" value="21">乐观&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID22" value="22">守信&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID23" value="23">好学&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID24" value="24">宽容&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID25" value="25">诚实&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID26" value="26">耐心&nbsp;    </td></tr><tr style="height:15px;"></tr><tr>    <td style="width:80px; text-align:right;">素质:    </td>    <td><input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID27" value="27">热爱生活&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID28" value="28">热爱工作&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID29" value="29">干净整洁&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID30" value="30">有条理性&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID31" value="31">喜欢孩子&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID32" value="32">尊敬老人&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID33" value="33">尊重客户&nbsp;    </td></tr><tr style="height:15px;"></tr><tr>    <td style="width:80px; text-align:right;">能力:    </td>    <td><input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID34" value="34">身体健康&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID35" value="35">善沟通&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID36" value="36">普通话好&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID37" value="37">会电脑&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID38" value="38">懂外语&nbsp;<input type="checkbox" name="Resume_CharacterID" id="Resume_CharacterID39" value="39">有驾照&nbsp;    </td></tr><tr style="height:15px;"></tr></tbody></table>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="center" class="t12_53">
                                                其他特点
                                            </td>
                                            <td align="left">
                                                <input type="text" id="Resume_OtherCharacter" name="Resume_OtherCharacter" maxlength="50" size="50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" class="t12_53">
                                            </td>
                                            <td align="left">
                                                <input name="btn_submit" type="submit" class="buttonSkinA" id="btn_submit" value="提交" align="absmiddle">
                                                <input name="action" type="hidden" id="action" value="new">
                                                <input name="Ads_Type" id="Ads_Type" value="0" type="hidden">
                                                <input name="Ads_ID" id="Ads_ID" value="0" type="hidden">
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                        </tbody></table>
                        </form>
                    </div>
                </div>
            <div class="clear"></div>
      </div>
      </div><!--关于我们主体 结束-->
</div>
<!--主体 结束-->
<?php include( "inc/footer.php");?>