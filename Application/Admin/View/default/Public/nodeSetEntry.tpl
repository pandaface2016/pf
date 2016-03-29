<extend name="Base:base" />

<block name="title">管理员编辑列表_</block>

<block name="head_css">
    <link rel="stylesheet" href="__ADMIN_PUBLIC__/css/nodeSetEntry.css">
</block>

<block name="bd">
	<div class="content">
		<div class="left-wrap">
			<iframe src="__CONTROLLER__/nodeSetLeft?module={$module}&action={$action}" frameborder="0"></iframe>
		</div>
		<div class="right-wrap">
			<iframe name="nodeSetIframe" src="" frameborder="0"></iframe>
		</div>
	</div>
</block>