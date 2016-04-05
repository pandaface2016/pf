<?php
namespace Admin\Model;
use Think\Model;
class DiscoverModel extends Model {
    // 自动校验
    protected $_validate = array(
        array('content', 'require', '内容不能为空'),
        array('face_id', 'require', '表情图不能为空')
    );

    // 自动完成
    protected $_auto = array(
        array('create_time', 'time', self::MODEL_INSERT, 'function'),
        array('create_manager_id', 'getIdOnSession', self::MODEL_INSERT, 'function'),
        array('update_manager_id', 'getIdOnSession', self::MODEL_BOTH, 'function'),
        array('weibo_statistics', 0)
    );

    // 获取完整的单条数据，包含表情用户信息、表情图信息
    function getFullData($id) {
        $data = $this->find($id);
        // var_dump($data);
        // 获取表情图
        if (!empty($data['face_id'])) {
            $FaceModel = D('Face');
            $faceMap['id'] = array('in', $data['face_id']);
            $FaceList = $FaceModel->where($faceMap)->field('id,url')->select();
            $data['face_list'] = $FaceList;
        }
        return $data;
    }

    // 获取完整的列表数据,每条数据包含表情用户信息、表情图信息
    function getFullList($search, $firstRow, $listRows) {
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $list = $Model->query("SELECT a.*,b.name as face_user_name,b.avatar,b.signature FROM __DISCOVER__ as a LEFT JOIN __FACE_USER__ as b ON a.face_user_id = b.id WHERE `status` = 1 AND `content` LIKE '%$search%' ORDER BY id desc LIMIT $firstRow, $listRows ");

        // 获取表情图
        $FaceModel = D('Face');
        for($i = 0; $i < count($list); $i++) {
            // var_dump($list[$i]);
            if (!empty($list[$i]['face_id'])) {
                $faceMap['id'] = array('in', $list[$i]['face_id']);
                $FaceList = $FaceModel->where($faceMap)->field('url, gif')->select();
                $list[$i]['face_list'] = $FaceList;
            }
        }

        return $list;
    }
}