<?php
namespace Admin\Controller;
// use Admin\Controller;
class NodeController extends CommonController {
	// 节点设置编辑页
	public function modifyDo () {
		if($_POST) {
			$Node = D('Node');
			if($Node->create()) {
				if($Node->save()) {
					$this->returnSuccess();
				} else {
					$this->asycReturn(0, $Node->getError());
				}
			} else {
				$this->asycReturn(0, $Node->getError());
			}
		} else {
			$nid = $_GET['nid'];
			$Node = M('Node');
			$data = $Node->where('id='.$nid)->select();
			$this->assign('data', $data[0]);
			$this->display();
		}
	}

	// 节点设置新建页
	public function add () {
		if($_POST) {
			$Node = D('Node');
			if($Node->create()) {
				if($Node->add()) {
					// var_dump($re);
					$this->returnSuccess();
				} else {
					$this->asycReturn(0, $Node->getError());
				}
			} else {
				$this->asycReturn(0, $Node->getError());
			}
		} else {
			$pid = $_GET['nid'];

			$this->assign('pid', $pid);
			$this->display();
		}
	}
}	