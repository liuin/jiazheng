<?php include( "inc/header.php"); $title="雇主中心-我的收藏" ; ?>
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
                <h2><strong>雇主会员</strong></h2><div class="memcate_main"><div class="info"><h3>交易管理</h3><ul><li><a href="#">首页</a></li><li><a href="#">我的合同</a></li><li><a href="#">我的预约</a></li><li><a href="#">我的订单</a></li><li class="on"><a href="#">我的收藏</a></li><li><a href="#">我的积分</a></li></ul></div><div class="info"><h3>账户管理</h3><ul><li><a href="#">个人资料</a></li><li><a href="#">账户安全</a></li></ul></div><div class="info"><h3>我的点评</h3><ul><li><a href="#">我的评论</a></li></ul></div></div><div class="memcate_bo"></div>
            </div>
            <div class="memcontent">
                    <h2 class="title09">
                        <strong>我的收藏</strong></h2>
                           <div class="yz_title21">
                                <ul class="yz_lst31">	<li class="on" id="apply_1" onclick="Set_Tab('apply',1,3,'on','');">服务人员</li>	<li id="apply_2" onclick="Set_Tab('apply',2,3,'on','');" class="">经理人</li>	<li id="apply_3" onclick="Set_Tab('apply',3,3,'on','');" class="">门店</li></ul><div class="clear"></div>
                            </div>
                    <div class="main">
                    <div class="memorder">
                        <div style=" padding:15px 20px 0px;">
            
            <table width="100%" border="0" cellspacing="0" cellpadding="5">
            <tbody><tr>
            
            
              <td id="apply_1_content" style="display: table-cell;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">  <tbody><tr>    <td width="20%" align="center"><table width="120" border="0" cellspacing="0" cellpadding="0">      <tbody><tr>        <td height="120" align="center" valign="middle" class="img_border"><a href="#" target="_blank"><img src="http://img.taiweifeng.com//product/2014/12/19/s_201412191207024.jpg" border="0" width="120" alt="王进云"></a></td>      </tr>      <tr>        <td height="30" align="center"> <span class="m_price">4000-8000元</span>        </td>      </tr>      <tr>        <td height="30" align="center">王进云        </td>      </tr>      <tr>        <td height="30" valign="middle" align="center"><a href="#"><img style="display:inline;" src="images/fenlei-dingpin.jpg" align="absmiddle" border="0" alt="订聘"></a> <a href="#" onclick="if(confirm('确定将选择服务员从收藏夹中删除吗？')==false){return false;}"><img style="display:inline;" src="images/fenlei_yichu.jpg" align="absmiddle" border="0" alt="从收藏中移除该服务员"></a>        </td>      </tr>    </tbody></table></td>    <td width="20%" align="center"><table width="120" border="0" cellspacing="0" cellpadding="0">      <tbody><tr>        <td height="120" align="center" valign="middle" class="img_border"><a href="#" target="_blank"><img src="http://img.taiweifeng.com//product/2014/12/25/s_201412251001220.jpg" border="0" width="120" alt="袁伟"></a></td>      </tr>      <tr>        <td height="30" align="center"> <span class="m_price">5500-6500元</span>        </td>      </tr>      <tr>        <td height="30" align="center">袁伟        </td>      </tr>      <tr>        <td height="30" valign="middle" align="center"><a href="#"><img style="display:inline;" src="images/fenlei-dingpin.jpg" align="absmiddle" border="0" alt="订聘"></a> <a href="#" onclick="if(confirm('确定将选择服务员从收藏夹中删除吗？')==false){return false;}"><img style="display:inline;" src="images/fenlei_yichu.jpg" align="absmiddle" border="0" alt="从收藏中移除该服务员"></a>        </td>      </tr>    </tbody></table></td><td width="20%" align="center"></td><td width="20%" align="center"></td><td width="20%" align="center"></td>  </tr></tbody></table>
              </td>
              
              <td id="apply_2_content" style="display: none;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">  <tbody><tr>    <td width="20%" align="center"><table width="120" border="0" cellspacing="0" cellpadding="0">      <tbody><tr>        <td height="120" align="center" valign="middle" class="img_border"><a href="#" target="_blank"><img src="http://img.taiweifeng.com//Managers/2015/01/07/s_201501070835360.jpg" border="0" width="120" alt="王金玲"></a></td>      </tr>      <tr>        <td height="30" align="center">        </td>      </tr>      <tr>        <td height="30" align="center">王金玲        </td>      </tr>      <tr>        <td height="30" valign="middle" align="center"><a href="#"><img style="display:inline;" src="images/fenlei-chakan.jpg" align="absmiddle" border="0" alt="查看"></a> <a href="#" onclick="if(confirm('确定将选择的经理人从收藏夹中删除吗？')==false){return false;}"><img style="display:inline;" src="images/fenlei_yichu.jpg" align="absmiddle" border="0" alt="从收藏中移除该经理人"></a>        </td>      </tr>    </tbody></table></td><td width="20%" align="center"></td><td width="20%" align="center"></td><td width="20%" align="center"></td><td width="20%" align="center"></td>  </tr></tbody></table>
              </td>
               <td id="apply_3_content" style="display: none;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">  <tbody><tr>    <td width="20%" align="center"><table width="120" border="0" cellspacing="0" cellpadding="0">      <tbody><tr>        <td height="120" align="center" valign="middle" class="img_border"><a href="#" target="_blank"><img src="http://img.taiweifeng.com//Stores/2014/09/03/201409031513033.jpg" border="0" width="120" alt="世纪城金源店"></a></td>      </tr>      <tr>        <td height="30" align="center">        </td>      </tr>      <tr>        <td height="30" align="center">世纪城金源店        </td>      </tr>      <tr>        <td height="30" valign="middle" align="center"><a href="#"><img style="display:inline;" src="images/fenlei-chakan.jpg" align="absmiddle" border="0" alt="查看"></a> <a href="#" onclick="if(confirm('确定将选择的门店从收藏夹中删除吗？')==false){return false;}"><img style="display:inline;" src="images/fenlei_yichu.jpg" align="absmiddle" border="0" alt="从收藏中移除该门店"></a>        </td>      </tr>    </tbody></table></td><td width="20%" align="center"></td><td width="20%" align="center"></td><td width="20%" align="center"></td><td width="20%" align="center"></td>  </tr></tbody></table>
              </td>
            </tr>
          </tbody></table>
            
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