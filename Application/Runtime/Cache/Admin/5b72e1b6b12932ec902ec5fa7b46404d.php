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
		<form action="/Admin/RoleSet/modify" class="c_search" method="get">
			<label>按角色名称查询：</label>
			<input type="text" class="text-input" name="role_name" value="<?php echo ($search); ?>">
			<input type="submit" class="submit" name="submit" value="查询">
		</form>
		<table class="c_list">
			<thead>
				<tr>
					<td class="key">id</td>
					<td>角色名称</td>
					<td class="key">状态</td>
					<td class="key">操作</td>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
					<td class="key"><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["role_name"]); ?></td>
					<td class="key">
						<?php if(($vo["enable"]) == "1"): ?>启用<?php endif; ?>
						<?php if(($vo["enable"]) == "0"): ?>停用<?php endif; ?>
					</td>
					<td class="key">
						<a href="/Admin/RoleSet/modifyDo?id=<?php echo ($vo["id"]); ?>">
							<input type="button" class="btn" value="设置">
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