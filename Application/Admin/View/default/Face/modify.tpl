<extend name="Base:base" />

<block name="bd">
    <div class="c_content">
        <form action="__ACTION__" class="c_search" method="get">
            <label>按表情名称查询：</label>
            <input type="text" class="text-input" name="description" value="{$search}">
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
            <volist name="list" id="vo">
                <tr>
                    <td class="key">{$vo.id}</td>
                    <td align="center"><img src="{$vo.url}" height="80"/></td>
                    <td>{$vo.description}</td>
                    <td class="key">
                        <eq name="vo.gif" value="1">gif</eq>
                        <eq name="vo.gif" value="0">非gif</eq>
                    </td>
                    <td>
                        <volist name="vo.tagsName" id="name">
                        {$name.name}<br/>
                        </volist>
                    </td>
                    <td>{$vo.weixin_session_statistics}</td>
                    <td>{$vo.weixin_timeline_statistics}</td>
                    <td>{$vo.weibo_statistics}</td>
                    <td class="key">
                        <a href="__URL__/modifyDo?id={$vo.id}">
                            <input type="button" class="btn" value="编辑">
                        </a>
                    </td>
                </tr>
            </volist>
            </tbody>
        </table>
        <div class="clearfix">
            {$pageshow}
        </div>
    </div>
</block>
