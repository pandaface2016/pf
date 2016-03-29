<extend name="Base:base" />

<block name="bd">
	<form id="J_form" action="javascript:C.submitForm({});" method="post">
		<table class="c_form">
			<tr>
				<th>id：</th>
				<td><input type="text" class="text-input" name="id" value="{$data.id}" readonly></td>
			</tr>
			<tr>
				<th>角色名称：</th>
				<td><input type="text" class="text-input" name="role_name" value="{$data.role_name}"></td>
			</tr>
			<tr>
				<th>启用状态：</th>
				<td>
					<label for="enable1" class="radio">
						<input type="radio" name="enable" id="enable1" value="1" <eq name="data.enable" value="1">checked</eq>>
						启用
					</label>
					<label for="enable0" class="radio">
						<input type="radio" name="enable" id="enable0" value="0" <eq name="data.enable" value="0">checked</eq>>
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