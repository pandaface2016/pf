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
        <table class="c_form" width="100%">
            <tr>
                <th>表情用户：</th>
                <td>
                    <select name="face_user_id">
                        <?php if(is_array($FaceUserList)): foreach($FaceUserList as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>内容：</th>
                <td>
                    <textarea name="content" rows="6" cols="50"></textarea>
                </td>
            </tr>
            <tr>
                <th>表情图：</th>
                <td>
                    1:<input type="text" name="face[]" class="text-input w100" value="">
                    2:<input type="text" name="face[]" class="text-input w100" value="">
                    3:<input type="text" name="face[]" class="text-input w100" value="">
                    <br/>
                    <br/>
                    4:<input type="text" name="face[]" class="text-input w100" value="">
                    5:<input type="text" name="face[]" class="text-input w100" value="">
                    6:<input type="text" name="face[]" class="text-input w100" value="">
                    <br/>
                    <br/>
                    7:<input type="text" name="face[]" class="text-input w100" value="">
                    8:<input type="text" name="face[]" class="text-input w100" value="">
                    9:<input type="text" name="face[]" class="text-input w100" value="">
                </td>
            </tr>
            <tr>
                <th>表情列表:</th>
                <td>
                    <iframe src="/Admin/Face/modify" width="100%" height="250px"></iframe>
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