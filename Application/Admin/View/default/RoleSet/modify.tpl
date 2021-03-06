<extend name="Base:base" />

<block name="bd">
	<div class="c_content">
		<form action="__ACTION__" class="c_search" method="get">
			<label>按角色名称查询：</label>
			<input type="text" class="text-input" name="role_name" value="{$search}">
			<input type="submit" class="submit" name="submit" value="查询">
		</form>
		<table class="c_list">
			<thead>
				<tr>
					<td class="key">id</td>
					<td>角色名称</td>
					<td class="key">状态</td>
					<td class="key">操作</td>
				</tr>
			</thead>
			<tbody>
			<foreach name="list" item="vo">
				<tr>
					<td class="key">{$vo.id}</td>
					<td>{$vo.role_name}</td>
					<td class="key">
						<eq name="vo.enable" value="1">启用</eq>
						<eq name="vo.enable" value="0">停用</eq>
					</td>
					<td class="key">
						<a href="__URL__/modifyDo?id={$vo.id}">
							<input type="button" class="btn" value="设置">
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