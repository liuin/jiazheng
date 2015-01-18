<?php include( "inc/header.php"); $title="雇主注册" ; ?>
<script type="text/javascript" src="js/member.js"></script>
<!--主体 开始-->
<div class="big_content">
<div class="content04">
<div class="login_register">
                  <h2><span>我已经注册,<a href="#">[立即登录]</a></span>新用户注册</h2>
                  <div class="main">
                        <h3 class="title10">
                            <ul>
                                <li class="on"><a href="#">雇主注册</a></li>
                                <li class=""><a href="#">服务员注册</a></li>
                            </ul>
                            <div class="clear"></div>
                        </h3>
                        <div class="main_01 main_01_2">
                              <form action="/member/register_do.aspx?action=basicinfo&amp;register_type=1" method="post" id="register_form" onsubmit="return check_regform();">
                                     <ul>
                                        <li><strong><i>*</i>用 户 名：</strong><label><input name="member_nickname" id="member_nickname" type="text" onblur="check_member_nickname('member_nickname');"></label></li>
                                        <li style="padding-left:145px;padding-top:0px;"><div id="member_nickname_tip">您登录后显示的名称，不要超过15个字符</div></li>
                                        <li><strong><i>*</i>密&nbsp;&nbsp;&nbsp;&nbsp;码：</strong><label><input name="member_password" id="member_password" type="password" onblur="check_member_pwd('member_password');"></label></li>
                                        <li style="padding-left:145px;padding-top:0px;"><div id="member_password_tip">请输入6～20位密码（A-Z，a-z，0-9，不要输入空格）</div></li>
                                        <li><strong><i>*</i>确认密码：</strong><label><input name="member_password_confirm" id="member_password_confirm" type="password" onblur="check_member_repwd('member_password_confirm');"></label></li>
                                        <li style="padding-left:145px;padding-top:0px;"><div id="member_password_confirm_tip">请再次确认您的密码</div></li>
                                        <li><strong><i>*</i>手 机 号：</strong><label><input name="member_loginmobile" id="member_loginmobile" type="text" onblur="check_member_mobile('member_loginmobile');"></label></li>
                                        <li style="padding-left:145px;padding-top:0px;"><div id="member_loginmobile_tip">请输入您的手机号</div></li>

                                        <li><strong><i>*</i>离您家最近的店面：</strong><select id="member_stores" name="member_stores" onchange="change_managers(this.options[this.selectedIndex].value)"><option value="0">请选择</option><option value="2">劲松店</option><option value="3">中关村店</option><option value="4">三元桥店</option><option value="5">亚运村店</option><option value="6">大望路店</option><option value="7">东直门店</option><option value="8">朝阳公园店</option><option value="9">团结湖店</option><option value="10">方庄店</option><option value="11">世纪城金源店</option><option value="1">马连道店</option></select></li>
                                        <li style="padding-left:145px;padding-top:0px;"><div id="member_stores_tip">请选择离您家最近的店面</div></li>

                                        

                                        <li class="li02"><a href="#" onclick="$('#register_form').submit();"></a></li>
                                     </ul>
                              </form>
                        </div>
                        <div class="main_02">
                              <h3>协议</h3><p align="center">
	<strong>用户注册协议</strong></p>
<p>
	&nbsp;&nbsp;&nbsp; 本协议是用户与【北京泰维峰家政服务有限公司下属泰维峰家政服务平台】网站【简称“本站”，网址为： www.taiweifeng.com&nbsp; 】就网站服务等相关事宜所签订的协议，<strong>请用户在点击“同意”按钮之前，详细阅读本协议，用户可以选择不接受该协议条款</strong>，但用户点击“同意”按钮并提交后，依据《中华人民共和国合同法》《中华人民共和国电信条例》《互联网信息服务管理办法》等相关法律法规的规定，本协议<strong>即构成双方合法有效、对双方具有约束力的法律文件。</strong></p>
<p>
	&nbsp;</p>
