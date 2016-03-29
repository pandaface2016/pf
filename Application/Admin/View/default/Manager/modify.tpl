<extend name="Base:base" />

<block name="bd">
	<div class="c_content">
		<form action="__ACTION__" class="c_search" method="get">
			<label>按用户名称查询：</label>
			<input type="text" class="text-input" name="username" value="{$search}">
			<input type="submit" class="submit" name="submit" value="查询">
		</form>
		<table class="c_list">
			<thead>
				<tr>
					<td class="key">id</td>
					<td>用户名</td>
					<td>邮箱</td>
					<td>电话号</td>
					<td>角色</td>
					<td>上次登陆时间</td>
					<td class="key">启用状态</td>
					<td class="key">操作</td>
				</tr>
			</thead>
			<tbody>
			<foreach name="list" item="vo">
				<tr>
					<td class="key">{$vo.id}</td>
					<td>{$vo.username}</td>
					<td>{$vo.email}</td>
					<td>{$vo.phone}</td>
					<td><eq name="vo.role_name" value="">超级管理员<else/>{$vo.role_name}</eq></td>
					<td>{$vo.last_login_time|date="Y-m-d H:i", ###}</td>
					<td class="key">
						<eq name="vo.status" value="1">启用</eq>
						<eq name="vo.status" value="0">停用</eq>
					</td>
					<td class="key">
						<a href="__CONTROLLER__/modifyDo?id={$vo.id}">
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
