<extend name="Base:base" />

<block name="title">方法导航_</block>

<block name="head_css">
	<link rel="stylesheet" href="__ADMIN_PUBLIC__/css/method.css">
</block>

<block name="bd">
    <ul id="J_content" class="content">
		<foreach name="list" item="vo">
	    <li>
	    	<a href="__MODULE__/{$vo.link}" target="contentIframe">
	    		<input type="button" value="{$vo.method_name}">
	    	</a>
	    </li>
		</foreach>
	</ul>
</block>

<block name="foot_js">
    <script type="text/javascript">
	top.$('#J_contentIframe').attr('src', $('#J_content a:eq(0)').attr('href'));

	// 当前连接添加oncurrent样式
	var links = $('#J_content a');
	links.click(function () {
		links.removeClass('oncurrent');
		$(this).addClass('oncurrent');
	});
	$('#J_content a:eq(0)').click();
	</script>
</block>