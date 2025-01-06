## Ví dụ demo về tích hợp Geetest Captcha V4

- GeeTest V4, còn được gọi là GeeTest Adaptive CAPTCHA, là phiên bản mới nhất của công nghệ CAPTCHA từ GeeTest, được thiết kế để phân biệt giữa người dùng thực và bot. Phiên bản này tích hợp một số tính năng nâng cao và cải tiến so với các phiên bản trước đó.
- Đọc thêm về cách sử dụng từ tài liệu: [https://docs.geetest.com/en](https://docs.geetest.com/en)
```php
// POST TẤT CẢ THAM SỐ GEETEST XÁC MINH LÊN CaptchaValidator/Geetest.
$postCaptcha = json_decode($initCaptcha->verify($_POST['lot_number'], $_POST['captcha_output'], $_POST['pass_token'], $_POST['gen_time']), true);
// Sau đó file geetest.php sẽ gửi dữ liệu xác minh đến GeeTest.
// Và chúng ta sẽ nhận được kết quả trả về lưu vào $postCaptcha từ object $initCaptcha
// Để nhận biết captcha xác minh thành công hay không, chi cần lấy res từ status Geetest trả về success / error.
// Code mẫu (đặt bên dưới $postCaptcha).
if (isset($postCaptcha) && $postCaptcha['status'] !== 'success') { // Xác minh thất bại sẽ không được thông qua
exit(json_encode([
"status" => "error", // edit theo dự án của bạn
"msg" => Geetest::Error($postCaptcha['reason'])
]));
}
// Tích hợp khá dễ dàng và tiện lợi, đây là captcha bản free kéo/thả
// Đoạn mã của bạn ở đây
```

## Demo
![Ngoccoder](https://i.imgur.com/JYTwy0u.png)
![Ngoccoder](https://i.imgur.com/wqwWC4K.png)
