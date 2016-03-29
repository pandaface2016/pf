<extend name="Base:base" />

<block name="bd">
	<form id="J_form" action="javascript:C.submitForm({});" method="post">
		<table class="c_form">
			<tr>
				<th>昵称：</th>
				<td>
					<input type="text" name="name" class="text-input" value="">
				</td>
			</tr>
			<tr>
				<th>头像：</th>
				<td>
					<input type="text" name="avatar" class="text-input w400" value="">
				</td>
			</tr>
			<tr>
				<th>签名语：</th>
				<td>
					<input type="text" name="signature" class="text-input w400" value="">
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