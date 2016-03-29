<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--[if lt IE 7 ]><html class="ie ie6 lang_sc"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 lang_sc"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 lang_sc"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 lang_sc"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>首页框架_后台</title>
	<link rel="stylesheet" href="/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/Public/Admin/default/css/common.css">
	
    <link rel="stylesheet" href="/Public/Admin/default/css/index.css">

	
</head>
<body>
	
    <div class="header-wrap J_headerWrap">
        <iframe id="J_headerIframe" name="headerIframe" src="/Admin/Index/header" frameborder="0"></iframe>
    </div>

	
    <div class="main-wrap J_mainWrap">
        <div class="left-wrap J_leftWrap">
            <iframe id="J_leftIframe" name="leftIframe" src="/Admin/Index/left" frameborder="0"></iframe>
        </div>
        <div class="right-wrap J_rightWrap">
            <div class="method-wrap J_methodWrap">
                <iframe id="J_methodIframe" name="mIframe" src="/Admin/Index/method?nid=9" frameborder="0"></iframe>
            </div>
            <div class="content-wrap J_contentWrap">
                <iframe id="J_contentIframe" name="contentIframe" src="" frameborder="0"></iframe>
            </div>
        </div>
    </div>

	
	<script type="text/javascript" src="/Public/Common/js/jquery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/default/js/common.js"></script>
	
    <script type="text/javascript" src="/Public/Admin/default/js/index.js"></script>
    <script type="text/javascript">
    ADMIN.Index.init();
    </script>

</body>
</html>