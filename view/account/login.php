<?php
// require_once '../../DAO/PDO.php';
$rows = pdo_query("select * from account");
 if(isset($_POST['check'])){
   $username_dn = $_POST['username_dn'];
   $password_dn = $_POST['password_dn'];
 foreach ($rows as $key => $value) {
   if(isset($username_dn) && isset($password_dn)){
    $check_pass=password_verify($password_dn,$value['passWord']);
    if($value['email'] == $username_dn && $check_pass && $value['status'] ==0 ){
           if($value['role']== 1){
              $_SESSION['client']= $value['email'];
             header("location: index.php");
             break;
              
           }else{
            $_SESSION['admin']= $value['email'];
            header("location: ../admin/index.php");
           }
       }elseif(!($value['email'] == $username_dn) || !($check_pass )){
           $errormkall_dn = "Tài khoản hoặc mật khẩu không chính xác";
           
       }
       if($value['status'] == 1){
        $errormkall_dn = "Tài khoản đã bị khóa";
       }
   }
 }
   if($username_dn == ""){
       $errortk_dn = "Bạn cần nhập trường này";
   }
   if ($password_dn == "") {
       $errormk_dn = "Bạn cần nhập trường này";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/datstyle.css">

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
                <h4>Đăng Nhập</h4>
            </div>
            <a class="login_header_link" href="index.php">Quay về trang chủ <i class="fa-solid fa-right"></i></a>
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
            <img src="https://content.r9cdn.net/res/images/horizon/ui/authentication/brands/momondo/magiclinkloginBg.svg?v=8a0eeb39f4df5084a227975496344e70866f4075&cluster=5"
                alt="">
        </div>
        <div class="login_form">
            <div class="login_form_heading">
                <h4>Đăng Nhập</h4>
            </div>
            <form action="index.php?action=login" method="POST" class=" d-flex flex-column">
                <input type="text" name="username_dn" placeholder="Nhập Email..."
                    value="<?php if(isset($username_dn)){echo$username_dn;} ?>">
                <p style="color: red;margin-left:2px;margin-top:2px ; font-size: 12px; font-weight: 300">
                    <?php if(isset($errortk_dn)){echo$errortk_dn;} ?></p>
                <input type="password" name="password_dn" placeholder="Nhập Password..."
                    value="<?php if(isset($password_dn)){echo$password_dn;} ?>">
                <p style="color: red;margin-left:2px;margin-top:2px ; font-size: 12px; font-weight: 300">
                    <?php if(isset($errormk_dn)){echo$errormk_dn;}elseif(isset($errormkall_dn)){echo$errormkall_dn;} ?>
                </p>
                <button name="check">Đăng Nhập</button>
            </form>
            <div class="login_sp d-flex justify-content-between mt-2 mb-1">
                <a href="index.php?action=forgotPassword">Quên mật khẩu</a>
                <a href="">Đăng nhập bằng SMS</a>
            </div>
            <div class="login_form_line d-flex align-items-center mt-2">
                <div class="login_form_line_1"></div>
                <div class="login_form_line_text">
                    HOẶC
                </div>
                <div class="login_form_line_2"></div>

            </div>
            <div class="login_form_social d-flex mt-3">
                <button class="login_form_social_1"><i class="fa-brands fa-square-facebook"></i>Facebook</button>
                <button class="login_form_social_1"><i class="fa-brands fa-google"></i>google</button>
                <button class="login_form_social_1"><i class="fa-brands fa-apple"></i>Apple</button>
            </div>
            <div class="login_form_register">
                <p>Bạn mới biết đến Momondo? <a href="index.php?action=register">Đăng Ký</a></p>
            </div>
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
                        <li><a href="" class="footer_list_link">Về chúng tôi</a></li>
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