// JavaScript Document
var ADMIN = window.ADMIN || {};
ADMIN.Index = (function () {
	function _resizeFun () {
		$('.J_mainWrap').height($(window).height() - $('.J_headerWrap').outerHeight());
		$('.J_rightWrap').width($(window).width() - $('.J_leftWrap').outerWidth());
		$('.J_contentWrap').height($('.J_rightWrap').height() - $('.J_methodWrap').outerHeight());
	}
	return {
		init : function () {
			$(document).ready(function () {
				//初始化后台框架尺寸自动化脚本
				_resizeFun();
				$(window).resize(_resizeFun);
			});
		}
	}
})();