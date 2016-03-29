<?php
namespace Admin\Controller;

class DiscoverController extends CommonController {
    // 处理form表单提交的数据
    public function handelFormData($post) {
        $data = $_POST;
        $faceIds = array_filter($data['face']);
        $data['face_id'] = join(',', $faceIds);

        return $data;
    }

    // 角色信息编辑列表
    public function modify () {
        $search = $_GET['content'];
        $map['content'] = array('like', '%' . $search . '%');
        $Discover = D('Discover');
        $count = $Discover->where($map)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, C('PAGESIZE'));// 实例化分页类 传入总记录数和每页显示的记录数
        $pageshow = $Page->show();// 分页显示输出
        $list = $Discover->getFullList($search, $Page);

        $this->assign('search', $search);
        $this->assign('list', $list);
        $this->assign('pageshow', $pageshow);
        $this->display();
    }

    // 编辑表单页
    public function modifyDo () {
        if($_POST) {
            $data = $this->handelFormData($_POST);
            $Face = D('Face');
            $Discover = D('Discover');
            if($data = $Discover->create($data)) {
                if($Discover->save($data)) {
                    $this->returnSuccess();
                } else {
                    $this->asycReturn(0, $Discover->getError());
                }
            } else {
                $this->asycReturn(0, $Discover->getError());
            }
        } else {
            $id = $_GET['id'];
            $Discover = D('Discover');
            $data = $Discover->getFullData($id);
            $this->assign('data', $data);
            // var_dump($data);

            // 获取表情用户
            $FaceUserModel = M('FaceUser');
            $FaceUserList = $FaceUserModel->select();
            $this->assign('FaceUserList', $FaceUserList);
            
            $this->display();
        }
    }

    // 节点设置新建页
    public function add () {
        if($_POST) {
            $data = $this->handelFormData($_POST);
            $Discover = D('Discover');
            if($data = $Discover->create($data)) {
                if($Discover->add($data)) {
                    $this->returnSuccess();
                } else {
                    $this->asycReturn(0, $Discover->getError());
                }
            } else {
                $this->asycReturn(0, $Discover->getError());
            }

        } else {
            // 获取表情用户
            $FaceUserModel = M('FaceUser');
            $FaceUserList = $FaceUserModel->select();

            $this->assign('FaceUserList', $FaceUserList);
            $this->display();
        }
    }
}