<p>
	<strong>一、协议的签署</strong></p>
<p>
	&nbsp;</p>
<p>
	1、本站各项服务的所有权及运营权归北京市泰维峰家政服务有限公司享有，用户在注册完成后，即视为已经充分阅读并理解了本协议约定的条款，对于标黑加粗的字体，<strong>提醒用户重点阅读</strong>。</p>
<p>
	2、在注册之前，请用户确认同意该协议条款，如果用户不同意本协议内容或对本协议内容有异议，请用户立即停止注册。</p>
<p>
	3、请用户确认在注册时已经年满18周岁，若用户不满18周岁，必须在父母或监护人的监督下使用该网站。</p>
<p>
	&nbsp;</p>
<p>
	<strong>二、网站用户注册</strong></p>
<p>
	&nbsp;</p>
<p>
	1、当用户注册并使用本站时，应当是具有完全民事权利能力和完全民事行为能力的自然人、法人或其他组织，若用户不具备该资格，由此产生的一切责任均由用户本人及监护人承担，同时，本站有权随时终止用户的账户。</p>
<p>
	2、用户保证提供的注册信息及个人信息（包括但不限于自身健康程度、职业技能信息等）真实、及时、完整和准确。如果信息有变动，用户应及时通知本站，若<strong>用户未及时通知或提供的信息不真实、不准确、不合法，由此产生的一切法律责任及后果（包括本站的损失）均由用户自行承担。同时，本站有权暂停或终止向用户提供全部或部分服务。</strong></p>
<p>
	3、用户注册成功后，将产生用户名及密码等用户信息，用户有权更改密码。用户应当妥善、谨慎的保管和使用账户信息，不得利用该账户从事违法犯罪或侵犯他人合法权益的活动。若用户发现用户密码被盗，请立即通知本站或向司法机关报案。</p>
<p>
	4、未经本站同意，用户不得将注册成功的账户提供给其他方使用，<strong>否则由此产生的法律责任，由注册用户与实际使用人承担连带责任。</strong></p>
<p>
	5、<strong>若本站有理由相信用户正在利用本站从事违法活动，或依据司法行政机关的法律文书或命令，本站有权随时使用用户账户，进行相应的证据保全。</strong></p>
<p>
	&nbsp;</p>
<p>
	<strong>三、用户依法使用网络的义务</strong></p>
<p>
	&nbsp;</p>
<p>
	1、根据《中华人民共和国电信条例》《互联网信息服务管理办法》</p>
<p>
	《中华人民共和国计算机信息网络国际联网管理暂行规定》《中华人民共和国计算机信息系统安全保护条例》的规定及本站的相应规则，用户不得利用本站制作、发布、传播含有下列内容的信息：</p>
<p>
	a、违反宪法所确定的基本原则；</p>
<p>
	b、危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；</p>
<p>
	c、损害国家荣誉和利益的；</p>
<p>
	d、煽动民族仇恨、民族歧视，破坏民族团结的；</p>
<p>
	e、破坏国家宗教政策，宣扬邪教和封建迷信的；</p>
<p>
	f、散布谣言，扰乱社会秩序，破坏社会稳定的；</p>
<p>
	g、散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；</p>
<p>
	h、侮辱或者诽谤他人，侵害他人合法权益的；</p>
<p>
	i、含有法律、行政法规禁止的其他内容的；</p>
<p>
	2、用户不得从事干扰本站的正常运转、非法侵入本站及国家计算机信息系统安全的行为，不得利用本站账户进行非法牟利经营。</p>
<p>
	<strong>若用户违反本条规定，本站将依据《中华人民共和国侵权责任法》等相关法律、法规的规定，立即独立采取有效措施停止提供服务、注销用户，由此产生的一切后果由用户自行承担。</strong></p>
<p>
	&nbsp;</p>
<p>
	<strong>四、本站服务</strong>（律师提示：该服务内容，可以根据最终确定的网站服务模式继续调整）</p>
