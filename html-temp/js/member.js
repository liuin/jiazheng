function check_member_nickname(object) 
{
    $.ajaxSetup({async: false});
    $("#" + object + "_tip").load("/member/register_do.aspx?action=checknickname&val=" + $("#" + object).val()+"&timer=" + Math.random());
    if($("#" + object + "_tip").html().indexOf("cc0000")>0)
    {
        return false;
    }
    else
    {
        return true;
    }
}

function check_member_email(object) //1
{
    $.ajaxSetup({async: false});
    $("#" + object + "_tip").load("/member/register_do.aspx?action=checkemail&val=" + $("#" + object).val()+"&timer=" + Math.random());
    if($("#" + object + "_tip").html().indexOf("cc0000")>0)
    {
        return false;
    }
    else
    {
        return true;
    }
}
function check_member_pwd(object)//1
{
    $.ajaxSetup({async: false});
    $("#member_password_tip").load("/member/register_do.aspx?action=checkpwd&val=" + $("#" + object).val()+"&timer=" + Math.random());
    if($("#member_password_tip").html().indexOf("cc0000")>0)
    {
        return false;
    }
    else
    {
        return true;
    }
}
function check_member_repwd(object)//1
{
$.ajaxSetup({async: false});
    $("#member_password_confirm_tip").load("/member/register_do.aspx?action=checkrepwd&val1="+$("#member_password").val()+"&val=" + $("#" + object).val()+"&timer=" + Math.random());
    if($("#member_password_confirm_tip").html().indexOf("cc0000")>0)
    {
        return false;
    }
    else
    {
        return true;
    }
}
function check_member_mobile(object)
{
    $("#" + object + "_tip").load("/member/register_do.aspx?action=checkmobile&val=" + $("#" + object).val()+"&timer=" + Math.random());
    if($("#" + object + "_tip").html().indexOf("cc0000")>0)
    {
        return false;
    }
    else
    {
        return true;
    }
}

function check_member_stores(object) {
    $("#" + object + "_tip").load("/member/register_do.aspx?action=checkstores&val=" + $("#" + object).val() + "&timer=" + Math.random());
    if ($("#" + object + "_tip").html().indexOf("cc0000") > 0) {
        return false;
    }
    else {
        return true;
    }
}

//function check_member_phone(object) //2
//{
//    $.ajaxSetup({async: false});
//    $("#" + object + "_tip").load("/member/register_do.aspx?action=checkphone&val=" + $("#" + object).val()+"&timer=" + Math.random());
//    if($("#" + object + "_tip").html().indexOf("cc0000")>0)
//    {
//        $("#" + object+"_div").attr('class','login_txt_focus');
//        return false;
//    }
//    else
//    {
//        $("#"+object+"_div").attr('class','login_txt1');
//        return true;
//    }
//}

//注册发送手机验证码
function register_sms_checkcode() {
    $.ajaxSetup({ async: false });
    if (check_member_mobile('member_loginmobile')) {
        $.get(encodeURI("register_do.aspx?action=register_smscheckcode&phone=" + $("#member_loginmobile").val() + "&t=" + Math.random()), function (data) {

            var btn = $('#btn_sms_checkcode');
            $("#btn_sms_checkcode").attr('style', 'display:none;');
            var t = 120;
            var tt = setInterval(function () {
                $("#verifycode_tip").html('校验码已发出，请注意查收短信。如果在<span id="sms_timer">' + t + '</span>秒内没有收到验证码，请重新获取');
                t--;
                if (t < 0) {
                    clearInterval(tt);
                    $("#btn_sms_checkcode").attr('style', '');
                    $("#verifycode_tip").html('如果您在两分钟内没有收到短信，可重新获取。多次获取验证码，以最后一次为准。');
                }
            }, 1000);
            return true;
        });
    }
}


