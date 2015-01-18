<?php include( "inc/header.php"); $title="雇主中心-我的预约" ; ?>
<!--主体 开始-->
<div class="big_content">
<div class="content03">
            <div class="member">
            <div class="memcate">
                <h2><strong>雇主会员</strong></h2><div class="memcate_main"><div class="info"><h3>交易管理</h3><ul><li><a href="#">首页</a></li><li><a href="#">我的合同</a></li><li  class="on"><a href="#">我的预约</a></li><li><a href="#">我的订单</a></li><li><a href="#">我的收藏</a></li><li><a href="#">我的积分</a></li></ul></div><div class="info"><h3>账户管理</h3><ul><li><a href="#">个人资料</a></li><li><a href="#">账户安全</a></li></ul></div><div class="info"><h3>我的点评</h3><ul><li><a href="#">我的评论</a></li></ul></div></div><div class="memcate_bo"></div>
            </div>
            <div class="memcontent">
                    <h2 class="title09">
                        <strong>我的预约</strong></h2>
                    <div class="main" style="position: relative;">

                        <div class="memorder" style="width:738px; padding:20px;margin-left:120px;">
                              
                            <div class="memorder_fox" id="nn01">
                                <div class="memorder_date"><form action="/member/ReservationOrders_List.aspx" method="post">起始日期：<input name="date_start" id="date_start" type="text" value="" class="input_calendar">&nbsp;&nbsp;终止日期：<input name="date_end" id="date_end" type="text" value="" class="input_calendar">&nbsp;&nbsp;订单号：<input name="orders_sn" id="orders_sn" type="text" value="" class="input09" style="width:190px;"><input name="" type="submit" value="查询" class="input10"></form><script type="text/javascript">$(function(){$("#date_start").datepicker({numberOfMonths:1}); $("#date_end").datepicker({numberOfMonths:1});})</script></div><div class="memorder_info"><ul><li style="width:114px;">预约单编号</li><li style="width:400px;">预约服务员</li><li style="width:104px;">预约方式  </li><li style="width:114px;">预约时间</li></ul><div class="clear"></div></div><div class="memorder_table"><table width="738" border="0" cellspacing="1" cellpadding="0"><tbody><tr><td cosplan="4">暂无订单信息！</td></tr></tbody></table></div><table width="100%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td height="10"></td></tr><tr><td align="right"><table border="0" cellspacing="1" cellpadding="0" height="26"><tbody><tr align="center" valign="middle"><td class="page_off">« 上一页</td><td class="page_off">下一页 »</td></tr></tbody></table></td><td width="5"></td></tr></tbody></table>
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