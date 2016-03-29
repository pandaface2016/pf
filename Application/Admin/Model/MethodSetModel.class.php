<?php
/**
 * 功能设置模型类
 * @category    
 * @package  
 * @subpackage  
 * @author   caoyu<261179233@qq.com>
 */
namespace Admin\Model;
use Think\Model;
class MethodSetModel extends Model {
	// 自动校验
	protected $_validate = array(
		array('method_name', 'require', '功能名称不能为空'),
		array('link', 'require', '链接地址不能为空'),
		array('identifier', 'require', '唯一标识不能为空'),
		array('identifier', '', '唯一标识重复，请修改', 0, 'unique'),
		array('sort', 'number', '排序请填写数字'),
	);

	// 自动完成
	protected $_auto = array(
		array('status', 1)
	);

}