// 快速发布需求手机验证码
function fastads_sms_checkcode() {
    $.ajaxSetup({ async: false });
    if (check_member_mobile('Ads_EmployerMobile')) {
        $.get(encodeURI("register_do.aspx?action=fastads_smscheckcode&phone=" + $("#Ads_EmployerMobile").val() + "&t=" + Math.random()), function (data) {

            var btn = $('#btn_sms_checkcode');
            $("#btn_sms_checkcode").attr('style', 'display:none;');
            var t = 120;
            var tt = setInterval(function () {
                $("#verifycode_tip").html('校验码已发出，请注意查收短信。如果在<span id="sms_timer">' + t + '</span>秒内没有收到验证码，请重新获取');
                t--;
                if (t < 0) {
                    clearInterval(tt);
                    $("#btn_sms_checkcode").attr('style', '');
                    $("#verifycode_tip").html('如果您在两分钟内没有收到短信，可重新获取。多次获取验证码，以最后一次为准。');
                }
            }, 1000);
            return true;
        });
    }
}



function register_sms_checkcodebak() {
    var btn = $('#btn_sms_checkcode');
    if (btn.is('.diabled')) return false;  //失效
    btn.addClass('diabled');
    var t = 60;
    var tt = setInterval(function () {
        btn.text('获取短信校验码(' + t + '秒后重发)');
        t--;
        if (t < 0) {
            clearInterval(tt);
            btn.removeClass('diabled');
            btn.text('获取短信校验码');
        }
    }, 1000);
    return true;
}



function check_member_verifycode(object)  //1
{
    $.ajaxSetup({async: false});
    $("#" + object + "_tip").load("/member/register_do.aspx?action=checkverify&val=" + $("#" + object).val()+"&timer=" + Math.random());
    if($("#" + object + "_tip").html().indexOf("cc0000")>0)
    {
//        $("#" + object).attr('class','login_txt_focus');
        return false;
    }
    else
    {
//        $("#"+object).attr('class','login_txt');
        return true;
    }
}

function check_menber_mobilecode(object) {
    $.ajaxSetup({ async: false });
    $("#" + object + "_tip").load("/member/register_do.aspx?action=checkmobilecode&val=" + $("#" + object).val() + "&timer=" + Math.random());
    if ($("#" + object + "_tip").html().indexOf("cc0000") > 0) {
        return false;
    }
    else {
        return true;
    }
}

function check_member_checkprotocal(object)
{
    if(MM_findObj(object).checked)
    {
        $("#" + object + "_tip").load("/member/register_do.aspx?action=checkprotocal&val=1&timer=" + Math.random());
    }
    else
    {
        $("#" + object + "_tip").load("/member/register_do.aspx?action=checkprotocal&val=0&timer=" + Math.random());
    }
    if($("#" + object + "_tip").html().indexOf("cc0000")>0)
    {
        return false;
    }
    else
    {
        return true;
    }
}

function check_member_IsBlank(object,success,error) //2
{
    $.ajaxSetup({async: false});
    $("#" + object + "_tip").load("/member/register_do.aspx?action=checkisblank&success="+success+"&error="+error+"&val=" + $("#" + object).val()+"&timer=" + Math.random());
    if($("#" + object + "_tip").html().indexOf("cc0000")>0)
    {
        $("#" + object+"_div").attr('class','login_txt_focus');
        return false;
    }
    else
    {
        $("#"+object+"_div").attr('class','login_txt');
        return true;
    }
}

//验证select
function check_select(object)
{
    var s= $("#"+object).value;
    alert(s);
}

