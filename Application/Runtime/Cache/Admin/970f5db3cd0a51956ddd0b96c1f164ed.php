<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--[if lt IE 7 ]><html class="ie ie6 lang_sc"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 lang_sc"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 lang_sc"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 lang_sc"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>后台</title>
	<link rel="stylesheet" href="/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/Public/Admin/default/css/common.css">
	
    <link rel="stylesheet" href="/Public/Admin/default/css/dtree.css">
	<link rel="stylesheet" href="/Public/Admin/default/css/left.css">

	
</head>
<body>
	
	
	<div id="content" class="content"></div>

	
	<script type="text/javascript" src="/Public/Common/js/jquery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/default/js/common.js"></script>
	
	<script type="text/javascript" src="/Public/Admin/default/js/dtree.js"></script>
	<script type="text/javascript">
	d = new dTree('d');
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>d.add(<?php echo ($vo["id"]); ?>,<?php echo ($vo["pid"]); ?>,'<?php echo ($vo["node_name"]); ?>-<?php echo ($vo["id"]); ?>','/Admin/<?php echo ($vo["url"]); ?>','','nodeSetIframe','','');<?php endforeach; endif; else: echo "" ;endif; ?>
	$('#content').html(d.toString());
	d.openAll();
	</script>

</body>
</html>