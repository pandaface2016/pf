<?php
namespace Admin\Controller;

class FaceTagController extends CommonController {
    // 角色信息编辑列表
    public function modify () {
        $search = $_GET['text'];
        $map['text'] = array('like', '%' . $search . '%');
        $FaceTag = M('FaceTag');
        $count = $FaceTag->where($map)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, C('PAGESIZE'));// 实例化分页类 传入总记录数和每页显示的记录数
        $pageshow = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $FaceTag->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('search', $search);
        $this->assign('list', $list);
        $this->assign('pageshow', $pageshow);
        $this->display();
    }

    // 编辑表单页
    public function modifyDo () {
        if($_POST) {
            $FaceTag = D('FaceTag');
            if($FaceTag->create()) {
                if($FaceTag->save()) {
                    $this->returnSuccess();
                } else {
                    $this->asycReturn(0, $FaceTag->getError());
                }
            } else {
                $this->asycReturn(0, $FaceTag->getError());
            }
        } else {
            $id = $_GET['id'];
            $FaceTag = M('FaceTag');
            $data = $FaceTag->where('id='.$id)->select();

            $this->assign('data', $data[0]);
            $this->display();
        }
    }

    // 节点设置新建页
    public function add () {
        if($_POST) {
            $FaceTag = D('FaceTag'); 
            if($FaceTag->create()) {
                if($FaceTag->add()) {
                    $this->returnSuccess();
                } else {
                    $this->asycReturn(0, $FaceTag->getError());
                }
            } else {
                $this->asycReturn(0, $FaceTag->getError());
            }
            
        } else {
            $this->display();
        }
    }
}