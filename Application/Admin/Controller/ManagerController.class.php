<?php
namespace Admin\Controller;
// use Admin\Controller;
class ManagerController extends CommonController {
	// 角色信息编辑列表
	public function modify () {
		$search = $_GET['username'] ? $_GET['username'] : '';
		$map['username'] = array('like', '%' . $search . '%');
		$User = D('User');
		$count = $User->where($map)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count, C('PAGESIZE'));// 实例化分页类 传入总记录数和每页显示的记录数
		$pageshow = $Page->show();// 分页显示输出
		// $list = $User->getUsersInfo($search, $Page->firstRow, $Page->listRows);
		$list = $User->getManagerList($search, $Page->firstRow, $Page->listRows);

		$this->assign('search', $search);
		$this->assign('list', $list);
		$this->assign('pageshow', $pageshow);
		$this->display();
	}

	// 编辑表单页
	public function modifyDo () {
		if($_POST) {
			$_post = $_POST;
			$_password = $_post['_password'];
			$User = D('User');
			if($_post = $User->create($_post)) {
				$info = $User->where('id='.$_post['id'])->select();
				if($_password != '') {
					$_post['password'] = md5($_password.$info[0]['secretkey']);
				} else {
					$_post['password'] = $info[0]['password'];
				}
				// var_dump($_post);
				if($User->save($_post)) {
					$this->returnSuccess();
				} else {
					$this->asycReturn(0, $User->getError(), 'save error');
				}
			} else {
				$this->asycReturn(0, $User->getError(), 'create error');
			}
		} else {
			$id = $_GET['id'];
			$User = M('User');
			$data = $User->where('id='.$id)->select();
			$Role = M('Role');
			$RoleList = $Role->select();

			$this->assign('data', $data[0]);
			$this->assign('RoleList', $RoleList);
			$this->display();
		}
	}

	// 节点设置新建页
	public function add () {
		if($_POST) {
			$_post = $_POST;
			$User = D('Common/User');
			if($_post['password'] == '') {
				$this->asycReturn(0, '密码不能为空');
			}
			if($_post = $User->create($_post)) {
				// var_dump($_post);
				$_post['ismanager'] = 1; // 设定为管理员
				$_post['secretkey'] = getRandString(10);
				$_post['password'] = md5($_post['password'] . $_post['secretkey']);
				
				if($User->add($_post)) {
					$this->returnSuccess();
				} else {
					$this->asycReturn(0, $User->getError());
				}
			} else {
				$this->asycReturn(0, $User->getError());
			}
		} else {
			$Role = M('Role');
			$RoleList = $Role->select();
			
			$this->assign('RoleList', $RoleList);
			$this->display();
		}
	}
}