<p>
	本站是提供城市生活类信息的大型综合型网站，涉及的信息包括：专业月嫂、中高级育婴师、高级管家、涉外家政、家居保洁、家教、钟点工等多种服务信息。本站除自行发布生活信息外，还提供专门的空间，供用户自行发布生活信息，旨在以此为平台，方便用户及服务提供者更好的沟通和交流。</p>
<p>
	对于用户自行在本站发布的信息，本站不负责实质性审查，若该信息如出现虚假情况，均由发布者自行承担，<strong>本站不承担任何的责任。若出现上述情况，用户应及时通知本站，经本站查实后，本站将依照相关法律、法规的规定采取屏蔽、注销、关闭服务等措施。</strong></p>
<p>
	&nbsp;</p>
<p>
	<strong>五、知识产权条款</strong></p>
<p>
	&nbsp;</p>
<p>
	1、若用户接受了本协议的条款，<strong>即表明该用户同意将在本站上发布的除个人信息之外的其他任何形式的信息内容（包括但不限于用评价、体会等文章）的著作财产权转让给了本站，该权利包括但不限于《中华人民共和国著作权法》中规定的复制权、发行权、信息网络传播权、改编权、汇编权等权利。</strong></p>
<p>
	2、用户在本站发布的个人信息及照片，用户确认并同意，本站或关联公司/合作公司<strong>有权免费、无偿、永久性、全球性的使用或授权给其关联公司/合作公司使用</strong>，<strong>本站可以互联网、移动多媒体、手机终端等方式展示推广个人信息，以期全方位、及时地为用户提供合适的服务。</strong></p>
<p>
	3、除法律另有强制性规定外，未经本站书面许可，任何单位或个人不得以任何方式非法地全部或部分复制、转载、链接或其他方式使用本站信息，否则，本站将依法追究其法律责任。</p>
<p>
	&nbsp;</p>
<p>
	<strong>六、责任限制条款</strong></p>
<p>
	&nbsp;</p>
<p>
	1、用户使用本站信息发布系统发布信息而遭致的侵权、诉讼、索赔等法律后果的，<strong>均由用户自行承担，本站概不负责，也不承担任何的法律责任。</strong></p>
<p>
	<strong>2</strong><strong>、对于在本站上发布的带有强烈主观色彩的评价、个人诚信状况、履约情况等内容，本站无法控制也无法审查，由此产生的一切问题本站概不负责，也不承担任何的法律责任。用户在决定雇佣之前应当全面的、详尽的、谨慎的了解服务提供者的个人情况，一旦确定雇佣，即视为认可了服务提供者的个人情况。</strong></p>
<p>
	3、对于用户自行发布的信息，用户应当保证该信息的真实、合法性，本站作为信息展示平台，无法控制该信息，若出现虚假信息而产生的一切法律责任均由发布者自行承担，与本站无关，给本站造成损失的，本站将依法追究其相应的法律责任。</p>
<p>
	4、用户同意使用本站服务的风险由用户个人承担。<strong>本站明确表示不承担任何类型的担保，无论是明示的还是暗示的。</strong></p>
<p>
	5、<strong>无论在何种情况下，对因信息网络设备维护、信息传输故障、硬件通讯设备故障，及电力故障、罢工、自然灾害等不可预见、不可避免、不可克服的因素所造成的不能提供服务或迟延提供服务，本站不承担任何责任。</strong></p>
<p>
	&nbsp;</p>
<p>
	<strong>七、信息披露</strong></p>
<p>
	&nbsp;</p>
<p>
	1、本站保证不对外公开或向第三方提供用户的注册资料及用户在使用本网站服务时存储在本网站的非公开内容，<strong>但下列情况除外：</strong></p>
<p>
	a、事先获得用户的明确授权的；</p>
<p>
	b、根据有关的法律法规要求，本站必须提供的；</p>
<p>
	c、按照相关政府主管部门或司法部门的要求，本站必须提供的；</p>
