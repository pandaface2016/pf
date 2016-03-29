<extend name="Base:base" />

<block name="head_css">
	<style type="text/css">
	.c_list tbody input {
		margin-right: 3px;
		vertical-align: middle;
	}
	.c_list tbody span {
		margin-right: 20px;
		vertical-align: middle;
	}
	</style>
</block>

<block name="bd">
	<form class="c_content" id="J_form" action="javascript:C.submitForm({});" method="post">
		<table class="c_list">
			<thead>
				<tr>
					<td width="35%">系统目录</td>
					<td width="65%">角色权限</td>
				</tr>
			</thead>
			<tbody>
				{$str}
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">
						<input class="btn" type="submit" name="submit" value="提交">
						<input class="btn" type="reset" name="reset" value="重置">
						<input class="btn" type="button" name="goback" value="返回" onclick="history.back()">
						<input type="hidden" name="role_id" value="{$rid}">
						<span id="J_error" class="error"></span>
					</td>
				</tr>
			</tfoot>
		</table>
	</form>
</block>