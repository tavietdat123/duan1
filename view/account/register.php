<?php
require_once '../../DAO/PDO.php';
$rows = pdo_query('select * from account');

 if(isset($_POST['check'])){
  $username_dk = $_POST['username_dk'];
  $emailphone_dk = $_POST['emailphone_dk'];
  $password_dk = $_POST['password_dk'];
  $re_password_dk = $_POST['re_password_dk'];
  $role = 1;

$checktk=0;
foreach ($rows as $key => $value) {
    if(isset($emailphone_dk)){
   if($value['email'] == $emailphone_dk){
    $checktk = 1;
   }}}
if($username_dk == ""){
    $errorusn = "Bạn chưa nhập fullName";
}
            if($emailphone_dk == "") {
                $errorem = "Bạn chưa nhập email";
            }else if(!filter_var($emailphone_dk , FILTER_VALIDATE_EMAIL)){
                $errorem ="Email không đúng định dạng";
            }elseif($checktk == 1){
                $errorem="Email đã tồn tại";
                     } 
            if($password_dk == "") {
                $errormk = "Bạn chưa nhập Mật khẩu";
            }elseif(strlen($password_dk) < 6){
                $errormk ="Mật khẩu ít nhất 6 kí tự";
            }
                if($re_password_dk == "") {
                    $errorremk =  "Nhập lại mật khẩu không trùng khớp";
                }elseif(!($re_password_dk == $password_dk)){
                    $errorremk =  "Nhập lại mật khẩu không trùng khớp";
                }
if(!isset($errorusn) && !isset($errorem) && !isset($errormk)&& !isset($errorremk)){
    $create_user ="INSERT INTO account (fullName,password,email,role)" . 
    "VALUES ('$username_dk','$password_dk','$emailphone_dk',$role)";
    pdo_execute($create_user);
    header("location: login.php");

    
   
}}
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/datstyle.css">
<link rel="stylesheet" href="/css/style.css">

