<?php include( "inc/header.php"); $title="雇主中心-我的积分" ; ?>
<!--主体 开始-->
<script type="text/javascript">
<!--
 /*选项卡切换*/
  function Set_Tab(tab_name, tab_no, tab_all, onclass, outclass) {
      var i;
      for (i = 1; i <= tab_all; i++) {
          if (i == tab_no) {
              $("#" + tab_name + "_" + i).attr("class", onclass);
              $("#" + tab_name + "_" + i + "_content").show();
          }
          else {
              $("#" + tab_name + "_" + i).attr("class", outclass);
              $("#" + tab_name + "_" + i + "_content").hide();
          }
      }
  }
//-->
</script>
<div class="big_content">
<div class="content03">
            <div class="member">
            <div class="memcate">
                <h2><strong>雇主会员</strong></h2><div class="memcate_main"><div class="info"><h3>交易管理</h3><ul><li><a href="#">首页</a></li><li><a href="#">我的合同</a></li><li><a href="#">我的预约</a></li><li><a href="#">我的订单</a></li><li ><a href="#">我的收藏</a></li><li class="on"><a href="#">我的积分</a></li></ul></div><div class="info"><h3>账户管理</h3><ul><li><a href="#">个人资料</a></li><li><a href="#">账户安全</a></li></ul></div><div class="info"><h3>我的点评</h3><ul><li><a href="#">我的评论</a></li></ul></div></div><div class="memcate_bo"></div>
            </div>
<div class="memcontent">
                    <h2 class="title09">
                        <strong>积分明细</strong></h2>
                    <div class="main" style="position: relative;">
                        <div class="memorder" style="width:738px; padding:20px;margin-left:120px;">
                            <p style="margin-bottom: 10px;">
                                积分余额：<b style="color: #c00; font-family: Verdana;">0</b></p>
                            <h3>
                                <ul class="zkw_lst31">	<li class="on" id="n01"><a href="#">今日明细</a></li>	<li id="n02"><a href="#">历史明细</a></li></ul><div class="clear"></div>
                            </h3>
                            
                            <div class="memorder_fox" id="nn01">
                                <table width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #dadada;" class="pingjia"><tbody><tr style="background:url(images/ping.jpg); height:30px;">  <td width="150" align="center" valign="middle">时间</td>  <td width="88" align="center" valign="middle">收入</td>  <td width="88" align="center" valign="middle">支出</td>  <td width="110" align="center" valign="middle">积分余额</td>  <td align="center" valign="middle">备注</td></tr><tr bgcolor="#FFFFFF"><td colspan="5" align="center" height="35">暂无记录</td></tr></tbody></table>
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