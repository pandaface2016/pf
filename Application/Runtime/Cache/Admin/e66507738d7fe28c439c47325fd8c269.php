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
        <form action="/Admin/Face/modify" class="c_search" method="get">
            <label>按表情名称查询：</label>
            <input type="text" class="text-input" name="description" value="<?php echo ($search); ?>">
            <input type="submit" class="submit" name="submit" value="查询">
        </form>
        <table class="c_list">
            <thead>
                <tr>
                    <td class="key">id</td>
                    <td>预览</td>
                    <td>描述</td>
                    <td class="key">gif图？</td>
                    <td class="key">标签</td>
                    <td>微信好友分享</td>
                    <td>朋友圈分享</td>
                    <td>微博分享</td>
                    <td>操作</td>
                </tr>
            </thead>
            <tbody>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td class="key"><?php echo ($vo["id"]); ?></td>
                    <td align="center"><img src="<?php echo ($vo["url"]); ?>" height="80"/></td>
                    <td><?php echo ($vo["description"]); ?></td>
                    <td class="key">
                        <?php if(($vo["gif"]) == "1"): ?>gif<?php endif; ?>
                        <?php if(($vo["gif"]) == "0"): ?>非gif<?php endif; ?>
                    </td>
                    <td>
                        <?php if(is_array($vo["tagsName"])): $i = 0; $__LIST__ = $vo["tagsName"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$name): $mod = ($i % 2 );++$i; echo ($name["name"]); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
                    </td>
                    <td><?php echo ($vo["weixin_session_statistics"]); ?></td>
                    <td><?php echo ($vo["weixin_timeline_statistics"]); ?></td>
                    <td><?php echo ($vo["weibo_statistics"]); ?></td>
                    <td class="key">
                        <a href="/Admin/Face/modifyDo?id=<?php echo ($vo["id"]); ?>">
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