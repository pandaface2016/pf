<?php
namespace Admin\Controller;
// use Admin\Controller;
class MethodSetController extends CommonController {
	// 功能设置编辑浏览页
	public function modify () {
		$nid = $_GET['nid'];
		$method_name = $_GET['method_name'] ? $_GET['method_name'] : '';
		$MethodSet = M('MethodSet');
		$list = $MethodSet->getByNodeId($nid, $method_name);
		
		$count = count($list); // 查询满足要求的总记录数
		import('ORG.Util.Page'); // 导入分页类
		$Page = new \Think\Page($count, C('PAGESIZE'));// 实例化分页类 传入总记录数和每页显示的记录数
		$pageshow = $Page->show();// 分页显示输出
		$map['node_id'] = array('eq', $nid);
		$map['method_name'] = array('like', '%'.$method_name.'%');
		$list = $MethodSet->where($map)->order('sort')->limit($Page->firstRow.','.$Page->listRows)->select();

		$this->assign('nid', $nid);
		$this->assign('search', $method_name);
		$this->assign('list', $list);
		$this->assign('pageshow', $pageshow);// 赋值分页输出
		$this->display();
	}

	// 功能设置编辑浏览页
	public function modifyDo () {
		if($_POST) {
			$MethodSet = D('MethodSet');
			if($MethodSet->create()) {
				if($MethodSet->save()) {
					$this->returnSuccess();
				} else {
					$this->asycReturn(0, $MethodSet->getError());
				}
			} else {
				$this->asycReturn(0, $MethodSet->getError());
			}
		} else {
			$id = $_GET['id'];
			$MethodSet = M('MethodSet');
			$data = $MethodSet->where('id='.$id)->order('sort')->select();

			$this->assign('data', $data[0]);
			$this->display();
		}
	}

	// 功能设置新建页
	public function add () {
		if($_POST) {
			$nid = $_POST['node_id'];
			$MethodSet = D('MethodSet');
			if($MethodSet->create()) {
				if($MethodSet->add()) {
				// if(1){
					$Node = M('Node');
					$NodeData = $Node->where('id='.$nid)->select();
					$NodeData[0]['has_method'] = '1';
					$Node->save($NodeData[0]);
					$this->returnSuccess();
				} else {
					$this->asycReturn(0, $MethodSet->getError());
				}
			} else {
				$this->asycReturn(0, $MethodSet->getError());
			}
		} else {
			$nid = $_GET['nid'];
			// 列出当前已经添加的功能
			$MethodSet = M('MethodSet');
			$list = $MethodSet->where('node_id='.$nid)->order('sort')->select();

			$this->assign('nid', $nid);
			$this->assign('list', $list);
			$this->display();
		}
	}
}