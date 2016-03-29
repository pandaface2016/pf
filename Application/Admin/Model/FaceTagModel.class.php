<?php
namespace Admin\Model;
use Think\Model;
class FaceTagModel extends Model {
    
    // 自动校验
    protected $_validate = array(
        array('name', 'require', '名称不能为空', 0, 'unique')
    );

    // 自动完成
    protected $_auto = array(
        array('click_statistics', 0)
    );

    // 根据id获取tags
    function getTagsByIds($ids) {
        $map['id'] = array('in', $ids);
        $FaceTag = M('FaceTag');
        $datas = $FaceTag->where($map)->select();
        return $datas;
    }

    // 批量添加tag
    function batchAdd($names) {
        $FaceTag = D('FaceTag');
        $ids = [];
        // var_dump($names);
        for($i = 0; $i < count($names); $i++) {
            if (!empty($names[$i])) {
                $map['name'] = $names[$i];
                $data = $FaceTag->where($map)->find();
                if ($data) {
                    array_push($ids, $data['id']);
                } else {
                    $data = $FaceTag->create($map);
                    // var_dump($data);
                    if ($id = $FaceTag->add()) {
                        array_push($ids, $id);
                    }
                }
            }
        }
        return $ids;
    }
}