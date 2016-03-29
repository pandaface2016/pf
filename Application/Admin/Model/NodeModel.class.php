<?php
namespace Admin\Model;
use Think\Model;
class NodeModel extends Model {
	// 自动校验
	protected $_validate = array(
		array('pid', 'require', '父节点ID不能为空'),
		array('pid', 'number', '父节点ID应该为数字'),
		array('node_name', 'require', '节点名称不能为空'),
		array('sort', 'number', '排序请填写数字')
	);

	// 自动完成
	protected $_auto = array(
		array('has_method', 0),
		array('status', 1)
	);

}