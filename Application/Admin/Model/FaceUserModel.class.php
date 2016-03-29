<?php
namespace Admin\Model;
use Think\Model;

class FaceUserModel extends Model {
	// 自动校验
	protected $_validate = array(
		array('name', 'require', '名称不能为空'),
		array('avatar', 'require', '头像地址不能为空')
	);

	// 自动完成
	protected $_auto = array(
		
	);

}