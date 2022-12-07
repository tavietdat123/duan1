<?php
if(isset($_POST['check_contact'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $content = $_POST['content'];
    $contact= "INSERT INTO contact (name,phone,content)" .
    "VALUES ('$name','$phone','$content')";
    pdo_execute($contact);
}
?>
<div class="container_content">
    <div class="content text-light">
        <div class="text-light">
            <h3>Liên hệ</h3>
        </div>
        <div class="contact_content text-light">
            <div>
                <div class="d-flex justify-content-between mt-5">
                    <div class="d-flex flex-column"><span> <img
                                src="https://www.vemaybay.vn/images/IconPhoneYellow.png"> Hotline
                        </span>
                        <p class="m-0 font-weight-bolder">0932 126 988</p>
                    </div>
                    <div class="d-flex flex-column"><span> <img
                                src="https://www.vemaybay.vn/images/IconPhoneYellow.png"> Điện thoại
                        </span>
                        <p class="m-0 font-weight-bolder">(028) 38 256 256
                        </p>
                    </div>
                </div>
                <div class="d-none d-md-block">
                    <div class="rounded my-4 third-party">
                        <div class="d-flex justify-content-between p-3">
                            <div>
                                <p class="font-weight-bolder">Đối tác khách sạn</p><b>Niêm yết vé máy chỉ có trên
                                    Momondo.vn
                                    với kết nối với hàng triệu du khách trên toàn thế giới!</b>
                                <div class="my-2"><a href="index.php?action=register">Đăng ký ngay</a></div>
                            </div>
                            <div style="border-right:2px solid #c4c4c4" class="ms-1 me-3"></div>
                            <div>
                                <p class="font-weight-bolder">Báo chí &amp; Đối tác truyền thông</p><b>Nếu bạn là
                                    đại diện cơ quan truyền
                                    thông, vui lòng gửi yêu cầu đến cho chúng tôi</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên của bạn</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                    <input type="number" name="phone" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nội dung</label>
                    <textarea name="content" style="width: 100%;height:160px;" required></textarea>
                </div>
                <button type="submit" name="check_contact" class="btn btn-primary">Gửi</button>
            </form>
        </div>

        <span class="contact_introduce d-block"> <svg class="svg_image" role="img" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 250 38">
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
            </svg>CÔNG TY CỔ PHẦN MOMONDO
            <span class="d-block mt-md-3 mb-lg-2">Địa chỉ:</span>
            <li>Trụ sở kinh doanh:Tầng 4-A2.01-1 Hòa Bình Green City , 505 Minh Khai, Phường Vĩnh Tuy, Quận Hai
                Bà Trưng, TP Hà Nội</li>
            <li>Văn phòng giao dịch Miền Bắc:Số 12, Đường Ngô Gia Tự, Phường Đức Giang, Quận Long Biên, Tp Hà
                Nội.</li>
            <li>Văn phòng giao dịch Miền Nam:Số 3/2, Đường D1, Phường 25, Quận Bình Thạnh, Tp Hồ Chí Minh.</li>
            <span class="d-block mt-lg-3"><u>Điện thoại:</u>0243 8250250 | <u>Hotlines:</u>082 292 6789</span>
            <span class="d-block mt-lg-3">Website:http:Momondo.vn | Email:contact@Momondo.vn</span>
        </span>
    </div>
</div>