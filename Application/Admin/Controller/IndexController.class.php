<?php
namespace Admin\Controller;
// use Admin\Controller;
// 本类由系统自动生成，仅供测试用途
class IndexController extends CommonController {
	// 后台首页大框架页
    public function index () {
		$this->display();
    }

    // 后台header处页面
    public function header () {
        // $this->returnSuccess();
    	$Node = D('Node');
    	$this->assign('username', $_SESSION['NAME']);
    	$this->display();
    }

    // 后台左侧列表页面
    public function left () {
       
        $arrayhash = array();
        $nodeList = array();
        $RoleSet = D('RoleSet');
        $Node = M('Node');

        // 超级管理员账号
        if($_SESSION['ROLE'] == 0) {
            $nodeList = $Node->order('sort')->select();
        } else {
            // 获取去重之后的拥有权限的末端节点id序列
            $roleid = $_SESSION['ROLE'];
            $nodes = $RoleSet->getEndNodesByRoleId($roleid);

            // 通过末端节点向树根遍历，获取整个权限树
            for( $i = 0; $i < count($nodes); $i++) {
                $nodeId = $nodes[$i]['node_id'];
                while($nodeId >= 1) {
                    if(!$arrayhash[$nodeId]) {
                        // 通过节点id获取节点数据
                        $map['id'] = array('eq', $nodeId);
                        // $map['enable'] = array('eq', '1');
                        $nodeData = $Node->where($map)->select();
                        array_push($nodeList, $nodeData[0]);
                        $arrayhash[$nodeId] = 1;
                        $nodeId = $nodeData[0]['pid'];
                    } else {
                        break;
                    }
                }
            }
        }
        // var_dump($nodeList);
        $this->assign('nodes', $nodeList);
        $this->display();
    }

    // 后台右侧对应节点的功能列表页面
    public function method () {
        $nid = $_GET['nid'];
        $MethodSet = M('MethodSet');
        // 获取功能列表
        $list = $MethodSet->where('node_id='.$nid)->order('sort')->select();

        $this->assign('list', $list);
        $this->display();
    }

    // ajax通过pid获取子节点
    function ajaxGetByPid($pid) {
        $Node = D('Node');
        $data = $Node->getByPid($pid);

        $this->returnSuccess($data);
    }
}