<extend name="Base:base" />

<block name="bd">
	<div class="c_content">
		<form action="__ACTION__" class="c_search" method="get">
			<label>按名称查询：</label>
			<input type="text" class="text-input" name="name" value="{$search}">
			<input type="submit" class="submit" name="submit" value="查询">
		</form>
		<table class="c_list">
			<thead>
				<tr>
					<td class="key">id</td>
					<td class="key">角色名称</td>
					<td class="key">头像</td>
					<td>签名语</td>
					<td class="key">操作</td>
				</tr>
			</thead>
			<tbody>
			<foreach name="list" item="vo">
				<tr>
					<td class="key">{$vo.id}</td>
					<td>{$vo.name}</td>
					<td><img width="80" height="80" src="{$vo.avatar}"/></td>
					<td>{$vo.signature}</td>
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