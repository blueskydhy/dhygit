/**
 * 注册页面js
 */
var checkR = {};

$(document).ready(function(){
	
	$("#user_name").blur(function(){
//		var username = $(this).val();
//		if(username.length<3){
//			$("#wrongMsg").html("用户名长度不能少于3位！");
//		}else{
//			$.ajax({
//				'url':"/dbe/htcdoc/admin/ajaxuseropt.php",
//				'data':{'method':'checkusername','username':username}, 
//				'success':function(data){
//					if(data=='yes'){
//						$("#wrongMsg").html("用户名已有人使用！")
////						$("#registerBt").attr("disabled", "disabled");
//					}else{
//						$("#wrongMsg").html("");
////						if($("#registerBt").hasAttr("disabled")){
////							$("#registerBt").removeAttr("disabled");
////						}
//					}
//				}
//			});
//		}
		validateUsername();
	});
	
	$("#user_email").blur(function(){
		validateEmail();
//		var el = $(this);
//		var email = $(this).val();
//		var emailPat=/^(.+)@(.+)$/;
//		if(!emailPat.test(email)){
//			$("#wrongMsg").html("请输入正确的邮箱格式！")
//		}else{
//			$.ajax({
//				'url': "/dbe/htcdoc/admin/ajaxuserop.php",
//				'data': {'method': 'checkemail', 'email': email},
//				'success': function(data){
//					if(data=="yes"){
//						$("#wrongMsg").html("邮箱已有人使用！");
//						$("#registerBt").attr("disabled", "disabled");
//					}else{
//						$("#wrongMsg").html("");
////						if($("#registerBt").hasAttr("disabled")){
////							$("#registerBt").removeAttr("disabled");
////						}
//					}
//				},
//				'error':function(XMLHttpRequest, textStatus, errorThrown){
////					alert(XMLHttpRequest.status);
////                    alert(XMLHttpRequest.readyState);
////                    alert(textStatus);
//					alert("ajax for checkemail fail");
//				}
//			});
//		}
	});
	
	$("#user_passwd").blur(function(){
//		var pass = $(this).val();
//		if(pass.length < 6){
//			$("#wrongMsg").html("密码长度不能少于6位！");
//		}else{
//			$("#wrongMsg").html("");
//		}
		validatePassword();
	});
	
	$("#user_passwd2").blur(function(){
//		var pass1 = $("#user_passwd").val();
//		var pass2 = $("#user_passwd2").val();
//		if(pass1 != pass2){
//			$("#wrongMsg").html("与第一次输入的密码不同！");
//		}else{
//			$("#wrongMsg").html("");
//		}
		validateTwoPassword();
	});
	
	$("#checkicon").blur(function(){
		var code = $(this).val();
		if(code.length == 0){
			return;
		}
		$.ajax({
			'url':'ajaxuseropt.php',
			'data': {'method': 'checkcode', 'code': code},
			'success': function(data){
				if(data == "yes"){
					checkR['code'] = true;
					okJoin();
					$("#codeIc").removeClass("tisioc");
					$("#codeIc").html("验证码正确！");
				}else{
					$("#codeIc").addClass("tisioc");
					$("#codeIc").html("验证码不正确！");
					if(!$("#registerBt").hasClass("login-bg2")){
						$("#registerBt").addClass("login-bg2")
					}
					$("#registerBt").attr("disabled", "disabled");
				}
			}
		})
	});
	
	/**
	 * 表单提交
	 */
	$("#registerBt").click(function(){
		var rs = validateForm();
		if(rs==false){
			return;
		}
		var user_name = $("#user_name").val();
		var user_company = $("#user_company").val();
		var user_email = $("#user_email").val();
		var user_passwd = $("#user_passwd").val();
		var user_industy = $("#user_industy").val();
		var user_phone = $("#user_phone").val();
		var user_fullname = $("#user_fullname").val();
		var user_purchasing = getSelectedRadio();
		$("#wrongMsg").html("正在注册..");
		$.ajax({
			'url': "/dbe/htcdoc/admin/ajaxuserop.php",
			'data': {'method': 'register','user_name':user_name, 
				'user_email': user_email, 'user_passwd': user_passwd,
				'user_company':user_company,'user_industy':user_industy,
				'user_phone':user_phone,'user_fullname':user_fullname,
				'user_purchasing':user_purchasing},
			'success': function(data){
				if(data != -1){
					$("#wrongMsg").html("您已注册成功！")
				}else {
					$("#wrongMsg").html("注册失败，请重试！");
				}
			},
			'error':function(){
				alert("ajax for register fail");
			}
		});
	});
	
});

