<?php
namespace Admin\Controller;
// use Admin\Controller;
class RoleController extends CommonController {
	// 角色信息编辑列表
	public function modify () {
		$search = $_GET['role_name'] ? $_GET['role_name'] : '';
		$map['role_name'] = array('like', '%' . $search . '%');
		$Role = M('Role');
		$count = $Role->where($map)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count, C('PAGESIZE'));// 实例化分页类 传入总记录数和每页显示的记录数
		$pageshow = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $Role->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();

		$this->assign('search', $search);
		$this->assign('list', $list);
		$this->assign('pageshow', $pageshow);
		$this->display();
	}

	// 编辑表单页
	public function modifyDo () {
		if($_POST) {
			$Role = D('Role');
			if($Role->create()) {
				if($Role->save()) {
					$this->returnSuccess();
				} else {
					$this->asycReturn(0, $Role->getError());
				}
			} else {
				$this->asycReturn(0, $Role->getError());
			}
		} else {
			$id = $_GET['id'];
			$Role = M('Role');
			$data = $Role->where('id='.$id)->select();

			$this->assign('data', $data[0]);
			$this->display();
		}
	}

	// 节点设置新建页
	public function add () {
		if($_POST) {
			$Role = D('Role');
			if($Role->create()) {
				if($Role->add()) {
					$this->returnSuccess();
				} else {
					$this->asycReturn(0, $Role->getError());
				}
			} else {
				$this->asycReturn(0, $Role->getError());
			}
		} else {
			$this->display();
		}
	}
}