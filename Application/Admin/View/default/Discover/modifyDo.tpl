<extend name="Base:base" />

<block name="bd">
	<form id="J_form" action="javascript:C.submitForm({});" method="post">
		<table class="c_form">
			<tr>
				<th>id：</th>
				<td><input type="text" class="text-input" name="id" value="{$data.id}" readonly></td>
			</tr>
			<tr>
                <th>表情用户：</th>
                <td>
                    <select name="face_user_id">
                        <foreach name="FaceUserList" item="vo">
                        <option value="{$vo.id}" <eq name="vo.id" value="$data.face_user_id">selected</eq>>{$vo.name}</option>
                        </foreach>
                    </select>
                </td>
            </tr>
            <tr>
                <th>内容：</th>
                <td>
                    <textarea name="content" rows="6" cols="50">{$data.content}</textarea>
                </td>
            </tr>
            <tr>
                <th>表情图：</th>
                <td>
                	<for start="0" end="9" name="key">
                    {$key+1}:<input type="text" name="face[]" class="text-input w100" value="{$data['face_list'][$key].id}"><img src="{$data['face_list'][$key].url}" height="80">
                    </for>
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
                        <input type="radio" id="status1" name="status" value="1" <eq name="data.status" value="1">checked</eq>>
                        启用
                    </label>
                    <label class="radio" for="status0">
                        <input type="radio" id="status0" name="status" value="0" <eq name="data.status" value="0">checked</eq>>
                        停用
                    </label>
                </td>
            </tr>
            <tr>
                <th></th>
                <td id="J_error" class="error"></td>
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
</block>