<extend name="Base:base" />

<block name="title">首页框架_</block>

<block name="head_css">
    <link rel="stylesheet" href="__ADMIN_PUBLIC__/css/index.css">
</block>

<block name="hd">
    <div class="header-wrap J_headerWrap">
        <iframe id="J_headerIframe" name="headerIframe" src="__CONTROLLER__/header" frameborder="0"></iframe>
    </div>
</block>

<block name="bd">
    <div class="main-wrap J_mainWrap">
        <div class="left-wrap J_leftWrap">
            <iframe id="J_leftIframe" name="leftIframe" src="__CONTROLLER__/left" frameborder="0"></iframe>
        </div>
        <div class="right-wrap J_rightWrap">
            <div class="method-wrap J_methodWrap">
                <iframe id="J_methodIframe" name="mIframe" src="__CONTROLLER__/method?nid=9" frameborder="0"></iframe>
            </div>
            <div class="content-wrap J_contentWrap">
                <iframe id="J_contentIframe" name="contentIframe" src="" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</block>

<block name="foot_js">
    <script type="text/javascript" src="__ADMIN_PUBLIC__/js/index.js"></script>
    <script type="text/javascript">
    ADMIN.Index.init();
    </script>
</block>
