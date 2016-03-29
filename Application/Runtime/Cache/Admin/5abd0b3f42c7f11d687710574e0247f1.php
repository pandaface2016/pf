<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--[if lt IE 7 ]><html class="ie ie6 lang_sc"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 lang_sc"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 lang_sc"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 lang_sc"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>管理员编辑列表_后台</title>
	<link rel="stylesheet" href="/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/Public/Admin/default/css/common.css">
	
    <link rel="stylesheet" href="/Public/Admin/default/css/nodeSetEntry.css">

	
</head>
<body>
	
	
	<div class="content">
		<div class="left-wrap">
			<iframe src="/Admin/Public/nodeSetLeft?module=<?php echo ($module); ?>&action=<?php echo ($action); ?>" frameborder="0"></iframe>
		</div>
		<div class="right-wrap">
			<iframe name="nodeSetIframe" src="" frameborder="0"></iframe>
		</div>
	</div>

	
	<script type="text/javascript" src="/Public/Common/js/jquery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/default/js/common.js"></script>
	
</body>
</html>