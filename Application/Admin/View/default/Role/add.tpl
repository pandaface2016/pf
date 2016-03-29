<extend name="Base:base" />

<block name="bd">
	<form id="J_form" action="javascript:C.submitForm({});" method="post">
		<table class="c_form">
			<tr>
				<th>角色名称：</th>
				<td>
					<input type="text" name="role_name" class="text-input" value="">
				</td>
			</tr>
			<tr>
				<th>是否启用：</th>
				<td>
					<label class="radio" for="enable1">
						<input type="radio" id="enable1" name="enable" value="1" checked>
						启用
					</label>
					<label class="radio" for="enable0">
						<input type="radio" id="enable0" name="enable" value="0">
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