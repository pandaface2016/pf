<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--[if lt IE 7 ]><html class="ie ie6 lang_sc"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 lang_sc"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 lang_sc"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 lang_sc"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>后台</title>
	<link rel="stylesheet" href="/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/Public/Admin/default/css/common.css">
	
	
</head>
<body>
	
	
    <form id="J_form" action="javascript:C.submitForm({});" method="post">
        <table class="c_form">
            <tr>
                <th>表情描述：</th>
                <td>
                    <input type="text" name="description" class="text-input w500" value="">
                </td>
            </tr>
            <tr>
                <th>图片地址：</th>
                <td>
                    <input type="text" name="url" class="text-input w500" value="">
                </td>
            </tr>
            <tr>
                <th>gif？：</th>
                <td>
                    <label class="radio" for="gif1">
                        <input type="radio" id="gif1" name="gif" value="1">
                        是
                    </label>
                    <label class="radio" for="gif0">
                        <input type="radio" id="gif0" name="gif" value="0" checked>
                        否
                    </label>
                </td>
            </tr>
            <tr>
                <th>标签：</th>
                <td>
                    1:<input type="text" name="tag[]" class="text-input w100" value="">
                    2:<input type="text" name="tag[]" class="text-input w100" value="">
                    3:<input type="text" name="tag[]" class="text-input w100" value="">
                    4:<input type="text" name="tag[]" class="text-input w100" value="">
                    5:<input type="text" name="tag[]" class="text-input w100" value="">
                    <br/>
                    <br/>
                    6:<input type="text" name="tag[]" class="text-input w100" value="">
                    7:<input type="text" name="tag[]" class="text-input w100" value="">
                    8:<input type="text" name="tag[]" class="text-input w100" value="">
                    9:<input type="text" name="tag[]" class="text-input w100" value="">
                    10:<input type="text" name="tag[]" class="text-input w100" value="">
                </td>
            </tr>
            <tr>
                <th>状态：</th>
                <td>
                    <label class="radio" for="status1">
                        <input type="radio" id="status1" name="status" value="1" checked>
                        启用
                    </label>
                    <label class="radio" for="status0">
                        <input type="radio" id="status0" name="status" value="0">
                        停用
                    </label>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input class="btn" type="submit" name="submit" value="提交">
                    <input class="btn" type="reset" name="reset" value="重置">
                </td>
            </tr>
            <tr>
                <th></th>
                <td id="J_error" class="error"></td>
            </tr>
        </table>
    </form>

	
	<script type="text/javascript" src="/Public/Common/js/jquery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/default/js/common.js"></script>
	
</body>
</html>