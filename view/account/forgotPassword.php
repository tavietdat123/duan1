<?php
// include "../DAO/PDO.php";

// // session_start();

// if (isset($_POST['nutguiyeucau']) == true) {
//     $email = $_POST['email'];

//     $dburl = "mysql:host=127.0.0.1;dbname=duan1;charset=utf8";
//     $username = 'root';
//     $password = '';

//     $connect = new PDO($dburl, $username, $password);
//     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "SELECT * FROM account WHERE email =?";
//     $stmt = $connect->prepare($sql);
//     $stmt->execute([$email]);
//     $count = $stmt->rowCount();

//     if ($count == 0) {
//         $loi = "Email bạn nhập chưa đăng kí thành viên với chúng tôi";
//     } else {
//         $matkhaumoi =  substr(md5(rand(0, 99999)), 0, 8);
//         $sql = "UPDATE account SET `passWord` = ? WHERE email =?";
//         $stmt = $connect->prepare($sql);
//         $stmt->execute([$matkhaumoi, $email]);
//         //   echo "Đã cập nhật";

        
// // $matkhaumoi =  substr(md5(rand(0, 99999)), 0, 8);
// // echo $matkhaumoi;
// //Import PHPMailer classes into the global namespace
// require 'PHPMailer-master/src/Exception.php';
// require 'PHPMailer-master/src/PHPMailer.php';
// require 'PHPMailer-master/src/SMTP.php';
// //These must be at the top of your script, not inside a function
// // use PHPMailer\PHPMailer\PHPMailer;
// // use PHPMailer\PHPMailer\SMTP;
// // use PHPMailer\PHPMailer\Exception;

// //Load Composer's autoloader
// // require 'vendor/autoload.php';

// //Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer\PHPMailer\PHPMailer(true);

// try {
//     //Server settings
//     $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'nguyenngoclinhphuong.nnlp@gmail.com';                     //SMTP username
//     $mail->Password   = 'hswwbwcusyfnubkw';                               //SMTP password
//     $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//     //Recipients
//     $mail->setFrom('nguyenngoclinhphuong.nnlp@gmail.com', 'Admin');
//     // $mail->addAddress('nguyenngoclinhphuong.nnlp@gmail.com', 'Admin');     //Add a recipient
//     $mail->addAddress('thanhntph20216@fpt.edu.vn');               //Name is optional
//     // $mail->addReplyTo('info@example.com', 'Information');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     //Attachments
//     //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//     //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = 'Here is the subject';
//     $mail->Body    = "This is the HTML message body <b>$matkhaumoi</b>";
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (PHPMailer\PHPMailer\Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }
//     }
// }
?>

