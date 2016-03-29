<?php
namespace Admin\Model;
use Think\Model;
class RoleModel extends Model {
	// 自动校验
	protected $_validate = array(
		array('role_name', 'require', '角色名称不能为空')
	);

	// 自动完成
	protected $_auto = array(
		
	);
}