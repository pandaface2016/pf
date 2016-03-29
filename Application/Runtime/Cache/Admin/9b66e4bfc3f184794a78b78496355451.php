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
				<th>id：</th>
				<td><input type="text" class="text-input" name="id" value="<?php echo ($data["id"]); ?>" readonly></td>
			</tr>
			<tr>
				<th>用户名：</th>
				<td><input type="text" class="text-input" name="username" value="<?php echo ($data["username"]); ?>" readonly></td>
			</tr>
			<tr>
				<th>密码：</th>
				<td><input type="text" class="text-input" name="_password" value=""></td>
			</tr>
			<tr>
				<th>邮箱：</th>
				<td><input type="text" class="text-input" name="email" value="<?php echo ($data["email"]); ?>"></td>
			</tr>
			<tr>
				<th>电话号：</th>
				<td><input type="text" class="text-input" name="phone" value="<?php echo ($data["phone"]); ?>"></td>
			</tr>
			<tr>
				<th>身份：</th>
				<td>
					<label for="ismanager1" class="radio">
						<input type="radio" name="ismanager" id="ismanager1" value="1" <?php if(($data["ismanager"]) == "1"): ?>checked<?php endif; ?>>管理员
					</label>
					<label for="ismanager0" class="radio">
						<input type="radio" name="ismanager" id="ismanager0" value="0" <?php if(($data["ismanager"]) == "0"): ?>checked<?php endif; ?>>会员
					</label>
				</td>
			</tr>
			<tr id="J_roleIdTr">
				<th></th>
				<td>
					<select name="role_id" id="">
					<?php if(is_array($RoleList)): foreach($RoleList as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>" <?php if(($data["role_id"]) == $vo["id"]): ?>selected<?php endif; ?>><?php echo ($vo["role_name"]); ?></option><?php endforeach; endif; ?>
						<option value="0" <?php if(($data["role_id"]) == "0"): ?>selected<?php endif; ?>>超级管理员</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>启用状态：</th>
				<td>
					<label for="status1" class="radio">
						<input type="radio" name="status" id="status1" value="1" <?php if(($data["status"]) == "1"): ?>checked<?php endif; ?>>
						启用
					</label>
					<label for="status0" class="radio">
						<input type="radio" name="status" id="status0" value="0" <?php if(($data["status"]) == "0"): ?>checked<?php endif; ?>>
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
	
	<script>
	$('input[name=ismanager]').click(function() {
		if(this.value == 0) {
			$('#J_roleIdTr').hide();
		} else {
			$('#J_roleIdTr').show();
		}
	});
	</script>

</body>
</html>