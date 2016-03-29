<extend name="Base:base" />

<block name="head_css">
    <link rel="stylesheet" href="__ADMIN_PUBLIC__/css/dtree.css">
	<link rel="stylesheet" href="__ADMIN_PUBLIC__/css/left.css">
</block>

<block name="bd">
	<div id="content" class="content"></div>
</block>

<block name="foot_js">
	<script type="text/javascript" src="__ADMIN_PUBLIC__/js/dtree.js"></script>
	<script type="text/javascript">
	d = new dTree('d');
	<volist name='list' id='vo'>
	d.add({$vo.id},{$vo.pid},'{$vo.node_name}-{$vo.id}','__MODULE__/{$vo.url}','','nodeSetIframe','','');
	</volist>
	$('#content').html(d.toString());
	d.openAll();
	</script>
</block>