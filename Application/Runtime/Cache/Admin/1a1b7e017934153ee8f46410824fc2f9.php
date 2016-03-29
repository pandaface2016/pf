<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--[if lt IE 7 ]><html class="ie ie6 lang_sc"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 lang_sc"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 lang_sc"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 lang_sc"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>头部_后台</title>
	<link rel="stylesheet" href="/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/Public/Admin/default/css/common.css">
	
    <link rel="stylesheet" href="/Public/Admin/default/css/header.css">

	
</head>
<body>
	
	
    <div class="content">
		<ul class="menu">
			<li class="home"><a href="/" target="_blank">主页</a></li>
			<li><input id="J_loginOut" class="btn" type="button" value="退出"></li>
			<li><span>欢迎您：<?php echo ($username); ?></span></li>
		</ul>
	</div>

	
	<script type="text/javascript" src="/Public/Common/js/jquery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/default/js/common.js"></script>
	
    <script type="text/javascript" src="/Public/Admin/default/js/header.js"></script>
    <script type="text/javascript">
	$('#J_loginOut').click(function () {
		top.window.location = '/Admin/Public/loginout';
	});
	</script>

</body>
</html>