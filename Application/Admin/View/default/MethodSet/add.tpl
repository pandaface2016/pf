<extend name="Base:base" />

<block name="bd">
	<div class="c_content">
		<form id="J_form" action="javascript:C.submitForm({});" method="post">
			<table class="c_form">
				<tr>
					<th>功能名称：</th>
					<td>
						<input type="text" name="method_name" class="text-input" value="">
					</td>
				</tr>
				<tr>
					<th>链接地址：</th>
					<td>
						<input type="text" name="link" class="text-input w200" value="">
					</td>
				</tr>
				<tr>
					<th>唯一标识：</th>
					<td><input type="text" class="text-input" name="identifier" value=""></td>
				</tr>
				<tr>
					<th>排序：</th>
					<td><input type="text" class="text-input" name="sort" value="1"></td>
				</tr>
				<tr>
					<th></th>
					<td>
						<input class="btn" type="submit" name="submit" value="提交">
						<input class="btn" type="reset" name="reset" value="重置">
						<input class="btn" type="button" name="goback" value="返回" onclick="history.back()">
						<input type="hidden" name="node_id" value="{$nid}">
					</td>
				</tr>
				<tr>
					<th></th>
					<td id="J_error" class="error"></td>
				</tr>
			</table>
		</form>
		<table class="c_list">
			<thead>
				<tr>
					<td class="key">id</td>
					<td width="100">功能名称</td>
					<td>链接地址</td>
					<td width="200">唯一标识</td>
					<td width="100">排序</td>
				</tr>
			</thead>
			<tbody>
			<foreach name="list" item="vo">
				<tr>
					<td class="key">{$vo.id}</td>
					<td>{$vo.method_name}</td>
					<td>{$vo.link}</td>
					<td>{$vo.identifier}</td>
					<td>{$vo.sort}</td>
				</tr>
			</foreach>
			</tbody>
		</table>
	</div>
</block>