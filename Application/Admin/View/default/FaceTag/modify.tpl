<extend name="Base:base" />

<block name="bd">
    <div class="c_content">
        <form action="__ACTION__" class="c_search" method="get">
            <label>按标签名称查询：</label>
            <input type="text" class="text-input" name="text" value="{$search}">
            <input type="submit" class="submit" name="submit" value="查询">
        </form>
        <table class="c_list">
            <thead>
                <tr>
                    <td class="key">id</td>
                    <td class="key">名称</td>
                    <td class="key">点击量</td>
                    <td class="key">操作</td>
                </tr>
            </thead>
            <tbody>
            <foreach name="list" item="vo">
                <tr>
                    <td class="key">{$vo.id}</td>
                    <td class="key">{$vo.name}</td>
                    <td class="key">{$vo.click_statistics}</td>
                    <td class="key">
                        <a href="__URL__/modifyDo?id={$vo.id}">
                            <input type="button" class="btn" value="编辑">
                        </a>
                    </td>
                </tr>
            </foreach>
            </tbody>
        </table>
        <div class="clearfix">
            {$pageshow}
        </div>
    </div>
</block>
