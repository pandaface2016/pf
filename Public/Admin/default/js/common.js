//重载验证码
var C = (function () {
	var __ADMIN__ = '/Admin';
	// 刷新验证码方法
	function _refreshVerify () {
		var timenow = new Date().getTime();
		$('#verifyImg').prop('src', __ADMIN__ + '/Public/verify?t=' + timenow);
	}

	// 表单异步提交
	function _submitForm (obj) {
		var callback = obj.callback;
		var form = $('#J_form'),
			error = $('#J_error');

		$.post('', form.serialize(), function (data) {
			if(data.status === 0) {
				error.html(data.info);
				if($('#verifyImg')) {
					_refreshVerify();
				}
			} else if(data.status === 1) {
				error.html(data.info);
				if(callback) {
					callback();
				}
			}
		});
	}
	return {
		refreshVerify : _refreshVerify,
		submitForm    : _submitForm  
	}
})();


