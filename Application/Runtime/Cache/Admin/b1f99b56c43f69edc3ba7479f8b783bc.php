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
	
	
</head>
<body>
	
	
	<div class="c_content">
		<form id="J_form" action="javascript:C.submitForm({});" method="post">
			<table class="c_form">
				<tr>
					<th>功能名称：</th>
					<td>
						<input type="text" name="method_name" class="text-input" value="">
					</td>
				</tr>
				<tr>
					<th>链接地址：</th>
					<td>
						<input type="text" name="link" class="text-input w200" value="">
					</td>
				</tr>
				<tr>
					<th>唯一标识：</th>
					<td><input type="text" class="text-input" name="identifier" value=""></td>
				</tr>
				<tr>
					<th>排序：</th>
					<td><input type="text" class="text-input" name="sort" value="1"></td>
				</tr>
				<tr>
					<th></th>
					<td>
						<input class="btn" type="submit" name="submit" value="提交">
						<input class="btn" type="reset" name="reset" value="重置">
						<input class="btn" type="button" name="goback" value="返回" onclick="history.back()">
						<input type="hidden" name="node_id" value="<?php echo ($nid); ?>">
					</td>
				</tr>
				<tr>
					<th></th>
					<td id="J_error" class="error"></td>
				</tr>
			</table>
		</form>
		<table class="c_list">
			<thead>
				<tr>
					<td class="key">id</td>
					<td width="100">功能名称</td>
					<td>链接地址</td>
					<td width="200">唯一标识</td>
					<td width="100">排序</td>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
					<td class="key"><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["method_name"]); ?></td>
					<td><?php echo ($vo["link"]); ?></td>
					<td><?php echo ($vo["identifier"]); ?></td>
					<td><?php echo ($vo["sort"]); ?></td>
				</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>

	
	<script type="text/javascript" src="/Public/Common/js/jquery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/default/js/common.js"></script>
	
</body>
</html>