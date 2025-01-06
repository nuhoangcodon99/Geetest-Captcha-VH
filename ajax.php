<?php 
/**
 * User Login
 */
require $_SERVER['DOCUMENT_ROOT']. '/captcha/geetest.php';

use CaptchaValidator\Geetest;

if (isset($_POST['action']) && $_POST['action'] === 'user-login') {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $postCaptcha = json_decode($initCaptcha->verify($_POST['lot_number'], $_POST['captcha_output'], $_POST['pass_token'], $_POST['gen_time']), true);
    if (isset($postCaptcha) && $postCaptcha['status'] !== 'success') {
    exit(json_encode([
        "status" => "error",
        "msg" => Geetest::Error($postCaptcha['reason'])

    ]));
    } else if ($user === 'admin' && $pass == 123456) {
        exit(json_encode([
            "status" => "success",
            "msg" => "Đăng nhập thành công."
        ]));
    } else {
        exit(json_encode([
            "status" => "error",
            "msg" => "Thông tin đăng nhập không chính xác!"
        ])); 
    }
}
