<extend name="Base:base" />

<block name="head_css">
    <link rel="stylesheet" href="__ADMIN_PUBLIC__/css/dtree.css">
	<link rel="stylesheet" href="__ADMIN_PUBLIC__/css/left.css">
</block>

<block name="bd">
	<form id="J_form" action="javascript:C.submitForm({});" method="post">
		<table class="c_form">
			<tr>
				<th>父节点ID：</th>
				<td>
					<input type="text" name="pid" class="text-input" value="{$pid}" readonly>
				</td>
			</tr>
			<tr>
				<th>节点名称：</th>
				<td>
					<input type="text" name="node_name" class="text-input" value="">
				</td>
			</tr>
			<tr>
				<th>排序：</th>
				<td><input type="text" class="text-input" name="sort" value="1"></td>
			</tr>
			<tr>
				<th>节点说明：</th>
				<td>
					<input type="text" name="detail" class="text-input w400" value="">
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