function okJoin(){
	var r = true;
	var i = 0;
	for(var k in checkR){
		if(k){
			if(!checkR[k]){
				k = false;
				break;
			}
		}
		i++;
	}
	if(i==5 && r){
		$("#registerBt").removeClass("login-bg2");
		$("#registerBt").addClass("login-bg1");
		$("#registerBt").removeAttr("disabled");
	}
}

/**
 * 获取选中的单选框
 * @param radioName 单选框名称
 */
function getSelectedRadio(){
	
	var radio=document.getElementsByName("purchase");
	var selectedValue;
	for(var i=0;i<radio.length;i++){
	   if(radio[i].checked==true){
	      return selectedValue = radio[i].value;
	   }
	}
	return null;
}

/**
 * 提交前先进行表单验证
 */
function validateForm(){
	if(validateUsername()==false){
		return false;
	}
	if(validateEmail()==false){
		return false;
	}
	if(validatePassword()==false){
		return false;
	}
	if(validateTwoPassword()==false){
		return false;
	}
	return true;
}

/**
 * 验证用户名
 */
function validateUsername(){
	var username = $("#user_name").val();
	if(username.length<3){
		$("#wrongMsg").html("用户名长度不能少于3位！");
		return false;
	}else{
		$.ajax({
			'url':"/dbe/htcdoc/admin/ajaxuserop.php",
			'data':{'method':'checkusername','username':username}, 
			'success':function(data){
				if(data.trim()=='yes'){
					$("#wrongMsg").html("用户名已有人使用！");
					return false;
				}else{
					$("#wrongMsg").html("");
					return true;
				}
			},
			'error':function(XMLHttpRequest, textStatus, errorThrown){
				alert("ajax for checkusername fail");
				alert(XMLHttpRequest.status);
	             alert(XMLHttpRequest.readyState);
	             alert(textStatus);
				return false;
			}
		});
	}
}

/**
 * 验证邮箱
 * @returns {Boolean}
 */
function validateEmail(){
	var email = $("#user_email").val();
	var emailPat=/^(.+)@(.+)$/;
	if(!emailPat.test(email)){
		$("#wrongMsg").html("请输入正确的邮箱格式！");
		return false;
	}else{
		$.ajax({
			'url': "/dbe/htcdoc/admin/ajaxuserop.php",
			'data': {'method': 'checkemail', 'email': email},
			'success': function(data){
				if(data.trim()=='yes'){
					$("#wrongMsg").html("邮箱已有人使用！");
					$("#registerBt").attr("disabled", "disabled");
					return false;
				}else{
					$("#wrongMsg").html("");
					return true;
				}
			},
			'error':function(XMLHttpRequest, textStatus, errorThrown){
				alert("ajax for checkemail fail");
				return false;
			}
		});
	}
}

/**
 * 验证密码
 */
function validatePassword(){
	var pass = $("#user_passwd").val();
	if(pass.length < 6){
		$("#wrongMsg").html("密码长度不能少于6位！");
		return false;
	}else{
		$("#wrongMsg").html("");
		return true;
	}
}

/**
 * 验证两次密码输入是否一致
 */
function validateTwoPassword(){
	var pass1 = $("#user_passwd").val();
	var pass2 = $("#user_passwd2").val();
	if(pass1 != pass2){
		$("#wrongMsg").html("与第一次输入的密码不同！");
		return false;
	}else{
		$("#wrongMsg").html("");
		return true;
	}
}















