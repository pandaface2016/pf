<!DOCTYPE HTML>
<!--[if lt IE 7 ]><html class="ie ie6 lang_sc"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 lang_sc"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 lang_sc"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 lang_sc"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
<head>
<meta charset="utf-8">
<title>后台登陆，闲人免进</title>
<link rel="stylesheet" href="__PUBLIC__/Common/css/reset.css">
<link rel="stylesheet" href="__ADMIN_PUBLIC__/css/login.css">
</head>

<body>
<div class="content">
	<form class="form-wrap" id="J_form" action="javascript:submitForm();">
		<div id="J_error" class="error"></div>
		<table class="form">
			<tr>
				<td class="key">用户名：</td>
				<td class="value">
					<input type="text" name="username" class="text-input" value="">
				</td>
			</tr>
			<tr>
				<td class="key">密&nbsp;&nbsp;码：</td>
				<td class="value">
					<input type="password" name="password" class="text-input" value="">
				</td>
			</tr>
			<tr>
				<td class="key">验证码：{$_SESSION['verify']}</td>
				<td class="value">
					<input type="text" name="verify" class="text-input">
					<img title="点击刷新验证码" id="verifyImg" class="verify-img" src="__URL__/verify" alt="">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" class="btn" value="登&nbsp;&nbsp;录" name="submit">
				</td>
			</tr>
		</table>
	</form>
	<div class="bottom"></div>
</div>
<script type="text/javascript" src="__PUBLIC__/Common/js/jquery/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__ADMIN_PUBLIC__/js/common.js"></script>
<script type="text/javascript" src="__COMMON_PUBLIC__/js/detector.js"></script>
<script type="text/javascript">
$('#verifyImg').click(function () {
	C.refreshVerify();
});

function submitForm () {
	C.submitForm({
		callback : function () {
			location.href = '__MODULE__/Index/index';
		}
	});
}
</script>
</body>
</html>
