<?php
namespace Admin\Controller;
// use Admin\Controller;
class RoleSetController extends CommonController {
	// 角色设置编辑浏览页
	public function modify () {
		$search = $_GET['role_name'] ? $_GET['role_name'] : '';
		$map['role_name'] = array('like', '%' . $search . '%');
		$Role = M('Role');
		$count = $Role->where($map)->count();// 查询满足要求的总记录数
		import('ORG.Util.Page');// 导入分页类
		$Page = new \Think\Page($count, C('PAGESIZE'));// 实例化分页类 传入总记录数和每页显示的记录数
		$pageshow = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $Role->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();

		$this->assign('search', $search);
		$this->assign('list', $list);
		$this->assign('pageshow', $pageshow);
		$this->display();
	}

	// 权限设置页面
	public function modifyDo () {
		if($_POST) {
			$rid = $_POST['role_id'];
			$RoleSet = M('RoleSet');
			// 先删除该角色所有权限数据
			$RoleSet->where('role_id='.$rid)->delete();
			// 获取所有的节点-功能键值对,并批量入库
			$nm = $_POST['nm'];
			$data = array();
			if(count($nm) > 0) {
				for($i = 0; $i < count($nm); $i++) {
					$value = explode('-', $nm[$i]);
					$data[$i]['role_id'] = $rid;
					$data[$i]['method_set_id'] = $value[1];
					$data[$i]['node_id'] = $value[0];
				}
				if($RoleSet->addAll($data)) {
					$this->returnSuccess();
				} else {
					$this->asycReturn(0, $RoleSet->getError());
				}
			} else {
				$this->returnSuccess();
			}
		} else {
			$rid = $_GET['id'];
			$hash = array();
			$str = "";
			$RoleSet = M('RoleSet');
			// 获取该角色拥有的功能的id列表
			$list = $RoleSet->where('role_id='.$rid)->select();
			for($i = 0; $i < count($list); $i++) {
				$hash[$list[$i]['method_set_id']] = 1;
			}
			$str = $this->getTree(1, $rid, 0, $hash, $str);

			$this->assign('str', $str);
			// $this->assign('jsmc',$listmodel[0]['jsmc']);
			$this->assign('rid', $rid);
			$this->display();
		}
	}

	/**
	 * 递归方法获得无限极树->用于角色设置
	 * @param int $nid 节点id（查找该几点所有子节点）
	 * @param int $rid 角色id
	 * @param int $deep 递归层级深度（用于计算递进空格数量）
	 * @param array $hash 哈希表，存储该角色拥有的所有功能id
	 * @param String $str 拼接而成的html片段（传说中该函数的返回值）
	 */
	public function getTree($nid, $rid, $deep, $hash, $str) {
		$Node = M('Node');
		if($nid > 1) {
			$nodeData = $Node->where('id='.$nid)->select();
			$str .= "<tr><td>";
			for($p = 0; $p < $deep-1; $p++) {
				$str .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			} 
			$str .= $nodeData[0]['node_name'] . "</td><td>";
			// 获取该节点拥有的所有功能
			if($nodeData[0]['has_method'] == 1) {
				$MethodSet = M('MethodSet');
				$msList = $MethodSet->where('node_id='.$nid)->order('sort')->select();
				for($j = 0; $j < count($msList); $j++) {
					$value = $msList[$j]['node_id'] . '-' . $msList[$j]['id'];
					// 如果哈希表中已经录入证明，该权限有，则checkbox应该是选中状态
					if($hash[$msList[$j]['id']]) {
						$str .= "<input name='nm[]' type='checkbox' value='" . $value . "' checked>";
					} else {
						$str .= "<input name='nm[]' type='checkbox' value='" . $value . "'>";
					}
					$str .= '<span>' . $msList[$j]['method_name'] . '</span>';
				}
			}
			$str .= "</td></tr>";
		}
		// 获取该节点的所有子节点
		$nodeSons = $Node->where('pid='.$nid)->order('sort')->select();// 循环遍历所有子节点，调用自身函数实现递归
		$deep++;
		for ($i = 0; $i < count($nodeSons); $i++) {
			$str = $this->getTree($nodeSons[$i]['id'], $rid, $deep, $hash, $str);
		}
		return $str;
	}
}