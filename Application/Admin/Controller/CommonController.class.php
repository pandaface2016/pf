<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	function _initialize () {
		// 检查认证识别号  
        if (!isset($_SESSION[C('USER_AUTH_KEY')])) {
    		// 跳转到认证网关
           	$this->redirect(C('USER_AUTH_GATEWAY'));
        } else if($_SESSION['ROLE'] != 0) {
        	// 权限验证
        	$controller = strtoupper(CONTROLLER_NAME);
        	$action = strtoupper(ACTION_NAME);
        	$notAutoController = explode(',', strtoupper(C('NOT_AUTH_MODULE')));
        	if(!in_array($controller, $notAutoController) && !in_array($controller.'_'.$action, $_SESSION['ACCESSLIST'])) {
        		$this->redirect(C('USER_AUTH_OUTWAY'));
        	}
        }
	}

	// 公用的验证码函数
	public function verify () {
		import('ORG.Util.Image');
		Image::buildImageVerify();
	}

    // 异步返回成功状态
    public function returnSuccess($status = 1, $info) {
        if(!isset($info)) {
            $info = L('_OPERATION_SUCCESS_');
        }
        $this->asycReturn($status, $info);
    }

    // 异步返回
    public function asycReturn($status, $info, $data) {
        $this->ajaxReturn(array(
            'status' => $status,
            'info' => $info,
            'data' => $data
        ));
    }

    // 后台用的分页配置
    public function Page($totalRows, $listRows) {

        $Page = new \Think\Page($totalRows, $listRows);
        $Page->setConfig('header', '<span class="rows">共 %TOTAL_ROW% 条记录/共 %TOTAL_PAGE% 页</span>');
        $Page->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        return $Page;
    }
	
}