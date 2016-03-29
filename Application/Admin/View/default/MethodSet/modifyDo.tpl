<extend name="Base:base" />

<block name="bd">
	<form id="J_form" action="javascript:C.submitForm({});" method="post">
		<table class="c_form">
			<tr>
				<th>id：</th>
				<td>
					<input type="text" class="text-input" value="{$data.id}" name="id" readonly>
				</td>
			</tr>
			<tr>
				<th>功能名称：</th>
				<td>
					<input type="text" class="text-input" value="{$data.method_name}" name="method_name">
				</td>
			</tr>
			<tr>
				<th>链接地址：</th>
				<td>
					<input type="text" name="link" class="text-input w400" value="{$data.link}">
				</td>
			</tr>
			<tr>
				<th>唯一标识：</th>
				<td><input type="text" class="text-input w400" name="identifier" value="{$data.identifier}"></td>
			</tr>
			<tr>
				<th>排序：</th>
				<td><input type="text" class="text-input" name="sort" value="{$data.sort}"></td>
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