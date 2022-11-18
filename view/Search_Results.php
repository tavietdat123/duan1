<?php 
$notfound = false;
if(isset($_POST['check'])){
    $s_from = $_POST['s_from'];
    $s_to = $_POST['s_to'];
    $timer_1 = $_POST['timer_1'];
    $timer_2 = $_POST['timer_2'];
    $rows=  pdo_query("select * from flight where pointOfDeparture = '$s_from' and destination = '$s_to' and dateTime BETWEEN DATE('$timer_1') and DATE('$timer_2')");
    if($rows != []){
        $notfound = true;
    }
}
?>
<div class="container_content">
        <div class="content">
          
            <div class="flight_search">
                <form action="index.php?action=sr" method="POST" class="flight_search_form mt-4">
                    <div class="container_search_form">
                        <div class="container_search_form_s">

                       
                        <div class="search_from">
                            <label for=""><i class="fa-solid fa-plane"></i></label>
                            <input type="text" name="s_from" placeholder="from..." value="<?php if(isset($s_from)){ echo$s_from;} ?>">
                        </div>
                        <div class="search_swap">
                            <i class="fa-solid fa-right-left"></i>
                        </div>
                        <div class="search_to">
                            <label for=""><i class="fa-solid fa-plane"></i></label>
                            <input type="text" name="s_to" placeholder="To..." value="<?php if(isset($s_to)){ echo$s_to;} ?>">
                        </div>
                        <div class="search_timer">
                            <div class="search_timer_1">
                                <input type="date" name="timer_1" value="<?php if(isset($timer_1)){ echo$timer_1;} ?>">
                            </div>

                            <div class="search_timer_2" >
                                <input type="date" value="<?php if(isset($timer_2)){ echo$timer_2;} ?>" name="timer_2">
                            </div>

                           </div>
                        </div>
                    </div>
                    <div class="search_btn">
                        <button name="check">Tìm Kiếm</button>
                    </div>
                </form>

        </div>
        <div class="sr_container ">
            <?php if($notfound): ?>
            <?php foreach ($rows as $key => $value):?>
            <div class="sr_bd d-flex align-items-center justify-content-between bg-light mb-3">
                <div class="sr_content d-flex align-items-center justify-content-between flex-grow-1">
                    <div><img class="sr_img" src="https://content.r9cdn.net/rimg/provider-logos/airlines/v/QH.png?crop=false&width=108&height=92&fallback=default1.png&_v=5c206971a39878302cc80603fe5545d9" alt=""></div>
                    <div class="flex-grow-1 d-flex flex-column ps-4">
                        <div class="d-flex align-items-center justify-content-between">
                    <div class="sr_company_name"><span>Hãng: <?= $value['companyName'] ?></span></div>
                    <div class="">
                     <span>Loại: <?= $value['ticketType'] ?></span>
                    </div>
                    <div class="sr_time"><span>Thời gian khởi hành: <?= $value['dateTime'] ?></span>
                    </div>
                    
                    <div class="sr_status"><?= $value['status'] ?></div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                    <div class="sr_from"><span>Từ: <?= $value['pointOfDeparture'] ?></span></div>
                    
                    <div class="sr_to">
                     <span>Đến: <?= $value['destination'] ?></span>
                    </div>
                    </div>
                    </div>
                </div>
                <div class="sr_price ">
                    <div class="sr_price_main"><span>Giá: <?= $value['price'] ?>$</span></div>
                    <a class="btn btn-primary" href="">Đặt vé</a>
                </div>
            </div>
            <?php endforeach ?>
            <?php endif ?>
            <?php if(!$notfound):?>
                <div class="sr_bd d-flex align-items-center justify-content-between bg-light mb-3 p-4">
                Không tìm thấy sản phẩm nào
            </div>
            <?php endif ?>
            
           

           
        </div>
        </div>
    </div>