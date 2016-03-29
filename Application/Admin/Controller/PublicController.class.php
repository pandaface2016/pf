<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
	public function login () {
		if($_POST) {
			$formdata             = array();
			$formdata['username'] = $_POST['username'];
			$formdata['password'] = $_POST['password'];
			$formdata['verify']   = $_POST['verify'];
			$User                 = D('User');
			
			$model = new \Think\Model();
			// 用户名空判断
			if(!$model->regex($formdata['username'], 'require')) {
				$this->ajaxReturn(array(
					'status' => 0,
					'info' => '用户名不能为空！'
				));
			}

			// 密码空判断
			if(!$model->regex($formdata['password'], 'require')) {
				$this->ajaxReturn(array(
					'status' => 0,
					'info' => '密码不能为空！'
				));
			}

			// 验证码空判断
			if(!$model->regex($formdata['verify'], 'require')) {
				$this->ajaxReturn(array(
					'status' => 0,
					'info' => ' 验证码不能为空！'
				));
			}
			// 验证码正确性校验
			if(!checkVerify($formdata['verify'])) {
				$this->ajaxReturn(array(
					'status' => 0,
					'info' => ' 验证码错误！'
				));
			}

			//获取叫username的管理员数据
			$userData = $User->getManagerByUsername($formdata['username']);
			// 超级管理员权限校验，配置中的账号和role_id=0的账号
			if($formdata['username'].'_'.$formdata['password'] == C('SUPERADMIN')) {
				$_SESSION[C("USER_AUTH_KEY")] = 0;
            	$_SESSION['NAME'] = $formdata['username'];
            	$_SESSION['ROLE'] = 0;
            	$this->ajaxReturn(array(
            		'status' => 1,
            		'info' => '登陆成功，即将跳转'
            	));
			}

			// 判断账号是否存在
			if(count($userData) == 0) {
				$this->ajaxReturn(array(
					'status' => 0,
					'info' => '用户名' . $formdata['username'] . '不存在！'
				));
			} else {
				$userData = $userData[0];
			}

			// 判断密码正确性
			if(md5($formdata['password'] . $userData['secretkey']) !== $userData['password']) {
				$this->ajaxReturn(array(
					'status' => 0,
					'info' => '密码错误！'
				));
			}

			//判断角色是否启用
			$Role = M('Role');
			$roleData = $Role->where('id='.$userData['role_id'])->select();
			if($roleData[0]['enable'] === '0') {
				$this->ajaxReturn(array(
					'status' => 0,
					'info' => '您所在的角色组没有访问权限！'
				));
			}

			//判断账号是否启用
			if($userData['status'] === '0') {
				$this->ajaxReturn(array(
					'status' => 0,
					'info' => '您的账号没有访问权限！'
				));
			}
			// (count($userData) == 1 && $userData['role_id'] == 0)

			// 用户数据更新操作
			$userData['last_login_time'] = time();
			$userData['last_login_ip'] = get_client_ip();

			if($User->save($userData)) {
				// 证明提交数据正确，配置相关session
				$_SESSION[C("USER_AUTH_KEY")] = $userData['id'];
            	$_SESSION['NAME'] = $userData['username'];
            	$_SESSION['ROLE'] = $userData['role_id'];
            	$_SESSION['TIME'] = time();

            	// 读取所有权限节点
            	$RoleSet = D('RoleSet');
            	$MethodList = $RoleSet->getAllMethodsByRoleId($userData['role_id']);
            	$AccessList = '';
            	for($i = 0; $i < count($MethodList); $i++) {
            		$AccessList .= $MethodList[$i]['identifier'] . ',';
            	}
            	$_SESSION['ACCESSLIST'] = explode(',', strtoupper($AccessList));

				$this->ajaxReturn(array(
					'status' => 1,
					'info' => '登陆成功,即将跳转'
				));
			} else {
				$this->ajaxReturn(array(
					'status' => 0,
					'info'   => $User->getError()
				));
			}

		} else {
			if(!isset($_SESSION[C('USER_AUTH_KEY')])) {
	            $this->display();
	        } else {
	            $this->redirect('Index/index');
	        }
		}
	}

	// 退出方法
	public function loginout() {
		if(isset($_SESSION[C('USER_AUTH_KEY')])) {
			unset($_SESSION[C('USER_AUTH_KEY')]);
			unset($_SESSION['METHODHASH']);
			// $this->redirect(C('USER_AUTH_GATEWAY'));
		}
		$this->assign('USER_AUTH_GATEWAY', C('USER_AUTH_GATEWAY'));
		$this->display();
	}

	public function verify () {
		$config =    array(    
			'length'    =>    4,     // 验证码位数 
			'useCurve'  => false,
			'fontSize'  => 35
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}

	// 功能设置和节点设置的公用入口页
	public function nodeSetEntry () {
		$module = $_GET['module'];
		$action = $_GET['action'];

		$this->assign('module', $module);
		$this->assign('action', $action);
		$this->display();
	}

	// 供功能设置和模块管理调用的左侧菜单树
	public function nodeSetLeft () {
		$module = $_GET['module'];
		$action = $_GET['action'];

		$Node = M('Node');
		$list = $Node->query("select * from __TABLE__ order by sort");
		
		for($i = 0; $i < count($list); $i++) {
			$list[$i]['url'] = $module . '/' . $action . "?nid=" . $list[$i]['id'];
		}
		$this->assign('list', $list);
		$this->display();
	}
}