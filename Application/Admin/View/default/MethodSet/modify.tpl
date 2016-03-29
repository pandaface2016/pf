<extend name="Base:base" />

<block name="head_css">
    <style>
	html, body {
		height: 100%;
	}
	</style>
</block>

<block name="bd">
	<div class="c_content">
		<form action="__ACTION__" class="c_search" method="get">
			<label for="method_name">按名称查询：</label>
			<input type="text" class="text-input" name="method_name" value="{$search}">
			<input type="submit" class="submit" name="submit" value="查询">
			<input type="hidden" name="nid" value="{$nid}">
		</form>
		<table class="c_list">
			<thead>
				<tr>
					<td class="key">id</td>
					<td width="100">功能名称</td>
					<td>链接地址</td>
					<td width="200">唯一标识</td>
					<td width="100">排序</td>
					<td class="key">操作</td>
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
					<td class="key">
						<a href="__URL__/modifyDo?id={$vo.id}">
							<input type="button" class="btn" value="编辑">
						</a>
					</td>
				</tr>
			</foreach>
			</tbody>
		</table>
		<div class="clearfix">
			{$pageshow}
		</div>
	</div>
</block>