<?php
$id = $_GET['id'];
$ticket = pdo_query_one("select * from ticket where id = $id ");
$flight_id = $ticket['flight_id'];
$flight = pdo_query_one("select * from flight where id = $flight_id");
$ticket_type_id = $ticket['type_ticket_id'];
$ticket_type = pdo_query_one("select * from ticket_type where id = $ticket_type_id");
if(isset($_POST['check'])){
$clent_name= $_POST['clent_name'];
$clent_phone= $_POST['clent_phone'];
$clent_email= $_POST['clent_email'];
$client_dx= $_POST['client_dx'];
if($clent_name == ""){
    $clent_name_er = "Bạn cần nhập trường này";
}
if($client_dx == ""){
    $clent_dx_er = "Bạn cần nhập trường này";
}
if($clent_phone == ""){
    $clent_phone_er = "Bạn cần nhập trường này";
}elseif (strlen($clent_phone) > 10 || strlen($clent_phone) < 10) {
    $clent_phone_er = "Số điện thoại không đúng định dạng";
}
if($clent_email == ""){
    $clent_email_er = "Bạn cần nhập trường này";
}else if (!filter_var($clent_email, FILTER_VALIDATE_EMAIL)) {
    $clent_email_er = "Email không đúng định dạng";
}
if (!isset($clent_email_er) && !isset($clent_phone_er) && !isset($clent_name_er) && !isset($clent_dx_er)) {
    $sql = "INSERT INTO booking (fullName,name,email,tell,ticket_id) VALUES ('$clent_name','$client_dx','$clent_email','$clent_phone','$id')";
        pdo_execute($sql);
        $booking = pdo_query("select * from booking");
        $id_booking =  array_pop($booking)['id'];
        echo$id_booking;
        echo"<script>
        location.href = '/index.php?action=pay&id=$id_booking'
    </script>";
}
}
?>
<div class="container_content">
    <div class="content">
        <!-- ----------------------------------- -->
        <?php if(!isset($_SESSION['client'])): ?>
        <div class="bk_login">
            <div class="d-flex">
                <div class=""><img importance="low" loading="lazy" src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/3/334a43706b543daaa27995a60d895f2a.png" decoding="async" style="object-fit: fill; object-position: 50% 50%;"></div>
                <div class="ms-4">
                    <h3 aria-level="3" dir="auto" role="heading" class="" style="color: rgb(3, 18, 26);">Đăng nhập và tận hưởng ưu đãi dành riêng cho thành viên</h3>
                    <div class=" d-flex mt-2"><img importance="low" loading="lazy" src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/5/513ab8104dcf3ae7a42419cba432351d.svg" decoding="async" width="24" height="24" class="me-2" style="object-fit: fill; object-position: 50% 50%;">
                        <div dir="auto" class="" style="color: rgb(104, 113, 118);">Khuyến mãi lên đến 10%</div>
                    </div>
                    <div  class="mt-2">
                        <div class="" style="opacity: 1;">
                            <a href="index.php?action=login" class="" style="color: rgb(1, 148, 243);font-size:18px;font-weight:700;">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>

        <div class="row g-3 mb-100">
            <div class="col-md-8">
                <div class="card">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header p-4" id="headingTwo">
                                <h2 class="mb-0 bk_heading">
                                    Thông tin liên hệ
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <input type="text " class="form-control" placeholder="Paypal email">
                                </div>
                            </div>
                        </div>
                        <div class="card">

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <form class="card-body payment-card-body mb-5 mt-4" method="POST" action="<?php if(isset($next)){echo"/index.php?action=pay";}?>">

                                    <span class="font-weight-normal card-text">Họ và tên</span>
                                    <div class="input mb-3">
                                        <input type="text" class="form-control  mt-2" value="<?php if (isset($clent_name)) {echo $clent_name;}?>" name="clent_name" placeholder="Full Name...">
                                        <p style="color: red;margin-left:2px;margin-top:2px ; font-size: 12px; font-weight: 300">
                    <?php if(isset($clent_name_er)){echo$clent_name_er;} ?></p>
                                    </div>

                                    <span class="font-weight-normal card-text">Danh Xưng</span>
                                    <div class="input mb-3">
                                    <select id="" class="form-control"  name="client_dx">
                                    <option value="">...</option>
                                    
                                    <option value="Ông" >Ông</option>
                                    <option value="Bà">Bà</option>
                                    <option value="Cô">Cô</option>
                                    </select>
                                    <p style="color: red;margin-left:2px;margin-top:2px ; font-size: 12px; font-weight: 300">
                    <?php if(isset($clent_dx_er)){echo$clent_dx_er;} ?></p>
                                    </div>

                                    <div class="row mt-4 mb-3 ">
                                        <div class="col-md-6 ">
                                            <span class="font-weight-normal card-text ">SĐT</span>
                                            <div class="input">
                                                <input type="number" class="form-control mt-2" value="<?php if (isset($clent_phone)) {echo $clent_phone;}?>" name="clent_phone" placeholder="Number phone...">
                                                <p style="color: red;margin-left:2px;margin-top:2px ; font-size: 12px; font-weight: 300">
                    <?php if(isset($clent_phone_er)){echo$clent_phone_er;} ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="font-weight-normal card-text">Email</span>
                                            <div class="input">
                                                <input type="text" class="form-control  mt-2" name="clent_email" value="<?php if (isset($clent_email)) {echo $clent_email;}?>" placeholder="Email...">
                                                <p style="color: red;margin-left:2px;margin-top:2px ; font-size: 12px; font-weight: 300">
                    <?php if(isset($clent_email_er)){echo$clent_email_er;} ?></p>
                                            </div>
                                        </div>
                                    </div>


                                    <button name="check" class="btn btn-primary mt-3">Tiếp Tục</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="card">
                    <div class="d-flex  p-3">
                        <div class="bk_plane me-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" data-id="IcProductFlightFill">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.24315 18.6216C4.14242 19.2724 4.72762 19.8576 5.37843 19.7569L6.5885 22.177C6.82109 22.6422 7.37143 22.8515 7.85432 22.6583L8.06676 22.5733C8.91113 22.2356 9.42133 21.3707 9.30853 20.4683L9 18L13.2857 14.4286L18.5103 22.2655C18.7901 22.6851 19.3385 22.8308 19.7896 22.6052L20.2243 22.3879C20.6694 22.1653 20.8831 21.6494 20.7257 21.1772L19 16L19.7929 15.2071C20.1834 14.8166 20.1834 14.1834 19.7929 13.7929L19.2071 13.2071C18.8837 12.8838 18.394 12.8282 18.0134 13.0403L17.1493 10.4478L21.8613 4.85221C22.5053 4.08744 22.457 2.95701 21.75 2.25003C21.043 1.54305 19.9126 1.49469 19.1478 2.13871L13.5522 6.85077L10.9597 5.9866C11.1719 5.60602 11.1163 5.11629 10.7929 4.79292L10.2071 4.20713C9.81658 3.81661 9.18342 3.81661 8.79289 4.20713L8 5.00003L2.82279 3.27429C2.35068 3.11692 1.83469 3.33065 1.61213 3.77576L1.39479 4.21044C1.16925 4.66152 1.3149 5.20996 1.73452 5.48971L9.57143 10.7143L6 15L3.53173 14.6915C2.62934 14.5787 1.76445 15.0889 1.4267 15.9333L1.34173 16.1457C1.14857 16.6286 1.35781 17.1789 1.82299 17.4115L4.24315 18.6216Z" fill="#30C5F7"></path>
                            </svg>
                        </div>
                        <div class="bk_trip ">
                            <span style="font-weight: 600;"><?= $flight['pointOfDeparture'] ?> </span><i class="fa-sharp fa-solid fa-right-long ms-2 me-2"></i><span style="font-weight: 600;"> <?= $flight['destination'] ?></span>
                        </div>
                    </div>
                    <hr class="mt-0 line">
                    <div class="ps-3 pe-3 pb-3">
                        <div class="d-flex  mb-2 flex-column">
                            <p>Chuyến bay đi: <span style="font-weight: 600;"><?= $flight['dateTime'] ?></span></p>
                            <span class="text-muted " style="font-size: 12px;">(yyyy-mm-dd hh:mi:ss)</span>
                        </div>
                        <div class="d-flex mt-4 ">
                            <div class="me-3"><img src="img/<?= $ticket['company_img'] ?>" width="100" alt=""></div>
                            <div class="d-flex flex-column">
                                <p style="font-weight: 600;"><?= $ticket['company'] ?></p>
                                <p style="font-size: 12px;" class="text-muted">Loại vé: <span style="font-weight: 600;"><?= $ticket_type['name'] ?></span></p>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-0 line">
                    <div class="p-3 d-flex justify-content-between">
                        <div class="d-flex flex-column">
                            Giá:
                        </div>
                        <span style="font-weight: 600;"> <?php if(isset($_SESSION['client'])){
                            $price = $ticket['price']/100 *96;
                            echo$price."$ giảm 4% TV";
                         }else{echo$ticket['price']."$";}  ?></span>
                    </div>
                    <div class="p-3">
                        <div class="text-center">
                            <a href="index.php" style="font-size: 12px;">Xem thêm các chuyến bay khác</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>




        <!-- -------------------------- -->
    </div>
</div>