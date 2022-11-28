<?php
$id = $_GET['id'];
$booking = pdo_query_one("select * from booking where id = $id ");
$ticket_id = $booking['ticket_id'];
$ticket = pdo_query_one("select * from ticket where id = $ticket_id");
$flight_id = $ticket['flight_id'];
$flight = pdo_query_one("select * from flight where id = $flight_id");
$ticket_type_id = $ticket['type_ticket_id'];
$ticket_type = pdo_query_one("select * from ticket_type where id = $ticket_type_id");

$pointOfDeparture = $flight['pointOfDeparture'];
$destination = $flight['destination'];
$dateTime = $flight['dateTime'];
$company = $ticket['company'];
$company_img = $ticket['company_img'];
$price = $ticket['price'];
if(isset($_SESSION['client'])){
    $price = $price/100 *96;
}
$type_ticket_id = $ticket['type_ticket_id'];
$name = $booking['name'];
$tell = $booking['tell'];
$fullName = $booking['fullName'];
$email = $booking['email'];
$pay = 1;
pdo_execute("INSERT INTO bill (pointOfDeparture,destination,dateTime,company,company_img,price,type_ticket_id,name,tell,fullName,email,pay) VALUES ('$pointOfDeparture','$destination','$dateTime','$company','$company_img','$price','$type_ticket_id','$name','$tell','$fullName','$email','$pay')");
$bill = pdo_query("select * from bill");
$bill_id =  array_pop($bill)['id'];
echo"<script>
setTimeout(()=>{
let store  = JSON.parse(localStorage.getItem(history)) ?? []
let bill = [...store,$bill_id]
localStorage.setItem(history, JSON.stringify(bill))},1000)
</script>"
?>
<div class="container_content ">
    <div class="content ">
        
        <!-- ---------------------------------- -->
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
            <div class="row d-flex mb-100">
                <div class="col-md-8 ">
                    <div class="card ">
                        <div class="card-header p-5">
                            <h4 class="text-center mb-4">Thanh Toán</h4>
                            <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                <!-- Credit card form tabs -->
                                <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3 p-2">
                                    <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Thẻ Tín Dụng </a> </li>
                                    <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                                    <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                                </ul>
                            </div> <!-- End -->
                            <!-- Credit card form content -->
                            <div class="tab-content">
                                <!-- credit card info-->
                                <div class="tab-pane fade show active pt-3">
                                    <form role="form" onsubmit="event.preventDefault()">
                                        <div class="form-group"> <label for="username">
                                                <h6>Tên Thẻ</h6>
                                            </label> <input type="text" name="username" placeholder="Tên Chủ Thẻ" required class="form-control "> </div>
                                        <div class="form-group"> <label for="cardNumber">
                                                <h6>Số Thẻ</h6>
                                            </label>
                                            <div class="input-group"> <input type="text" name="cardNumber" placeholder="Số Thẻ" class="form-control " required>
                                                <div class="input-group-append"> <span class="input-group-text text-muted h-100"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group"> <label><span class="hidden-xs">
                                                            <h6>Ngày Hết Hạn</h6>
                                                        </span></label>
                                                    <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                        <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                    </label> <input type="text" required class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Thanh Toán </button>
                                    </form>
                                </div>
                            </div> <!-- End -->
                            <!-- Paypal info -->
                            <div  class="tab-pane fade pt-3">
                                <h6 class="pb-2 mt-3">Chọn Tài Khoản Paypal Của Bạn</h6>
                                <div class="form-group mt-2"> <label class="radio-inline"> <input type="radio" name="optradio" checked> Nội địa </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">Quốc tế </label></div>
                                <p class="mt-3"> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Đăng nhập vào Paypal</button> </p>
                                <p class="text-muted mt-3"> Lưu ý: Sau khi nhấp vào nút, bạn sẽ được chuyển đến một cổng thanh toán an toàn. Sau khi hoàn tất quá trình thanh toán, bạn sẽ được chuyển hướng trở lại trang web để xem chi tiết đơn hàng của mình. </p>
                            </div> <!-- End -->
                            <!-- bank transfer info -->
                            <div  class="tab-pane fade pt-3">
                                <div class="form-group "> <label for="Select Your Bank">
                                        <h6>Chọn Ngân hàng của bạn</h6>
                                    </label> <select class="form-control mt-2" id="ccmonth">
                                        <option value="" selected disabled>--Vui lòng chọn Ngân hàng của bạn--</option>
                                        <option>Bank 1</option>
                                        <option>Bank 2</option>
                                        <option>Bank 3</option>
                                        <option>Bank 4</option>
                                        <option>Bank 5</option>
                                        <option>Bank 6</option>
                                        <option>Bank 7</option>
                                        <option>Bank 8</option>
                                        <option>Bank 9</option>
                                        <option>Bank 10</option>
                                    </select> </div>
                                <div class="form-group mt-3">
                                    <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Tiến hành thanh toán</button> </p>
                                </div>
                                <p class="text-muted mt-3">Lưu ý: Sau khi nhấp vào nút, bạn sẽ được chuyển đến một cổng thanh toán an toàn. Sau khi hoàn tất quá trình thanh toán, bạn sẽ được chuyển hướng trở lại trang web để xem chi tiết đơn hàng của mình. </p>
                            </div> <!-- End -->
                            <!-- End -->
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
                        <div class="d-flex mt-4 align-items-center">
                            <div class="me-3"><img src="img/<?= $ticket['company_img'] ?>" width="100" alt=""></div>
                            <div class="d-flex flex-column">
                                <p style="font-weight: 600;"><?= $ticket['company'] ?></p>
                                <p style="font-size: 12px;" class="text-muted">Loại vé: <span style="font-weight: 600;"><?= $ticket_type['name'] ?></span></p>
                            </div>
                        </div>
                        <div class="d-flex mt-4 ">
                            
                            <div class="d-flex flex-column">
                                <p style="font-size: 14px;" class="d-flex justify-content-between"><span><?=$booking['name']?> </span> <span style="font-weight: 600;"><?=$booking['fullName']?></span></p>
                                <p class="mt-2 mb-2 d-flex justify-content-between" style="font-size: 14px;"><span>SĐT:</span>  <span style="font-weight: 600;"> 0<?=$booking['tell']?></p>
                                <p style="font-size: 14px;" class="d-flex justify-content-between"><span>Email:</span><i class="me-4 ms-4"></i>  <span style="font-weight: 600;"> <?=$booking['email']?></p>
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
        
            


  <script>
        const $ = document.querySelector.bind(document)
        const $$ = document.querySelectorAll.bind(document)
        const tabitems = $$('.nav-link')
        const panes = $$('.tab-pane')
     
        const tabactive = $('.tab-item.active')
        
        
        tabitems.forEach((tabitem,index) => {
            var pane = panes[index]
            tabitem.onclick= function(){ 
                $('.nav-link.active').classList.remove('active')
                this.classList.add('active')
                $('.tab-pane.show').classList.remove('show')
                pane.classList.add('show')
                $('.tab-pane.active').classList.remove('active')
                pane.classList.add('active')
                
                
            }
            
        })

    </script>
        <!-- ------------------------------------- -->
    </div>
</div>