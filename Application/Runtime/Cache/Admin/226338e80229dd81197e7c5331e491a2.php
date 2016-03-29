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
	
	
	<form id="J_form" action="javascript:C.submitForm({});" method="post">
		<table class="c_form">
			<tr>
				<th>父节点ID：</th>
				<td>
					<input type="text" name="pid" class="text-input" value="<?php echo ($pid); ?>" readonly>
				</td>
			</tr>
			<tr>
				<th>节点名称：</th>
				<td>
					<input type="text" name="node_name" class="text-input" value="">
				</td>
			</tr>
			<tr>
				<th>排序：</th>
				<td><input type="text" class="text-input" name="sort" value="1"></td>
			</tr>
			<tr>
				<th>节点说明：</th>
				<td>
					<input type="text" name="detail" class="text-input w400" value="">
				</td>
			</tr>
			<tr>
				<th></th>
				<td>
					<input class="btn" type="submit" name="submit" value="提交">
					<input class="btn" type="reset" name="reset" value="重置">
					<input class="btn" type="button" name="goback" value="返回" onclick="history.back()">
				</td>
			</tr>
			<tr>
				<th></th>
				<td id="J_error" class="error"></td>
			</tr>
		</table>
	</form>

	
	<script type="text/javascript" src="/Public/Common/js/jquery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/default/js/common.js"></script>
	
</body>
</html>