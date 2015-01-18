<?php include( "inc/header.php"); $title="雇主中心-我的订单" ; ?>
<!--主体 开始-->
<div class="big_content">
<div class="content03">
            <div class="member">
            <div class="memcate">
                <h2><strong>雇主会员</strong></h2><div class="memcate_main"><div class="info"><h3>交易管理</h3><ul><li><a href="#">首页</a></li><li><a href="#">我的合同</a></li><li><a href="#">我的预约</a></li><li class="on"><a href="#">我的订单</a></li><li><a href="#">我的收藏</a></li><li><a href="#">我的积分</a></li></ul></div><div class="info"><h3>账户管理</h3><ul><li><a href="#">个人资料</a></li><li><a href="#">账户安全</a></li></ul></div><div class="info"><h3>我的点评</h3><ul><li><a href="#">我的评论</a></li></ul></div></div><div class="memcate_bo"></div>
            </div>
            <div class="memcontent">
                    <h2 class="title09">
                        <strong>我的订单</strong></h2>
                    <div class="main" style="position: relative;">

                        <div class="memorder" style="width:738px; padding:20px;margin-left:120px;">
                              <h3>
                                   <ul class="zkw_lst31">	<li class="on" id="n01"><a href="#">全部订单（<span>0</span>）</a></li>	<li id="n02"><a href="#">未确认的订单（<span>0</span>）</a></li>	<li id="n03"><a href="#">处理中的订单（<span>0</span>）</a></li>	<li id="n04"><a href="#">交易成功的订单（<span>0</span>）</a></li>	<li id="n05"><a href="#">交易失败的订单（<span>0</span>）</a></li></ul><div class="clear"></div>
                                   <div class="clear"></div>
                              </h3>
                            <div class="memorder_fox" id="nn01">
                                <div class="memorder_date"><form action="/member/order_all.aspx" method="post">起始日期：<input name="date_start" id="date_start" type="text" value="" class="input_calendar">&nbsp;&nbsp;终止日期：<input name="date_end" id="date_end" type="text" value="" class="input_calendar">&nbsp;&nbsp;订单号：<input name="orders_sn" id="orders_sn" type="text" value="" class="input09" style="width:190px;"><input name="" type="submit" value="查询" class="input10"></form><script type="text/javascript">$(function(){$("#date_start").datepicker({numberOfMonths:1}); $("#date_end").datepicker({numberOfMonths:1});})</script></div><div class="memorder_info"><ul><li style="width:114px;">订单编号</li><li style="width:108px;">订单商品</li><li style="width:62px;">收货人</li><li style="width:116px;">订单金额</li><li style="width:133px;">下单时间</li><li style="width:89px;">订单状态</li><li style="width:99px;">操作</li></ul><div class="clear"></div></div><div class="memorder_table"><table width="738" border="0" cellspacing="1" cellpadding="0"><tbody><tr><td cosplan="7">暂无订单信息！</td></tr></tbody></table></div><table width="100%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td height="10"></td></tr><tr><td align="right"><table border="0" cellspacing="1" cellpadding="0" height="26"><tbody><tr align="center" valign="middle"><td class="page_off">« 上一页</td><td class="page_off">下一页 »</td></tr></tbody></table></td><td width="5"></td></tr></tbody></table>
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