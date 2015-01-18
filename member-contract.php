<?php include( "inc/header.php"); $title="服务员中心-合同" ; ?>
<!--主体 开始-->
<div class="big_content">
<div class="content03">
            <div class="member">
            <div class="memcate">
                <h2><strong>服务员会员</strong></h2><div class="memcate_main"><div class="info"><h3>交易管理</h3><ul><li ><a href="#">首页</a></li><li class="on"><a href="#" >我的合同</a></li></ul></div><div class="info"><h3>账户管理</h3><ul><li><a href="#">个人资料</a></li><li><a href="#">账户安全</a></li></ul></div><div class="info"><h3>客户服务</h3><ul><li><a href="#">发布简历</a></li></ul></div></div><div class="memcate_bo"></div>
            </div>
            <div class="memcontent">
                <h2 class="title09">
                    <strong>我的合同</strong></h2>
                <div class="main">
                    <div class="memorder">
                        <div style="padding: 15px 20px 0px;" class="tableStyle2">
                            <div class="contrast_middle1">
                                
                                <form action="/member/member_contract.aspx" method="post">
                                <table width="900" border="0" cellpadding="0" cellspacing="0" class="table1">
                                    <tbody><tr>
                                        <td colspan="8" style="text-align: center; height: 30px; margin: 0 auto;">
                                            搜索：<input id="Text1" name="member_IDCard" type="text" onfocus="if(this.value=='输入身份证号进行搜索'){this.value='';}" value="输入身份证号进行搜索" size="50">
                                            <input type="submit" value="查询">
                                        </td>
                                    </tr>
                                </tbody></table>
                                </form>
                                <table width="900" border="0" cellpadding="0" cellspacing="0" class="table1">
                                    <tbody><tr>
                                        <td colspan="8" style="text-align: left; padding-left: 10px; font-weight: bold; color: Blue;">
                                            基本情况
                                        </td>
                                    </tr>
                                    <tr style="background: none repeat scroll 0 0 #F6F7F8;">
                                        <td width="10%" height="30" style="color: Blue;">
                                            客户姓名
                                        </td>
                                        <td width="10%" height="30" style="color: Blue;">
                                            客户分类
                                        </td>
                                        <td width="20%" height="30" style="color: Blue;">
                                            客户地址
                                        </td>
                                        <td width="10%" height="30" style="color: Blue;">
                                            手机
                                        </td>
                                        <td width="10%" height="30" style="color: Blue;">
                                            身份证号码
                                        </td>
                                        <td width="10%" height="30" style="color: Blue;">
                                            服务性质
                                        </td>
                                        <td width="10%" height="30" style="color: Blue;">
                                            部门
                                        </td>
                                    </tr>
                                    
                                </tbody></table>
                                <div style="height: 20px;">
                                </div>
                                <table width="980" border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr>
                                        <td>
                                            <table width="700" border="0" cellpadding="0" cellspacing="0" class="table3">
                                                <tbody><tr>
                                                    <td colspan="7" style="text-align: left; padding-left: 10px; font-weight: bold; color: Blue;">
                                                        合同信息
                                                    </td>
                                                </tr>
                                                <tr style="background: none repeat scroll 0 0 #F6F7F8;">
                                                    <td width="100" height="30" style="color: Blue;">
                                                        合同编号
                                                    </td>
                                                    <td width="100" height="30" style="color: Blue;">
                                                        合同主题
                                                    </td>
                                                    <td width="100" height="30" style="color: Blue;">
                                                        合同金额
                                                    </td>
                                                    <td width="100" height="30" style="color: Blue;">
                                                        开始日期
                                                    </td>
                                                    <td width="100" height="30" style="color: Blue;">
                                                        终止日期
                                                    </td>
                                                    <td width="100" height="30" style="color: Blue;">
                                                        合同分类
                                                    </td>
                                                    <td width="100" height="30" style="color: Blue;">
                                                        合同状态
                                                    </td>
                                                </tr>
                                                
                                            </tbody></table>
                                        </td>
                                        <td width="2">
                                        </td>
                                        
                                    </tr>
                                    <tr height="10"></tr>
                                    <tr><td>
                                            <table width="280" border="0" cellpadding="0" cellspacing="0" class="table3">
                                                <tbody><tr>
                                                    <td colspan="3" style="text-align: left; padding-left: 10px; font-weight: bold; color: Blue;">
                                                        销售明细
                                                    </td>
                                                </tr>
                                                <tr style="background: none repeat scroll 0 0 #F6F7F8;">
                                                    <td width="70" height="30" style="color: Blue;">
                                                        关联客户
                                                    </td>
                                                    <td width="70" height="30" style="color: Blue;">
                                                        开始日期
                                                    </td>
                                                    <td width="70" height="30" style="color: Blue;">
                                                        截止日期
                                                    </td>
                                                </tr>
                                                
                                            </tbody></table>
                                        </td></tr>
                                </tbody></table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
      </div>
      </div><!--关于我们主体 结束-->
</div>
<!--主体 结束-->
<?php include( "inc/footer.php");?>