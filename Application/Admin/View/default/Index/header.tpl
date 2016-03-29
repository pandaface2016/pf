<extend name="Base:base" />

<block name="title">头部_</block>

<block name="head_css">
    <link rel="stylesheet" href="__ADMIN_PUBLIC__/css/header.css">
</block>

<block name="bd">
    <div class="content">
		<ul class="menu">
			<li class="home"><a href="/" target="_blank">主页</a></li>
			<li><input id="J_loginOut" class="btn" type="button" value="退出"></li>
			<li><span>欢迎您：{$username}</span></li>
		</ul>
	</div>
</block>

<block name="foot_js">
    <script type="text/javascript" src="__ADMIN_PUBLIC__/js/header.js"></script>
    <script type="text/javascript">
	$('#J_loginOut').click(function () {
		top.window.location = '__MODULE__/Public/loginout';
	});
	</script>
</block>
