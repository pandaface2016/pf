<extend name="Base:base" />

<block name="bd">
	<form id="J_form" action="javascript:C.submitForm({});" method="post">
		<table class="c_form">
			<tr>
				<th>id：</th>
				<td><input type="text" class="text-input" name="id" value="{$data.id}" readonly></td>
			</tr>
			<tr>
				<th>用户名：</th>
				<td><input type="text" class="text-input" name="username" value="{$data.username}" readonly></td>
			</tr>
			<tr>
				<th>密码：</th>
				<td><input type="text" class="text-input" name="_password" value=""></td>
			</tr>
			<tr>
				<th>邮箱：</th>
				<td><input type="text" class="text-input" name="email" value="{$data.email}"></td>
			</tr>
			<tr>
				<th>电话号：</th>
				<td><input type="text" class="text-input" name="phone" value="{$data.phone}"></td>
			</tr>
			<tr>
				<th>身份：</th>
				<td>
					<label for="ismanager1" class="radio">
						<input type="radio" name="ismanager" id="ismanager1" value="1" <eq name="data.ismanager" value="1">checked</eq>>管理员
					</label>
					<label for="ismanager0" class="radio">
						<input type="radio" name="ismanager" id="ismanager0" value="0" <eq name="data.ismanager" value="0">checked</eq>>会员
					</label>
				</td>
			</tr>
			<tr id="J_roleIdTr">
				<th></th>
				<td>
					<select name="role_id" id="">
					<foreach name="RoleList" item="vo">
						<option value="{$vo.id}" <eq name="data.role_id" value="$vo.id">selected</eq>>{$vo.role_name}</option>
					</foreach>
						<option value="0" <eq name="data.role_id" value="0">selected</eq>>超级管理员</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>启用状态：</th>
				<td>
					<label for="status1" class="radio">
						<input type="radio" name="status" id="status1" value="1" <eq name="data.status" value="1">checked</eq>>
						启用
					</label>
					<label for="status0" class="radio">
						<input type="radio" name="status" id="status0" value="0" <eq name="data.status" value="0">checked</eq>>
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

<block name="foot_js">
	<script>
	$('input[name=ismanager]').click(function() {
		if(this.value == 0) {
			$('#J_roleIdTr').hide();
		} else {
			$('#J_roleIdTr').show();
		}
	});
	</script>
</block>