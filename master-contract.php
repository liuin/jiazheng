<?php include( "inc/header.php"); $title="雇主中心-我的合同" ; ?>
<!--主体 开始-->
<div class="big_content">
<div class="content03">
            <div class="member">
            <div class="memcate">
                <h2><strong>雇主会员</strong></h2><div class="memcate_main"><div class="info"><h3>交易管理</h3><ul><li ><a href="#">首页</a></li><li class="on"><a href="#">我的合同</a></li><li><a href="#">我的预约</a></li><li><a href="#">我的订单</a></li><li><a href="#">我的收藏</a></li><li><a href="#">我的积分</a></li></ul></div><div class="info"><h3>账户管理</h3><ul><li><a href="#">个人资料</a></li><li><a href="#">账户安全</a></li></ul></div><div class="info"><h3>我的点评</h3><ul><li><a href="#">我的评论</a></li></ul></div></div><div class="memcate_bo"></div>
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
                                            <td colspan="8" style="text-align: center; height: 30px; margin: 0 auto; color:#FF8E01; font-size:16px; font-weight:bold;">
                                                输入雇主身份证号查看合同，即可对雇佣过的服务员发表评论
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="8" style="text-align: center; height: 30px; margin: 0 auto;">
                                                搜索：<input id="member_IDCard" name="member_IDCard" type="text" onfocus="if(this.value=='输入雇主身份证号进行搜索'){this.value='';}" value="输入雇主身份证号进行搜索" size="50">
                                                <input type="submit" value="查询">
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    </form>
                                    <div style="height: 20px;">
                                    </div>
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
                                                服务种类
                                            </td>
                                            <td width="10%" height="30" style="color: Blue;">
                                                部门
                                            </td>
                                        </tr>
                                        
                                    </tbody></table>
                                    <div style="height: 20px;">
                                    </div>
                                    <table border="0" cellpadding="0" cellspacing="0" class="table2">
                                        <tbody><tr>
                                            <td colspan="7" height="30" style="text-align: left; padding-left: 10px; font-weight: bold;
                                                color: Blue;">
                                                合同信息
                                            </td>
                                            <td colspan="6" height="30" style="text-align: left; padding-left: 10px; font-weight: bold;
                                                color: Blue;">
                                                产品信息
                                            </td>
                                        </tr>
                                        <tr style="background: none repeat scroll 0 0 #F6F7F8;">
                                            <td width="74" height="30" style="color: Blue;">
                                                合同编号
                                            </td>
                                            <td width="74" height="30" style="color: Blue;">
                                                合同金额
                                            </td>
                                            <td width="74" height="30" style="color: Blue;">
                                                开始日期
                                            </td>
                                            <td width="74" height="30" style="color: Blue;">
                                                终止日期
                                            </td>
                                            <td width="74" height="30" style="color: Blue;">
                                                合同分类
                                            </td>
                                            <td width="74" height="30" style="color: Blue;">
                                                合同状态
                                            </td>
                                            <td width="74" height="30" style="color: Blue;">
                                                代收工资押金
                                            </td>
                                            <td width="74" height="30" style="color: Blue;">
                                                服务员名称
                                            </td>
                                            <td width="74" height="30" style="color: Blue;">
                                                服务项目
                                            </td>
                                            <td width="74" height="30" style="color: Blue;">
                                                签约工资
                                            </td>
                                            <td width="74" height="30" style="color: Blue;">
                                                上户日期
                                            </td>
                                            <td width="74" height="30" style="color: Blue;">
                                                截止日期
                                            </td>
                                            <td width="74" height="30" style="color: Blue;">
                                                操作
                                            </td>
                                        </tr>
                                        
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