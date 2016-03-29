<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--[if lt IE 7 ]><html class="ie ie6 lang_sc"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 lang_sc"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 lang_sc"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 lang_sc"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>左侧菜单树_后台</title>
	<link rel="stylesheet" href="/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/Public/Admin/default/css/common.css">
	
    <link rel="stylesheet" href="/Public/Admin/default/css/dtree.css">
	<link rel="stylesheet" href="/Public/Admin/default/css/left.css">

	
</head>
<body>
	
	
    <div id="content" class="content">
		<div class="top">
			<input type="button" class="btn" value="展" onclick="d.openAll()">
			<input type="button" class="btn" value="合" onclick="d.closeAll()">
		</div>
	</div>

	
	<script type="text/javascript" src="/Public/Common/js/jquery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/default/js/common.js"></script>
	
    <script type="text/javascript" src="/Public/Admin/default/js/dtree.js"></script>
    <script type="text/javascript">
	d = new dTree('d');
	<?php if(is_array($nodes)): $i = 0; $__LIST__ = $nodes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["has_method"]) == "1"): ?>d.add(<?php echo ($vo["id"]); ?>,<?php echo ($vo["pid"]); ?>,'<?php echo ($vo["node_name"]); ?>','/Admin/Index/method?nid=<?php echo ($vo["id"]); ?>','','mIframe','','');<?php endif; ?>
	<?php if(($vo["has_method"]) == "0"): ?>d.add(<?php echo ($vo["id"]); ?>,<?php echo ($vo["pid"]); ?>,'<?php echo ($vo["node_name"]); ?>','','','mIframe','','');<?php endif; endforeach; endif; else: echo "" ;endif; ?>
	$('#content').append(d.toString());
	</script>

</body>
</html>