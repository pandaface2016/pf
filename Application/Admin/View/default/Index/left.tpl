<extend name="Base:base" />

<block name="title">左侧菜单树_</block>

<block name="head_css">
    <link rel="stylesheet" href="__ADMIN_PUBLIC__/css/dtree.css">
	<link rel="stylesheet" href="__ADMIN_PUBLIC__/css/left.css">
</block>

<block name="bd">
    <div id="content" class="content">
		<div class="top">
			<input type="button" class="btn" value="展" onclick="d.openAll()">
			<input type="button" class="btn" value="合" onclick="d.closeAll()">
		</div>
	</div>
</block>

<block name="foot_js">
    <script type="text/javascript" src="__ADMIN_PUBLIC__/js/dtree.js"></script>
    <script type="text/javascript">
	d = new dTree('d');
	<volist name='nodes' id='vo'>
	<eq name="vo.has_method" value="1">
	d.add({$vo.id},{$vo.pid},'{$vo.node_name}','__CONTROLLER__/method?nid={$vo.id}','','mIframe','','');
	</eq>
	<eq name="vo.has_method" value="0">
	d.add({$vo.id},{$vo.pid},'{$vo.node_name}','','','mIframe','','');
	</eq>
	</volist>
	$('#content').append(d.toString());
	</script>
</block>
