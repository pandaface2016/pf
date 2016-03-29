<?php
namespace Admin\Controller;

class FaceController extends CommonController {
    // 角色信息编辑列表
    public function modify () {
        $search = $_GET['descriptin'];
        $map['descriptin'] = array('like', '%' . $search . '%');
        $Face = M('Face');
        $count = $Face->where($map)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, C('PAGESIZE'));// 实例化分页类 传入总记录数和每页显示的记录数
        $pageshow = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Face->where($map)->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();

        $FaceTagModel = D('FaceTag');
        for($i = 0; $i < count($list); $i++) {
            $list[$i]['tagsName'] = $FaceTagModel->getTagsByIds($list[$i]['tags']);
        }
        // var_dump($Face->getLastSql());

        $this->assign('tagsList', $tagsList);
        $this->assign('search', $search);
        $this->assign('list', $list);
        $this->assign('pageshow', $pageshow);
        $this->display();
    }

    // 编辑表单页
    public function modifyDo () {
        if($_POST) {
            $data = $_POST;
            $tags = $data['tag'];
            $FaceTagModel = D('FaceTag');
            $ids = $FaceTagModel->batchAdd($tags);
            $data['tags'] = join(',', $ids);
            $Face = D('Face');
            if($data = $Face->create($data)) {
                if($Face->save($data)) {
                    $this->returnSuccess();
                } else {
                    $this->asycReturn(0, $Face->getError());
                }
            } else {
                $this->asycReturn(0, $Face->getError());
            }
        } else {
            $id = $_GET['id'];
            $Face = M('Face');
            $data = $Face->where('id='.$id)->find();
            $this->assign('data', $data);

            $FaceTagModel = D('FaceTag');
            $tags = $FaceTagModel->getTagsByIds($data['tags']);
            $this->assign('tags', $tags);
            // var_dump($tags);
            
            $this->display();
        }
    }

    // 节点设置新建页
    public function add () {
        if($_POST) {
            $data = $_POST;
            $tags = $data['tag'];
            $FaceTagModel = D('FaceTag');
            $ids = $FaceTagModel->batchAdd($tags);
            $data['tags'] = join(',', $ids);
            $Face = D('Face');
            if($data = $Face->create($data)) {
                if($Face->add($data)) {
                    $this->returnSuccess();
                } else {
                    $this->asycReturn(0, $Face->getError());
                }
            } else {
                $this->asycReturn(0, $Face->getError());
            }

        } else {
            $this->display();
        }
    }
}