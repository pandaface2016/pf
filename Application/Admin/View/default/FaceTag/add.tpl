<extend name="Base:base" />

<block name="bd">
    <form id="J_form" action="javascript:C.submitForm({});" method="post">
        <table class="c_form">
            <tr>
                <th>名称：</th>
                <td>
                    <input type="text" name="name" class="text-input w500" value="">
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
</block>