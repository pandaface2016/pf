<?php
namespace Admin\Model;
use Think\Model;
class FaceModel extends Model {
    // 自动校验
    protected $_validate = array(
        array('description', 'require', '描述不能为空'),
        array('url', 'require', '图片地址不能为空')
    );

    // 自动完成
    protected $_auto = array(
        array('create_time', 'time', self::MODEL_INSERT, 'function'),
        array('create_manager_id', 'getIdOnSession', self::MODEL_INSERT, 'function'),
        array('update_manager_id', 'getIdOnSession', self::MODEL_BOTH, 'function'),
        array('weixin_session_statistics', 0),
        array('weixin_timeline_statistics', 0),
        array('weibo_statistics', 0)
    );

    
}