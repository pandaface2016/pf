<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--[if lt IE 7 ]><html class="ie ie6 lang_sc"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 lang_sc"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 lang_sc"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 lang_sc"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>方法导航_后台</title>
	<link rel="stylesheet" href="/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/Public/Admin/default/css/common.css">
	
	<link rel="stylesheet" href="/Public/Admin/default/css/method.css">

	
</head>
<body>
	
	
    <ul id="J_content" class="content">
		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><li>
	    	<a href="/Admin/<?php echo ($vo["link"]); ?>" target="contentIframe">
	    		<input type="button" value="<?php echo ($vo["method_name"]); ?>">
	    	</a>
	    </li><?php endforeach; endif; ?>
	</ul>

	
	<script type="text/javascript" src="/Public/Common/js/jquery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/default/js/common.js"></script>
	
    <script type="text/javascript">
	top.$('#J_contentIframe').attr('src', $('#J_content a:eq(0)').attr('href'));

	// 当前连接添加oncurrent样式
	var links = $('#J_content a');
	links.click(function () {
		links.removeClass('oncurrent');
		$(this).addClass('oncurrent');
	});
	$('#J_content a:eq(0)').click();
	</script>

</body>
</html>