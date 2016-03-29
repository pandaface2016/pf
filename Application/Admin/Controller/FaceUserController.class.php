<?php
namespace Admin\Controller;

class FaceUserController extends CommonController {
	// 角色信息编辑列表
	public function modify () {
		$search = $_GET['name'] ? $_GET['name'] : '';
		$map['name'] = array('like', '%' . $search . '%');
		$FaceUser = D('FaceUser');
		$count = $FaceUser->where($map)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count, C('PAGESIZE'));// 实例化分页类 传入总记录数和每页显示的记录数
		$pageshow = $Page->show();// 分页显示输出
		$list = $FaceUser->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();

		$this->assign('search', $search);
		$this->assign('list', $list);
		$this->assign('pageshow', $pageshow);
		$this->display();
	}

	// 节点设置编辑页
	public function modifyDo () {
		if($_POST) {
			$FaceUser = D('FaceUser');
			if($FaceUser->create()) {
				if($FaceUser->save()) {
					$this->returnSuccess();
				} else {
					$this->asycReturn(0, $FaceUser->getError());
				}
			} else {
				$this->asycReturn(0, $FaceUser->getError());
			}
		} else {
			$id = $_GET['id'];
			$FaceUser = M('FaceUser');
			$data = $FaceUser->where('id='.$id)->select();

			$this->assign('data', $data[0]);
			$this->display();
		}
	}

	// 节点设置新建页
	public function add () {
		if($_POST) {
			$FaceUser = D('FaceUser');
			if($FaceUser->create()) {
				if($FaceUser->add()) {
					$this->returnSuccess();
				} else {
					$this->asycReturn(0, $FaceUser->getError());
				}
			} else {
				$this->asycReturn(0, $FaceUser->getError());
			}
		} else {
			$this->display();
		}
	}
}	