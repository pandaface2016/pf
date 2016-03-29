<extend name="Base:base" />

<block name="bd">
	<form id="J_form" action="javascript:C.submitForm({});" method="post">
		<table class="c_form">
			<tr>
				<th>id：</th>
				<td>
					<input type="text" class="text-input" name="id" value="{$data.id}" readonly>
				</td>
			</tr>
			<tr>
				<th>父节点id：</th>
				<td>
					<input type="text" class="text-input" name="pid" value="{$data.pid}">
				</td>
			</tr>
			<tr>
				<th>节点名称：</th>
				<td>
					<input type="text" class="text-input" name="node_name" value="{$data.node_name}">
				</td>
			</tr>
			<tr>
				<th>排序：</th>
				<td>
					<input type="text" class="text-input" name="sort"  value="{$data.sort}">
				</td>
			</tr>
			<tr>
				<th>节点说明：</th>
				<td>
					<input type="text" class="text-input w400" name="detail" value="{$data.detail}">
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