<?php
$row = pdo_query("select * from experience");
$slide = pdo_query("select * from  slideshow");
 ?>
<div class="container_content">
    <div class="content">
        <div class="exp_big_heading">
            <h3>Nâng tầm trải nghiệm chuyến bay</h3>
            <p>Máy bay Airbus A350 của Cathay Pacific mang đến khái niệm mới về trải nghiệm chuyến bay</p>
        </div>
        <div class="exp_heading_text">
            <p>Cathay Pacific có một trong những đội bay đường dài hiện đại nhất trên bầu trời - và máy bay Airbus
                A350 công nghệ tiên tiến cho phép chúng tôi cung cấp cho khách hàng một môi trường cabin vượt trội,
                nơi sự thoải mái của hành khách là trọng tâm trong các thiết kế của chúng tôi. Cuối năm 2021, chúng
                tôi đã đưa vào khai thác thành công 28 chiếc A350-900, 15 chiếc A350-1000 biến thể thế hệ mới nhất
                dài hơn và lớn hơn.</p>
            <p>Chỉ cần nhập quốc gia khởi hành của bạn bên dưới - bản đồ sau đó sẽ thay đổi để phản ánh tình trạng
                mở cửa của các quốc gia và bất kỳ yêu cầu nhập cảnh nào đối với khách hàng không. Hãy chắc chắn kiểm
                tra kỹ với trang web của chính phủ nước bạn trước khi đặt vé máy bay.</p>
        </div>
        <div class="exp_map">
            <img class="w-100 mt-4" src="https://wallpaperaccess.com/full/2223129.jpg" alt="">
        </div>
        <div class="exp_list">
            <div class="row">
                <?php foreach ($row as $key => $value):?>
                <div class=" col-6">
                    <div class="exp_list_item">
                        <div class="exp_list_img" style="background: url('../upload/<?=$value['imgEx']?>');">
                        </div>
                        <div class="exp_list_text">
                            <h6><?=$value['title']?></h6>
                            <p><?=$value['description']?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach?>


            </div>
        </div>
        <div class="flight_shouldcome">
            <div class="d-flex justify-content-between align-items-center">
                <div class="flight_map_text d-flex flex-column">
                    <h4>Các điểm đến bạn có thể đến ngay bây giờ</h4>
                    <p>Đối với những điểm đến có thể có lời khuyên du lịch hiện tại của cơ quan chức năng, chúng tôi
                        sẽ đưa vào các cảnh báo trên trang web của chúng tôi khi bạn tìm kiếm sẽ cho bạn biết có thể
                        có vấn đề với tuyến đường của bạn.</p>
                </div>

            </div>
            <div class="flight_shouldcome_slider mt-3 mb-40">
                <div class="overflow-hidden position-relative">
                    <button class="flight_shouldcome_img_prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="flight_shouldcome_img_next"><i class="fa-solid fa-chevron-right"></i></button>

                    <div class="row slider_js">
                        <?php foreach ($slide as $key => $value):?>
                        <div class="col-3 shouldcome_item_1">
                            <a href="">
                                <div class="flight_shouldcome_img"
                                    style="background-image: url('../upload/<?=$value['image']?>');">
                                </div>
                                <div class="flght_shouldcome_text">
                                    <h5><?=$value['title']?></h5>
                                    <p><?=$value['description']?></p>
                                </div>
                            </a>
                        </div>
                        <?php endforeach?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="/js/silderexp.js"></script>