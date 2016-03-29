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
				<th>id：</th>
				<td><input type="text" class="text-input" name="id" value="<?php echo ($data["id"]); ?>" readonly></td>
			</tr>
			<tr>
                <th>表情描述：</th>
                <td>
                    <input type="text" name="description" class="text-input w500" value="<?php echo ($data["description"]); ?>">
                </td>
            </tr>
            <tr>
                <th>图片地址：</th>
                <td>
                    <input type="text" name="url" class="text-input w500" value="<?php echo ($data["url"]); ?>">
                    <br/>
                    <img width="120" height="120" src="<?php echo ($data["url"]); ?>"/>
                </td>
            </tr>
            <tr>
                <th>gif？：</th>
                <td>
                    <label class="radio" for="gif1">
                        <input type="radio" id="gif1" name="gif" value="1" <?php if(($data["gif"]) == "1"): ?>checked<?php endif; ?>>
                        是
                    </label>
                    <label class="radio" for="gif0">
                        <input type="radio" id="gif0" name="gif" value="0" <?php if(($data["gif"]) == "0"): ?>checked<?php endif; ?>>
                        否
                    </label>
                </td>
            </tr>
            <tr>
                <th>标签：</th>
                <td>
                    <?php $__FOR_START_555955541__=0;$__FOR_END_555955541__=10;for($key=$__FOR_START_555955541__;$key < $__FOR_END_555955541__;$key+=1){ echo ($key+1); ?>:<input type="text" name="tag[]" class="text-input w100" value="<?php echo ($tags[$key]["name"]); ?>">
                    <?php if(($key) == "4"): ?><br/>
                    <br/><?php endif; } ?>
                </td>
            </tr>
            <tr>
                <th>状态：</th>
                <td>
                    <label class="radio" for="status1">
                        <input type="radio" id="status1" name="status" value="1" <?php if(($data["status"]) == "1"): ?>checked<?php endif; ?>>
                        启用
                    </label>
                    <label class="radio" for="status0">
                        <input type="radio" id="status0" name="status" value="0" <?php if(($data["status"]) == "0"): ?>checked<?php endif; ?>>
                        停用
                    </label>
                </td>
            </tr>
			<tr>
				<th></th>
				<td>
					<input class="btn" type="submit" name="submit" value="提交">
					<input class="btn" type="reset" name="reset" value="重置">
					<input class="btn" type="button" name="goback" value="返回" onclick="history.back()">
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
	
	<script>
	$('input[name=ismanager]').click(function() {
		if(this.value == 0) {
			$('#J_roleIdTr').hide();
		} else {
			$('#J_roleIdTr').show();
		}
	});
	</script>

</body>
</html>