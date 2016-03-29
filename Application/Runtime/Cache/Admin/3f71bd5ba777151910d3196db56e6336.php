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
	
    <style>
	html, body {
		height: 100%;
	}
	</style>

	
</head>
<body>
	
	
	<div class="c_content">
		<form action="/Admin/MethodSet/modify" class="c_search" method="get">
			<label for="method_name">按名称查询：</label>
			<input type="text" class="text-input" name="method_name" value="<?php echo ($search); ?>">
			<input type="submit" class="submit" name="submit" value="查询">
			<input type="hidden" name="nid" value="<?php echo ($nid); ?>">
		</form>
		<table class="c_list">
			<thead>
				<tr>
					<td class="key">id</td>
					<td width="100">功能名称</td>
					<td>链接地址</td>
					<td width="200">唯一标识</td>
					<td width="100">排序</td>
					<td class="key">操作</td>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
					<td class="key"><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["method_name"]); ?></td>
					<td><?php echo ($vo["link"]); ?></td>
					<td><?php echo ($vo["identifier"]); ?></td>
					<td><?php echo ($vo["sort"]); ?></td>
					<td class="key">
						<a href="/Admin/MethodSet/modifyDo?id=<?php echo ($vo["id"]); ?>">
							<input type="button" class="btn" value="编辑">
						</a>
					</td>
				</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
		<div class="clearfix">
			<?php echo ($pageshow); ?>
		</div>
	</div>

	
	<script type="text/javascript" src="/Public/Common/js/jquery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/default/js/common.js"></script>
	
</body>
</html>