</head>
<body>
<div class="container">
        <div class="login_header d-flex ju">
            <div class="d-flex">
            <svg class="svg_image_header_login" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 38">
                <defs>
                    <linearGradient id="logos806a-1" x2="0" y2="100%">
                        <stop offset="0" stop-color="#00d7e5"></stop>
                        <stop offset="1" stop-color="#0066ae"></stop>
                    </linearGradient>
                    <linearGradient id="logos806b-1" x2="0" y2="100%">
                        <stop offset="0" stop-color="#ff30ae"></stop>
                        <stop offset="1" stop-color="#d1003a"></stop>
                    </linearGradient>
                    <linearGradient id="logos806c-1" x2="0" y2="100%">
                        <stop offset="0" stop-color="#ffba00"></stop>
                        <stop offset="1" stop-color="#f02e00"></stop>
                    </linearGradient>
                </defs>
                <path fill="url(#logos806a-1)"
                    d="M23.2 15.5c2.5-2.7 6-4.4 9.9-4.4 8.7 0 13.4 6 13.4 13.4v12.8c0 .3-.3.5-.5.5h-6c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-6c-.3 0-.5-.2-.5-.5V24.5c0-7.4 4.7-13.4 13.3-13.4 4 0 7.5 1.7 9.9 4.4m54.3 9.1c0 7.5-5.2 13.4-14 13.4s-14-5.9-14-13.4c0-7.6 5.2-13.4 14-13.4 8.8-.1 14 5.9 14 13.4zm-6.7 0c0-3.7-2.4-6.8-7.3-6.8-5.2 0-7.3 3.1-7.3 6.8 0 3.7 2.1 6.8 7.3 6.8 5.1-.1 7.3-3.1 7.3-6.8z">
                </path>
                <path fill="url(#logos806b-1)"
                    d="M103.8 15.5c2.5-2.7 6-4.4 9.9-4.4 8.7 0 13.4 6 13.4 13.4v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5H101c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-7.4 4.7-13.4 13.3-13.4 3.8 0 7.3 1.7 9.7 4.4m54.3 9.1c0 7.5-5.2 13.4-14 13.4s-14-5.9-14-13.4c0-7.6 5.2-13.4 14-13.4 8.7-.1 14 5.9 14 13.4zm-6.7 0c0-3.7-2.3-6.8-7.3-6.8-5.2 0-7.3 3.1-7.3 6.8 0 3.7 2.1 6.8 7.3 6.8 5.1-.1 7.3-3.1 7.3-6.8zm9.8-.1v12.8c0 .3.2.5.5.5h5.9c.3 0 .5-.2.5-.5V24.5c0-4.6 3.1-5.9 6.4-5.9 3.3 0 6.4 1.3 6.4 5.9v12.8c0 .3.2.5.5.5h5.9c.3 0 .5-.2.5-.5V24.5c0-7.4-4.5-13.4-13.4-13.4-8.7 0-13.2 6-13.2 13.4">
                </path>
                <path fill="url(#logos806c-1)"
                    d="M218.4 0h-5.9c-.3 0-.5.2-.5.5v13c-1.3-1.2-4.3-2.4-7-2.4-8.8 0-14 5.9-14 13.4s5.2 13.4 14 13.4c8.7 0 14-5.2 14-14.6V.4c-.1-.2-.3-.4-.6-.4zm-13.5 31.3c-5.2 0-7.3-3-7.3-6.8 0-3.7 2.1-6.8 7.3-6.8 4.9 0 7.3 3 7.3 6.8s-2.2 6.8-7.3 6.8zM236 11.1c-8.8 0-14 5.9-14 13.4s5.2 13.4 14 13.4 14-5.9 14-13.4c0-7.4-5.3-13.4-14-13.4zm0 20.2c-5.2 0-7.3-3.1-7.3-6.8 0-3.7 2.1-6.8 7.3-6.8 4.9 0 7.3 3.1 7.3 6.8 0 3.8-2.2 6.8-7.3 6.8z">
                </path>
            </svg>
            <h4 >Đăng Ký</h4>
        </div>
            <a class="login_header_link" href="/index.php">Quay lại trang chủ <i class="fa-solid fa-right"></i></a>
        </div>

        
    </div>
    <div class="login_contnet">
            <div class="login_slide d-flex flex-column align-items-center">
                <svg class="svg_image_login" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 38">
                    <defs>
                        <linearGradient id="logos806a-1" x2="0" y2="100%">
                            <stop offset="0" stop-color="#00d7e5"></stop>
                            <stop offset="1" stop-color="#0066ae"></stop>
                        </linearGradient>
                        <linearGradient id="logos806b-1" x2="0" y2="100%">
                            <stop offset="0" stop-color="#ff30ae"></stop>
                            <stop offset="1" stop-color="#d1003a"></stop>
                        </linearGradient>
                        <linearGradient id="logos806c-1" x2="0" y2="100%">
                            <stop offset="0" stop-color="#ffba00"></stop>
                            <stop offset="1" stop-color="#f02e00"></stop>
                        </linearGradient>
                    </defs>
                    <path fill="url(#logos806a-1)"
                        d="M23.2 15.5c2.5-2.7 6-4.4 9.9-4.4 8.7 0 13.4 6 13.4 13.4v12.8c0 .3-.3.5-.5.5h-6c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-6c-.3 0-.5-.2-.5-.5V24.5c0-7.4 4.7-13.4 13.3-13.4 4 0 7.5 1.7 9.9 4.4m54.3 9.1c0 7.5-5.2 13.4-14 13.4s-14-5.9-14-13.4c0-7.6 5.2-13.4 14-13.4 8.8-.1 14 5.9 14 13.4zm-6.7 0c0-3.7-2.4-6.8-7.3-6.8-5.2 0-7.3 3.1-7.3 6.8 0 3.7 2.1 6.8 7.3 6.8 5.1-.1 7.3-3.1 7.3-6.8z">
                    </path>
                    <path fill="url(#logos806b-1)"
                        d="M103.8 15.5c2.5-2.7 6-4.4 9.9-4.4 8.7 0 13.4 6 13.4 13.4v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5H101c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-7.4 4.7-13.4 13.3-13.4 3.8 0 7.3 1.7 9.7 4.4m54.3 9.1c0 7.5-5.2 13.4-14 13.4s-14-5.9-14-13.4c0-7.6 5.2-13.4 14-13.4 8.7-.1 14 5.9 14 13.4zm-6.7 0c0-3.7-2.3-6.8-7.3-6.8-5.2 0-7.3 3.1-7.3 6.8 0 3.7 2.1 6.8 7.3 6.8 5.1-.1 7.3-3.1 7.3-6.8zm9.8-.1v12.8c0 .3.2.5.5.5h5.9c.3 0 .5-.2.5-.5V24.5c0-4.6 3.1-5.9 6.4-5.9 3.3 0 6.4 1.3 6.4 5.9v12.8c0 .3.2.5.5.5h5.9c.3 0 .5-.2.5-.5V24.5c0-7.4-4.5-13.4-13.4-13.4-8.7 0-13.2 6-13.2 13.4">
                    </path>
                    <path fill="url(#logos806c-1)"
                        d="M218.4 0h-5.9c-.3 0-.5.2-.5.5v13c-1.3-1.2-4.3-2.4-7-2.4-8.8 0-14 5.9-14 13.4s5.2 13.4 14 13.4c8.7 0 14-5.2 14-14.6V.4c-.1-.2-.3-.4-.6-.4zm-13.5 31.3c-5.2 0-7.3-3-7.3-6.8 0-3.7 2.1-6.8 7.3-6.8 4.9 0 7.3 3 7.3 6.8s-2.2 6.8-7.3 6.8zM236 11.1c-8.8 0-14 5.9-14 13.4s5.2 13.4 14 13.4 14-5.9 14-13.4c0-7.4-5.3-13.4-14-13.4zm0 20.2c-5.2 0-7.3-3.1-7.3-6.8 0-3.7 2.1-6.8 7.3-6.8 4.9 0 7.3 3.1 7.3 6.8 0 3.8-2.2 6.8-7.3 6.8z">
                    </path>
                </svg>
                <img src="https://content.r9cdn.net/res/images/horizon/ui/authentication/brands/momondo/magiclinkloginBg.svg?v=8a0eeb39f4df5084a227975496344e70866f4075&cluster=5" alt="">
            </div>
            <div class="login_form">
                <div class="login_form_heading">
                    <h4>Đăng Ký</h4>
                </div>
                <form action="" method="post"   class=" d-flex flex-column">
                    <input type="text" placeholder="Nhập Email..." name="emailphone_dk" value="<?php if(isset($emailphone_dk)){echo$emailphone_dk;}?>">
                    <p style="color: red;margin-left:2px;margin-top:2px ; font-size: 12px; font-weight: 300"><?php if(isset($errorem)){echo$errorem;} ?></p>
                    <input type="text" placeholder="Nhập Fullname..." name='username_dk' value="<?php if(isset($username_dk)){echo$username_dk;}?>">
                    <p style="color: red;margin-left:2px;margin-top:2px ; font-size: 12px; font-weight: 300"><?php if(isset($errorusn)){echo$errorusn;} ?></p>
                    <input type="password" placeholder="Nhập Password..." name="password_dk" value="<?php if(isset($password_dk)){echo$password_dk;}?>">
                    <p style="color: red;margin-left:2px;margin-top:2px ; font-size: 12px; font-weight: 300"><?php if(isset($errormk)){echo$errormk;} ?></p>
                    <input type="password" placeholder="Nhập Re-Password..." name="re_password_dk" value="<?php if(isset($re_password_dk)){echo$re_password_dk;}?>">
                    <p style="color: red;margin-left:2px;margin-top:2px ; font-size: 12px; font-weight: 300"><?php if(isset($errorremk)){echo$errorremk;} ?></p>
                    <button name='check'>Đăng Ký</button>
                </form>
                
                <div class="login_form_line d-flex align-items-center mt-4">
                    <div class="login_form_line_1"></div>
                    <div class="login_form_line_text">
                        HOẶC
                    </div>
                    <div class="login_form_line_2"></div>

                </div>
                <div class="login_form_social d-flex mt-3">
                    <button class="login_form_social_1"><i class="fa-brands fa-square-facebook"></i>Facebook</button>
                    <button class="login_form_social_1"><i class="fa-brands fa-google"></i>google</button>
                </div>
                <div class="register_sp d-flex justify-content-between mt-4 mb-1">
                    <p>Bằng việc đăng ký, bạn đã đồng ý với Momondo về <br> <a href="">điều khoản dịch vụ</a> & <a href="">chính sách bảo mật</a></p>
                </div>
                <div class="login_form_register mb-0 mt-4">
                    <p>Bạn đã có tài khoản <a href="login.php">Đăng Nhập</a></p>
                </div>
                </div>
    </div>
    <div class="footer ps-5 pe-5">
        <div class="container_footer">
            <div class="row">
                <div class="col-3">
                    <div class="footer_heading">
                        <h5>Công Ty</h5>
                    </div>
                    <ul class="footer_list">
                        <li><a href="" class="footer_list_link">Về</a></li>
                        <li><a href="" class="footer_list_link">Nghề Nghiệp</a></li>
                        <li><a href="" class="footer_list_link">Di động</a></li>
                        <li><a href="" class="footer_list_link">Phát Hiện</a></li>
                        <li><a href="" class="footer_list_link">Chúng ta làm việc như nào</a></li>
                        <li><a href="" class="footer_list_link">tại sao du khách chon momondo</a></li>
                        <li><a href="" class="footer_list_link">Sự bền vững</a></li>
                        <li><a href="" class="footer_list_link">Mã phiếu giảm giá Momondo</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <div class="footer_heading">
                        <h5>Tiếp Xúc</h5>
                    </div>
                    <ul class="footer_list">
                        <li><a href="" class="footer_list_link">Trợ giúp / Câu hỏi thường gặp</a></li>
                        <li><a href="" class="footer_list_link">Nhấn</a></li>
                        <li><a href="" class="footer_list_link">Chi nhánh</a></li>
                        <li><a href="" class="footer_list_link">Quảng cáo với chúng tôi</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <div class="footer_heading">
                        <h5>Hơn</h5>
                    </div>
                    <ul class="footer_list">
                        <li><a href="" class="footer_list_link">Phí hàng tháng</a></li>
                        <li><a href="" class="footer_list_link">Các hãng hàng không</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <div class="footer_heading">
                        <h5>Thanh Toán</h5>
                    </div>
                    <ul class="footer_list d-flex flex-wrap">
                        <li><a href="" class="footer_img_pay"><img
                                    src="https://www.pnj.com.vn/design/themes/pnjrovski/media/images/payments/visa.svg"
                                    alt=""></a></li>
                        <li><a href="" class="footer_img_pay"><img
                                    src="https://www.pnj.com.vn/design/themes/pnjrovski/media/images/payments/mastercard.svg"
                                    alt=""></a></li>
                        <li><a href="" class="footer_img_pay"><img
                                    src="https://www.pnj.com.vn/design/themes/pnjrovski/media/images/payments/jcb.svg"
                                    alt=""></a></li>
                        <li><a href="" class="footer_img_pay"><img
                                    src="https://www.pnj.com.vn/design/themes/pnjrovski/media/images/payments/thanhtoantienmat.svg"
                                    alt=""></a></li>
                        <li><a href="" class="footer_img_pay"><img
                                    src="https://www.pnj.com.vn/design/themes/pnjrovski/media/images/payments/internetBanking.svg"
                                    alt=""></a></li>
                    </ul>
                </div>
            </div>

            <div class="footer_policy">
                <a href="" class="footer_policy_link">Sự riêng tư</a>
                <a href="" class="footer_policy_link">Điều khoản và điều kiện</a>
                <a href="" class="footer_policy_link">Lựa chọn quảng cáo</a>
                <a href="" class="footer_policy_link">© 2022 momondo</a>
            </div>
            <div class="footet_social-media">
                <a href="" class="footet_social"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="" class="footet_social"><i class="fa-brands fa-instagram"></i></a>
                <a href="" class="footet_social"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <div class="footer_p">
                <span>momondo là một phần của Booking Holdings Inc., công ty hàng đầu thế giới về du lịch trực tuyến và
                    các dịch vụ liên quan.</span>
            </div>
        </div>
    </div>
</body>
</html>
            