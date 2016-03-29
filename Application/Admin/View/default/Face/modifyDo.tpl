<extend name="Base:base" />

<block name="bd">
	<form id="J_form" action="javascript:C.submitForm({});" method="post">
		<table class="c_form">
			<tr>
				<th>id：</th>
				<td><input type="text" class="text-input" name="id" value="{$data.id}" readonly></td>
			</tr>
			<tr>
                <th>表情描述：</th>
                <td>
                    <input type="text" name="description" class="text-input w500" value="{$data.description}">
                </td>
            </tr>
            <tr>
                <th>图片地址：</th>
                <td>
                    <input type="text" name="url" class="text-input w500" value="{$data.url}">
                    <br/>
                    <img width="120" height="120" src="{$data.url}"/>
                </td>
            </tr>
            <tr>
                <th>gif？：</th>
                <td>
                    <label class="radio" for="gif1">
                        <input type="radio" id="gif1" name="gif" value="1" <eq name="data.gif" value="1">checked</eq>>
                        是
                    </label>
                    <label class="radio" for="gif0">
                        <input type="radio" id="gif0" name="gif" value="0" <eq name="data.gif" value="0">checked</eq>>
                        否
                    </label>
                </td>
            </tr>
            <tr>
                <th>标签：</th>
                <td>
                    <for start="0" end="10" name="key">
                    {$key+1}:<input type="text" name="tag[]" class="text-input w100" value="{$tags[$key].name}">
                    <eq name="key" value="4">
                    <br/>
                    <br/>
                    </eq>
                    </for>
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

<block name="foot_js">
	<script>
	$('input[name=ismanager]').click(function() {
		if(this.value == 0) {
			$('#J_roleIdTr').hide();
		} else {
			$('#J_roleIdTr').show();
		}
	});
	</script>
</block>