<?php
namespace Admin\Model;
use Think\Model;
class RoleSetModel extends Model {
	// 自动校验
	protected $_validate = array(

	);

	// 自动完成
	protected $_auto = array(

	);

	// 获取所有该角色拥有的功能id（启用状态的）
	public function getAllMethodsByRoleId ($rid) {
		$MethodSet = M('MethodSet');
		$table = $MethodSet->getTableName();
		$data = $this->query("select A.method_set_id,B.identifier from __TABLE__ A," . $table . " B where A.role_id=" . $rid . " and A.method_set_id=B.id and B.enable=1");
		return $data;
	}

	// 获取所有该角色拥有权限的末端节点
	public function getEndNodesByRoleId ($rid) {
		$MethodSet = M('MethodSet');
		$table = $MethodSet->getTableName();
		$data = $this->query("select A.node_id from __TABLE__ A," . $table . " B where A.role_id=" . $rid . " and A.method_set_id=B.id and B.enable=1");
		return $data;
	} 
}