<p>
	d、用户先行违反本协议内容，本站或第三方或者社会公共利益可能遭受损害的，本站有权向相关当事人提供用户的相关信息；</p>
<p>
	2、<strong>用户确认并同意：本站可能会与第三方合作向用户提供相关的网络服务，在此情况下，如该第三方同意承担与本站同等的保护用户隐私的责任，则本站有权将用户的注册资料、个人发布信息提供给该第三方。</strong></p>
<p>
	&nbsp;</p>
<p>
	<strong>八、协议终止</strong></p>
<p>
	&nbsp;</p>
<p>
	<strong>1</strong><strong>、为经营的需要，在任何时间，本站都可以暂停或终止向用户提供全部或部分服务。对此，用户确认并予以理解，并承诺不因此追究本站的任何责任。</strong></p>
<p>
	2、出现下列情况时，<strong>本站有权决定终止提供服务，并终止本协议</strong>。</p>
<p>
	a、用户提供的信息不真实、不合法或不及时更新；</p>
<p>
	b、连续<strong>三个月</strong>没有登录本站的；</p>
<p>
	c、利用本站从事违法、犯罪活动的；</p>
<p>
	d、被本站注销用户、终止服务的；</p>
<p>
	e、本站修改或更新用户协议，用户不同意或不接受的；</p>
<p>
	f、本协议另有规定或本站认为需要终止的其他情形；</p>
<p>
	3、本协议终止后，用户同意本站仍然享有下述权利：</p>
<p>
	a、继续在本站上保留用户信息及服务期间的使用情况</p>
<p>
	b、在服务期间存在违法或违反本协议的行为，本站可依据本协议主张权利。</p>
<p>
	C、法律、行政法规规定及合同约定的其他情况</p>
<p>
	&nbsp;</p>
<p>
	<strong>九、通知与维权</strong></p>
<p>
	&nbsp;</p>
<p>
	1、用户在使用本站服务时，若发现本站内容有不符合法律、法规的规定或侵犯他人合法权益（包括但不限于肖像权、姓名权、名誉权、知识产权）的情形，或用户认为相关信息侵犯了自身的合法权益，用户应当如实向本站告知并提交下列材料：</p>
<p>
	a、涉嫌侵权的网站、域名及信息的具体内容；</p>
<p>
	b、自身享有合法权益的证明；</p>
<p>
	c、自身联系人姓名、地址、电话号码或电子邮件；</p>
<p>
	d、身份证复印件或营业执照复印件；</p>
<p>
	2、请通过电子邮件的方式按上述要求将材料发送给本站（Email：twfjiazheng@163.com&nbsp; ），本站在收到该材料后，经审查属实，本站将尽快删除相关信息，本站仅接受电子邮件方式的侵权通知。</p>
<p>
	&nbsp;</p>
<p>
	<strong>十、法律适用与管辖</strong></p>
<p>
	本协议之效力、解释、执行与争议解决均适用中华人民共和国大陆地区法律法规，如无相关法律法规规定的，则应参照通用国际商业惯例（或）行业惯例。用户与本站同意，若因履行本协议而产生的争议，双方本着友好协商解决，协商不成的，双方同意提交至本站运营公司注册地有管辖权的人民法院诉讼解决。</p>
<p>
	<strong>本站再次重申</strong>，在您注册成为本站用户之前，请您仔细、详尽的阅读本协议，<strong>对协议中加粗标黑的条款，因关系您自身的责任与义务，请着重阅读。一经注册，您应严格遵守该协议的所有条款，本站有权根据经营的需要随时修改本协议，对于修改后的协议，您可随时查阅。若您对修订后的协议有异议，请及时联系本站或停止使用本站服务。</strong>若您为未成年人，请在监护人的陪同下使用本站。本站承诺，本站将全心全意为您服务，及时、快捷的为您提供各类生活资讯。</p>

                        </div>
                  </div>
            </div>
</div>
<!--关于我们主体 结束-->
</div>
</div>
<!--主体 结束-->
<?php include( "inc/footer.php");?>