<?php
namespace Common\Model;
use Think\Model;
class UserModel extends Model {
	// 自动校验
	protected $_validate = array(
		array('username', 'require', '用户名不能为空！'),
		array('username','','用户名已经存在！', 0, 'unique', 1),
		array('password', 'require', '密码不能为空！'),
	);

	// 自动完成
	protected $_auto = array(
		array('create_time', 'time', self::MODEL_INSERT, 'function'),
		array('last_login_time', 'time', self::MODEL_INSERT, 'function'),
		array('last_login_ip', 'get_client_ip', self::MODEL_INSERT, 'function')
	);

	// 根据用户名获取用户信息
	public function getByUsername ($username) {
		$data = $this->query("select * from __TABLE__ where username='$username'");
		return $data;
	}

	//获取叫username的管理员数据
	public function getManagerByUsername($username) {
		$data = $this->query("select * from __TABLE__ where username='$username' and ismanager=1");
		return $data;
	}
	
	/** 
	 * 获取会员列表（关联角色表）
	 * @param String $username 按姓名查询的条件
	 * @param int $firstRow 第一条数据序列(用户分页)
	 * @param int $listRows 每页显示的数据数量(用于分页) 
	 */
	public function getUserList ($username, $firstRow, $listRows) {
		$list = $this->getList($username, $firstRow, $listRows, 0);
		return $list;
	}

	/** 
	 * 获取管理员列表（关联角色表）
	 * @param String $username 按姓名查询的条件
	 * @param int $firstRow 第一条数据序列(用户分页)
	 * @param int $listRows 每页显示的数据数量(用于分页) 
	 */
	public function getManagerList($username, $firstRow, $listRows) {
		$list = $this->getList($username, $firstRow, $listRows, 1);
		return $list;
	}

	/** 
	 * 获取用户列表（关联角色表）
	 * @param String $username 按姓名查询的条件
	 * @param int $firstRow 第一条数据序列(用户分页)
	 * @param int $listRows 每页显示的数据数量(用于分页) 
	 * @param int $ismanager 是否是管理员字段
	 */
	public function getList($username, $firstRow, $listRows, $ismanager) {
		$username = $username ? $username : '';
		$firstRow = $firstRow ? $firstRow : 0;
		$listRows = $listRows ? $listRows : 1000;
		$Role = M('Role');
		$list = $this->query("select A.*,B.role_name from __TABLE__ A left join " . $Role->getTableName() . " B on A.role_id=B.id where A.username like '%" . $username . "%' and A.ismanager=" . $ismanager . " order by A.id limit $firstRow,$listRows");
		// var_dump($this->getLastSql());
		return $list;
	}
}