<!doctype html>
<html lang="vi-VN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo CAPTCHA GeetestV4 VH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="//cdn.thanhdieu.com/dialog/wstoast/ws.toast.css">
    <script src="//cdn.thanhdieu.com/dialog/wstoast/ws.toast.js"></script>
</head>
<body class="bg-gray-200">
    <div class="min-h-screen flex items-center justify-center w-full dark:bg-gray-950">
        <div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-8 py-10 min-w-80">
            <h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-200">Đăng Nhập</h1>
            <form class="user-login">
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Tài Khoản</label>
                    <input type="text" name="username" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="......" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Mật Khẩu</label>
                    <input type="password" name="password" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="......" required>
                </div>
                <div id="captcha" data-id="f3a50fc097a200b9260012e1e88d2dcd" class="mb-4"></div>
                <input type="hidden" name="action" value="user-login">
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Đăng Nhập</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="/gt4.js"></script>
    <script src="/gt4-vh.js"></script>
    <script>
    Wstoast.config({
        autoClose: !0,
        showClose: !0,
        html: !0
    });
    const id_gt = $('#captcha').data('id');
    function initCaptcha(callback) {
    initGeetest4({
        captchaId: id_gt,
        product: 'popup',
        riskType: 'slide'
    }, function(captcha) {
        captchaObj = captcha;
        captchaObj.appendTo("#captcha");
        if (callback) callback();
    });
}
if (typeof initGeetest4 !== 'undefined') {
    initCaptcha();
}
function GeetestParams() {
    if (captchaObj && typeof captchaObj.getValidate === 'function') {
        const result = captchaObj.getValidate();
        return {
            lot_number: result.lot_number,
            captcha_output: result.captcha_output,
            pass_token: result.pass_token,
            gen_time: result.gen_time
        };
    }
    return null;
}
function ThanhDieuHandle(e, custom) {
    e.preventDefault();
    if (captchaObj && typeof captchaObj.getValidate === 'function') {
        if (!captchaObj.getValidate()) {
            return Wstoast.error("Vui lòng xác minh captcha!");
        }
        const geetestParams = GeetestParams();
        if (!geetestParams) {
            return Wstoast.error("Không thể lấy thông tin captcha!");
        }

        if (typeof custom === 'function') {
            custom(e, geetestParams);
        } else {
            Wstoast.error('No custom submit handler provided!');
        }
    } else {
        Wstoast.error("Captcha object is not properly initialized!");
    }
}
$('body').on('submit', '.user-login', function(e) {
    ThanhDieuHandle(e, function(event, geetestParams) {
        var formData = $(event.target).serializeArray();
        Object.entries(geetestParams).forEach(([key, value]) => {
            formData.push({ name: key, value: value });
        });
        const payload = $.param(formData);
        $.ajax({
            type: "POST",
            url: '/ajax.php',
            data: payload,
            dataType: 'json',
            success: function(res) {
                if (res.status === 'success') {
                    Wstoast.success(res.msg);
                    captchaObj.reset();
                } else {
                    captchaObj.reset();
                    Wstoast.error(res.msg);
                }
            },
            error: function(xhr, status, error) {
                Wstoast.error("Mất kết nối đến máy chủ");
            }
        });
    });
});
</script>
</body>
</html>
