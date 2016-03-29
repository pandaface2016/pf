<?php
// 验证验证码
function checkVerify($verify_code) {
    $verify = new \Think\Verify();
    return $verify->check($verify_code);
}

// 获取seesion里的用户id
function getIdOnSession() {
    return $_SESSION[C("USER_AUTH_KEY")];
}

// 获取session里的用户名
function getNameOnSession () {
    return $_SESSION['NAME'];
}

// 获取随机字符串
function getRandString ($n) {
    $chars = 'abcdefghijklmnopqrstuvwxyz!@#$%^&*()_[{}}<>,.:';
    $data = '';
    for($i = 0; $i < $n; $i++) {
        $data .= $chars[ mt_rand(0, strlen($chars) - 1) ];  
    }
    return $data;
}