<extend name="Base:base" />

<block name="bd">
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
					<foreach name="RoleList" item="vo">
						<option value="{$vo.id}">{$vo.role_name}</option>
					</foreach>
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
</block>