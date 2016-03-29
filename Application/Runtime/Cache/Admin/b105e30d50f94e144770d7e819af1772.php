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
	
	
    <div class="c_content">
        <form action="/Admin/Discover/modify" class="c_search" method="get">
            <label>按内容查询：</label>
            <input type="text" class="text-input" name="content" value="<?php echo ($search); ?>">
            <input type="submit" class="submit" name="submit" value="查询">
        </form>
        <table class="c_list">
            <thead>
                <tr>
                    <td class="key">id</td>
                    <td>内容</td>
                    <td class="key">表情用户</td>
                    <td>表情图</td>
                    <td class="key">微博分享</td>
                    <td class="key">操作</td>
                </tr>
            </thead>
            <tbody>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td class="key"><?php echo ($vo["id"]); ?></td>
                    <td><?php echo ($vo["content"]); ?></td>
                    <td class="key"><?php echo ($vo["face_user_name"]); ?></td>
                    <td>
                    <?php if(is_array($vo["face_list"])): $i = 0; $__LIST__ = $vo["face_list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$face_vo): $mod = ($i % 2 );++$i;?><img src="<?php echo ($face_vo["url"]); ?>" width="80" />&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                    </td>
                    <td class="key"><?php echo ($vo["weibo_statistics"]); ?></td>
                    <td class="key">
                        <a href="/Admin/Discover/modifyDo?id=<?php echo ($vo["id"]); ?>">
                            <input type="button" class="btn" value="编辑">
                        </a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div class="clearfix">
            <?php echo ($pageshow); ?>
        </div>
    </div>

	
	<script type="text/javascript" src="/Public/Common/js/jquery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/default/js/common.js"></script>
	
</body>
</html>