<extend name="Base:base" />

<block name="bd">
    <div class="c_content">
        <form action="__ACTION__" class="c_search" method="get">
            <label>按内容查询：</label>
            <input type="text" class="text-input" name="content" value="{$search}">
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
            <volist name="list" id="vo">
                <tr>
                    <td class="key">{$vo.id}</td>
                    <td>{$vo.content}</td>
                    <td class="key">{$vo.face_user_name}</td>
                    <td>
                    <volist name="vo.face_list" id="face_vo">
                    <img src="{$face_vo.url}" width="80" />&nbsp;
                    </volist>
                    </td>
                    <td class="key">{$vo.weibo_statistics}</td>
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
