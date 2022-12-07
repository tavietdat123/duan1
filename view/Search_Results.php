<?php
$notfound = false;
if (isset($_POST['check'])) {
    $s_from = $_POST['s_from'];
    $s_to = $_POST['s_to'];
    $timer_1 = $_POST['timer_1'];
    $timer_2 = $_POST['timer_2'];
    $s_quantity = $_POST['s_quantity'];
    if(isset($_POST['s_round_trip'])){
    $s_round_trip = "checked";
    $round_trip = 2;
    }else{
    $round_trip = 1;

    }
    if($s_quantity < 0){
        $s_quantity_err= "Số Lượng phải lớn hơn 0";
    }
    $s_seat = $_POST['s_seat'];
    $rows =  pdo_query("select * from flight where pointOfDeparture = '$s_from' and destination = '$s_to' and dateTime BETWEEN DATE('$timer_1') and DATE('$timer_2') and dateTime >= CURDATE()");
    
    $ticket_type = pdo_query("select * from ticket_type ");
}
?>
<div class="container_content">
    <div class="content">

        <div class="flight_search">
            <form action="index.php?action=sr" method="POST" class="flight_search_form mt-4">
                <div class="container_search_form p-2">
                    <div class="container_search_form_s">


                        <div class="search_from">
                            <label for="" class="d-flex align-items-center"><i class="fa-solid fa-plane me-2"></i>Từ:</label>
                            <input type="text" name="s_from" placeholder="from..." value="<?php if (isset($s_from)) {
                                                                                                echo $s_from;
                                                                                            } ?>">
                        </div>
                        <div class="search_to">
                            <label for="" class="d-flex align-items-center"><i class="fa-solid fa-plane me-2"></i>Đến:</label>
                            <input type="text" name="s_to" placeholder="To..." value="<?php if (isset($s_to)) {
                                                                                            echo $s_to;
                                                                                        } ?>">
                        </div>
                        <div class="search_from">
                            <label for="" class="d-flex align-items-center"><i class="fa-solid fa-arrow-down-9-1 me-2"></i> <p class="d-flex align-items-center" ><span class="me-1">Số </span>  <span>Vé: </span></p> </label>
                            <input type="number" name="s_quantity" value="<?=isset($s_quantity)? $s_quantity : ""?>" min="1" placeholder="Số Lượng Vé ..." required>
                        </div>
                    </div>
                    <div class="container_search_form_s mt-2">
                        <div class="search_timer">
                            <div class="search_timer_1">
                                <input type="datetime-local" name="timer_1" value="<?php if (isset($timer_1)) {
                                                                                        echo $timer_1;
                                                                                    } ?>">
                            </div>
                            <div class="search_timer_2">
                                <input type="datetime-local" value="<?php if (isset($timer_2)) {
                                                                        echo $timer_2;
                                                                    } ?>" name="timer_2">
                            </div>
                        </div>
                        <div class="search_seat">
                            <label for="" class="d-flex align-items-center"><i class="fa-solid fa-ticket"></i><span>Ghế:</span></label>
                            <select id="inputState" class="form-control" name="s_seat" required>
                                <?php foreach ($ticket_type as $key => $value) : ?>
                                    <option value="<?= $value['id'] ?>" <?= $s_seat == $value['id'] ? "selected" : ''; ?>><?= $value['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div> 
                        <div class="search_kh ms-1">
                            <label for="kh"><i class="fa-solid fa-check-to-slot"></i> Khứ hồi</label>
                            <input type="checkbox" class="form-check-input" name="s_round_trip" value="" <?=isset($s_round_trip) ? "checked" : ""?> id="kh" >
                        </div>
                    </div>

                </div>
                <div class="search_btn">
                    <button name="check">Tìm Kiếm</button>
                </div>
            </form>
            <p class="mt-2" style="color: #fff;font-size:14px;"><?=isset($s_quantity_err) ? $s_quantity_err : ""?></p>
        </div>
        <div class="sr_container ">
            
                <?php foreach ($rows as $key => $value) : ?>
                    <?php $flight_id = $value['id'];
                    $ticket = pdo_query("select * from ticket where flight_id = $flight_id and type_ticket_id = $s_seat and round_trip = $round_trip"); 
                    if ($ticket != []) {
                        $notfound = true;
                    }
                    ?>
                    <?php if ($notfound) : ?>
                    <?php foreach ($ticket as $key => $value2) : ?>
                        <?php if ($value2['status'] == 1) : ?>
                            <div class="sr_bd d-flex align-items-center justify-content-between bg-light mb-3">
                                <div class="sr_content d-flex align-items-center justify-content-between flex-grow-1">
                                    <div><img class="sr_img" src="img/<?= $value2['company_img'] ?>" alt=""></div>
                                    <div class="flex-grow-1 d-flex flex-column ps-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="sr_company_name"><span>Hãng: <?= $value2['company'] ?></span></div>

                                            <div class="sr_time"><span>Thời gian khởi hành: <?= $value['dateTime'] ?></span>
                                            </div>


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
                                    <div class="sr_price_main"><span>Giá: <?= $value2['price'] ?>$</span></div>
                                    <a class="btn btn-primary" href="index.php?action=booking&id=<?= $value2['id'] ?>&$qt=<?=$s_quantity?>">Đặt vé</a>
                                </div>
                            </div>
                        <?php endif ?>
                        <?php if ($value2['status'] == 2) : ?>
                            <div class="sr_bd d-flex align-items-center justify-content-between bg-light mb-3 p-4">
                                Không tìm thấy sản phẩm nào
                            </div>
                        <?php endif ?>

                    <?php endforeach ?>
            <?php endif ?>

                <?php endforeach ?>
            <?php if (!$notfound) : ?>
                <div class="sr_bd d-flex align-items-center justify-content-between bg-light mb-3 p-4">
                    Không tìm thấy sản phẩm nào
                </div>
            <?php endif ?>
        </div>
    </div>
</div>