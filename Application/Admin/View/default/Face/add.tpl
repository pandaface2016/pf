<extend name="Base:base" />

<block name="bd">
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
</block>