<?php
function Guimail(){
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <path fill="url(#logos806a-1)" d="M23.2 15.5c2.5-2.7 6-4.4 9.9-4.4 8.7 0 13.4 6 13.4 13.4v12.8c0 .3-.3.5-.5.5h-6c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-6c-.3 0-.5-.2-.5-.5V24.5c0-7.4 4.7-13.4 13.3-13.4 4 0 7.5 1.7 9.9 4.4m54.3 9.1c0 7.5-5.2 13.4-14 13.4s-14-5.9-14-13.4c0-7.6 5.2-13.4 14-13.4 8.8-.1 14 5.9 14 13.4zm-6.7 0c0-3.7-2.4-6.8-7.3-6.8-5.2 0-7.3 3.1-7.3 6.8 0 3.7 2.1 6.8 7.3 6.8 5.1-.1 7.3-3.1 7.3-6.8z">
                    </path>
                    <path fill="url(#logos806b-1)" d="M103.8 15.5c2.5-2.7 6-4.4 9.9-4.4 8.7 0 13.4 6 13.4 13.4v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5H101c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-7.4 4.7-13.4 13.3-13.4 3.8 0 7.3 1.7 9.7 4.4m54.3 9.1c0 7.5-5.2 13.4-14 13.4s-14-5.9-14-13.4c0-7.6 5.2-13.4 14-13.4 8.7-.1 14 5.9 14 13.4zm-6.7 0c0-3.7-2.3-6.8-7.3-6.8-5.2 0-7.3 3.1-7.3 6.8 0 3.7 2.1 6.8 7.3 6.8 5.1-.1 7.3-3.1 7.3-6.8zm9.8-.1v12.8c0 .3.2.5.5.5h5.9c.3 0 .5-.2.5-.5V24.5c0-4.6 3.1-5.9 6.4-5.9 3.3 0 6.4 1.3 6.4 5.9v12.8c0 .3.2.5.5.5h5.9c.3 0 .5-.2.5-.5V24.5c0-7.4-4.5-13.4-13.4-13.4-8.7 0-13.2 6-13.2 13.4">
                    </path>
                    <path fill="url(#logos806c-1)" d="M218.4 0h-5.9c-.3 0-.5.2-.5.5v13c-1.3-1.2-4.3-2.4-7-2.4-8.8 0-14 5.9-14 13.4s5.2 13.4 14 13.4c8.7 0 14-5.2 14-14.6V.4c-.1-.2-.3-.4-.6-.4zm-13.5 31.3c-5.2 0-7.3-3-7.3-6.8 0-3.7 2.1-6.8 7.3-6.8 4.9 0 7.3 3 7.3 6.8s-2.2 6.8-7.3 6.8zM236 11.1c-8.8 0-14 5.9-14 13.4s5.2 13.4 14 13.4 14-5.9 14-13.4c0-7.4-5.3-13.4-14-13.4zm0 20.2c-5.2 0-7.3-3.1-7.3-6.8 0-3.7 2.1-6.8 7.3-6.8 4.9 0 7.3 3.1 7.3 6.8 0 3.8-2.2 6.8-7.3 6.8z">
                    </path>
                </svg>
                <h4>Quên mật khẩu</h4>
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
                <path fill="url(#logos806a-1)" d="M23.2 15.5c2.5-2.7 6-4.4 9.9-4.4 8.7 0 13.4 6 13.4 13.4v12.8c0 .3-.3.5-.5.5h-6c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-6c-.3 0-.5-.2-.5-.5V24.5c0-7.4 4.7-13.4 13.3-13.4 4 0 7.5 1.7 9.9 4.4m54.3 9.1c0 7.5-5.2 13.4-14 13.4s-14-5.9-14-13.4c0-7.6 5.2-13.4 14-13.4 8.8-.1 14 5.9 14 13.4zm-6.7 0c0-3.7-2.4-6.8-7.3-6.8-5.2 0-7.3 3.1-7.3 6.8 0 3.7 2.1 6.8 7.3 6.8 5.1-.1 7.3-3.1 7.3-6.8z">
                </path>
                <path fill="url(#logos806b-1)" d="M103.8 15.5c2.5-2.7 6-4.4 9.9-4.4 8.7 0 13.4 6 13.4 13.4v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5H101c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-7.4 4.7-13.4 13.3-13.4 3.8 0 7.3 1.7 9.7 4.4m54.3 9.1c0 7.5-5.2 13.4-14 13.4s-14-5.9-14-13.4c0-7.6 5.2-13.4 14-13.4 8.7-.1 14 5.9 14 13.4zm-6.7 0c0-3.7-2.3-6.8-7.3-6.8-5.2 0-7.3 3.1-7.3 6.8 0 3.7 2.1 6.8 7.3 6.8 5.1-.1 7.3-3.1 7.3-6.8zm9.8-.1v12.8c0 .3.2.5.5.5h5.9c.3 0 .5-.2.5-.5V24.5c0-4.6 3.1-5.9 6.4-5.9 3.3 0 6.4 1.3 6.4 5.9v12.8c0 .3.2.5.5.5h5.9c.3 0 .5-.2.5-.5V24.5c0-7.4-4.5-13.4-13.4-13.4-8.7 0-13.2 6-13.2 13.4">
                </path>
                <path fill="url(#logos806c-1)" d="M218.4 0h-5.9c-.3 0-.5.2-.5.5v13c-1.3-1.2-4.3-2.4-7-2.4-8.8 0-14 5.9-14 13.4s5.2 13.4 14 13.4c8.7 0 14-5.2 14-14.6V.4c-.1-.2-.3-.4-.6-.4zm-13.5 31.3c-5.2 0-7.3-3-7.3-6.8 0-3.7 2.1-6.8 7.3-6.8 4.9 0 7.3 3 7.3 6.8s-2.2 6.8-7.3 6.8zM236 11.1c-8.8 0-14 5.9-14 13.4s5.2 13.4 14 13.4 14-5.9 14-13.4c0-7.4-5.3-13.4-14-13.4zm0 20.2c-5.2 0-7.3-3.1-7.3-6.8 0-3.7 2.1-6.8 7.3-6.8 4.9 0 7.3 3.1 7.3 6.8 0 3.8-2.2 6.8-7.3 6.8z">
                </path>
            </svg>
            <img src="https://content.r9cdn.net/res/images/horizon/ui/authentication/brands/momondo/magiclinkloginBg.svg?v=8a0eeb39f4df5084a227975496344e70866f4075&cluster=5" alt="">
        </div>
        <div class="login_form">
            <div class="login_form_heading">
                <h4>Quên mật khẩu</h4>
            </div>
            <form action="index.php?action=forgotPassword" method="POST" class=" d-flex flex-column">

                <input value="<?php if (isset($email)) echo $email ?>" type="email" id="email" name="email" placeholder="Nhập Email...">
                <p style="color: red;margin-left:2px;margin-top:2px ; font-size: 12px; font-weight: 300"></p>
                <button name="nutguiyeucau">Gửi thông tin</button>
            </form>
            <div class="login_sp d-flex justify-content-between mt-2 mb-1">
                <a href="index.php?action=login">Đăng nhập</a>
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
                        <li><a href="" class="footer_img_pay"><img src="https://www.pnj.com.vn/design/themes/pnjrovski/media/images/payments/visa.svg" alt=""></a></li>
                        <li><a href="" class="footer_img_pay"><img src="https://www.pnj.com.vn/design/themes/pnjrovski/media/images/payments/mastercard.svg" alt=""></a></li>
                        <li><a href="" class="footer_img_pay"><img src="https://www.pnj.com.vn/design/themes/pnjrovski/media/images/payments/jcb.svg" alt=""></a></li>
                        <li><a href="" class="footer_img_pay"><img src="https://www.pnj.com.vn/design/themes/pnjrovski/media/images/payments/thanhtoantienmat.svg" alt=""></a></li>
                        <li><a href="" class="footer_img_pay"><img src="https://www.pnj.com.vn/design/themes/pnjrovski/media/images/payments/internetBanking.svg" alt=""></a></li>
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