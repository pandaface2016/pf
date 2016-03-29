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
	
	
	<form id="J_form" action="javascript:C.submitForm({});" method="post">
		<table class="c_form">
			<tr>
				<th>用户名：</th>
				<td>
					<input type="text" name="username" class="text-input" value="">
				</td>
			</tr>
			<tr>
				<th>密码：</th>
				<td>
					<input type="password" name="password" class="text-input" value="">
				</td>
			</tr>
			<tr>
				<th>邮箱：</th>
				<td><input type="text" class="text-input" name="email" value=""></td>
			</tr>
			<tr>
				<th>电话号：</th>
				<td><input type="text" class="text-input" name="phone" value=""></td>
			</tr>
			<tr>
				<th>角色：</th>
				<td>
					<select name="role_id" id="">
					<?php if(is_array($RoleList)): foreach($RoleList as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["role_name"]); ?></option><?php endforeach; endif; ?>
						<option value="0">超级管理员</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>是否启用：</th>
				<td>
					<label class="radio" for="status1">
						<input type="radio" id="status1" name="status" value="1" checked>
						启用
					</label>
					<label class="radio" for="status0">
						<input type="radio" id="status0" name="status" value="0">
						停用
					</label>
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