function check_regform()
{
    $.ajaxSetup({async: false});
    var check_1=check_member_nickname('member_nickname');
    var check_2 = check_member_mobile('member_loginmobile');
    var check_3=check_member_pwd('member_password');
    var check_4=check_member_repwd('member_password_confirm');
    var check_5 = check_member_stores('member_stores');
    if (check_1 && check_2 && check_3 && check_4 && check_5)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function check_regform_company()
{
    $.ajaxSetup({async: false});
    var check_1=check_member_nickname('member_nickname');
    var check_2=check_member_email('member_email');
    var check_3=check_member_pwd('member_password');
    var check_4=check_member_repwd('member_password_confirm');
    var check_5=check_member_verifycode('verifycode');
    var check_6=check_member_phone('Member_Phone_Number');
    var check_7=check_member_IsBlank('Member_Name','','');
    var check_8=check_member_email('member_email');
    var check_9=check_member_IsBlank('U_Member_CompanyName','','');
    if(check_1&&check_2&&check_3&&check_4&&check_5&&check_6&&check_7&&check_8&&check_9)
    {
        return true;
    }
    else
    {
        return false;
    }
}

//登录
function MemberLogin()
{
    var member_name=$('#textfield2').val();
    var member_password=$('#member_password11').val();
    var chk_UserName=$('#chk_UserName').val();
    var Trade_Verify=$('#Trade_Verify').val();
    $.ajax({
		type: "get", 
		global: false, 
		async: false,
		dataType: "html",
		url: encodeURI("/member/login_do.aspx?action=login&member_name="+member_name+"&member_password="+member_password+"&chk_UserName="+chk_UserName+"&Trade_Verify="+Trade_Verify+"&timer="+Math.random()),		
		success:function(data){
		
		    if(data.indexOf("成功")!=-1)
		    {
		        data =data.toString().replace("成功","");
                window.location.replace(data);
		    }
		    else
		    {
		        $('#td_msg').html("<table border='0' cellspacing='2' cellpadding='0'><tr><td class='tip_bg_error'><img src='/images/tip-error.gif' hspace='5' align='absmiddle'>"+data+"&nbsp;&nbsp;</td></tr></table>");
		        $('#tr_logintype').show();
			}		
		},
		error: function (){
			alert("Error Script");
		}
    });    
}
//删除订单
function DeleteOrder(orderid)
{
    $.ajax({
		type: "get", 
		global: false, 
		async: false,
		dataType: "html",
		url: encodeURI("/member/order_do.aspx?action=delorder&OrderID="+orderid+"&timer="+Math.random()),		
		success:function(data){		
		    alert(data);
		    history.go(0);
		},
		error: function (){
			alert("Error Script");
		}
    });
}

/***********************************************新增***********************************************/
var leaveSeconds;
var timeswitch;
//发送短信验证码
function SendMobileVerifyCode() {
    $.ajax({
        type: "post",
        url: "/Member/member_do.aspx",
        data: "action=sendSMS&Member_NickName=" + $("#member_name").val() + "&Mobile_Num=" + $("#Member_LoginMobile").val() + "&timer=" + Math.random(),
        success: function (msg) {
            if (msg == 0) {
                $("#MobileVerifyCode").html("");
                leaveSeconds = 60;
                runDown();
            }

            if (msg == 6002) {
                alert("信息内容超长");
            }
            if (msg == 6003) {
                alert("提交参数不可为空或参数类型错误");
            }
            if (msg == 6004) {
                alert("提交速度限制");
            }
            if (msg == 6005) {
                alert("提交池限制");
            }
            if (msg == 6006) {
                alert("接收号码异常");
            }
            if (msg == 201054) {
                alert("产品编号错误")
            }
            if (msg == 201056) {
                alert("短信内容超长");
            }
            if (msg == -1) {
                alert("接口提交异常");
            }
            if (msg == "NoPhone") {
                alert("请填写正确的手机号");
            }
            if (msg == "Exist") {
                alert("您输入的手机号码已存在，请核对后重新输入");
            }
        }
    })
}

function getmobile_verify_time() {
    $("#mobile_verifycode_info_tip").html("短信已发送，" + leaveSeconds + "秒后可重新获取");
    leaveSeconds = leaveSeconds - 1;
    if (leaveSeconds == -1) {
        clearInterval(timeswitch);
        $("#MobileVerifyCode").html("重新获取");
        $("#mobile_verifycode_info_tip").html("<span style=\"color:#03F;\">一分钟只能获取一次短信验证码</span>");
    }
}

function runDown() {
    timeswitch = setInterval(getmobile_verify_time, 1000);
}


//加载经理人
function change_managers(Stores_ID) {
    $.ajax({
        type: "post",
        url: "/member/ads_do.aspx",
        data: "action=change_managers&Stores_ID=" + Stores_ID,
        success: function (msg) {
            if (msg != "") {
                $("#span_managers").html(msg);
            }
        }
    })
}


