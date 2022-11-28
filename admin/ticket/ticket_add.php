<?php
if (isset($_POST['check'])) {
    $company = $_POST['company'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $flight = $_POST['flight'];
    $type_ticket_id = $_POST['type_ticket_id'];
    $status = $_POST['status'];
    $company_img = $_FILES['company_img'];
    var_dump($company_img);
    if ($company == '') {
        $company_er = "Bạn cần phải nhập trường này! ";
    }
    if ($price == '') {
        $price_er = "Bạn cần phải nhập trường này! ";
    }else if ($price < 0 ) {
        $price_er = "Bạn Cần Phải nhập số dương";
    }
    if ($quantity == '') {
        $quantity_er = "Bạn cần phải nhập trường này! ";
    }else if ($quantity <= 0 ) {
        $quantity_er = "Bạn Cần Phải nhập số dương";
    }
    if ($type_ticket_id == '') {
        $type_ticket_id_er = "Bạn cần phải nhập trường này! ";
    }
    if ($flight == '') {
        $flight_er = "Bạn cần phải nhập trường này! ";
    }
    if ($company_img['size'] > 0) {
        $ext = pathinfo($company_img['name'], PATHINFO_EXTENSION);
        if ($ext != "png" && $ext != "jpg" && $ext != "jpeg" && $ext != "gif") {
            $company_img_er = "File không đúng định dạng";
        }
    } else {
        $company_img_er = "Bạn chưa nhập ảnh";
    }
    if(!isset($company_er) && !isset($price_er) && !isset($quantity_er) && !isset($type_ticket_id_er) && !isset($flight_er) && !isset($company_img_er) ){
        $img_logo = $company_img['name'];
        ticket_insert($price,$company,$img_logo,$status,$type_ticket_id,$quantity,$flight);
        echo$company_img['tmp_name'];
        move_uploaded_file($company_img['tmp_name'] , '../img/'.$img_logo);
        echo "<script>
        location.href = '/admin/index.php?action=ticket'
    </script>";
    }
}
$type_ticket_all =  selectAllTicket_type();
$flight_all = flight_select_all();
?>
<section class="home ps-5 pe-5 pb-5">
    <div class="text">Thêm chuyến bay</div>
    <div class="ps-5 pe-5 pb-5">
        <form id="bookingForm" action="" method="post" enctype="multipart/form-data" class="ps-5 pe-5 pb-5" >
            <!-- Start Input Name -->
            <div class="form-group">
                <label for="inputName1">Tên hãng</label>
                <input type="text" class="form-control input_d" id="inputName1" name="company" value="<?= isset($company) ? $company : '' ?>" placeholder="From ..."  />
                <small class="form-text text-danger"><?= isset($company_er) ? $company_er : '' ?></p></small>
            </div>

            <!-- Start Input Email -->
            <div class="form-group mt-4">
                <label for="inputEmail2">Logo</label>
                <input type="file" class=" input_d"  name="company_img" />
                <small class="form-text text-danger"><?= isset($company_img_er) ? $company_img_er : '' ?></p></small>
                </div>
          

            <div class="form-group mt-2">
                <label for="inputEmail3">Giá</label>
                <input type="number" class="form-control input_d" id="inputEmail3" name="price" value="<?= isset($price) ? $price : '' ?>" placeholder="To ..." />
                <small class="form-text text-danger"><?= isset($price_er) ? $price_er : '' ?></p></small>
            </div>



            <div class="form-group mt-4">
                <label for="">Trạng Thái</label>
                <select class="form-control input_d" name="status" >
                    <option value="1" selected>Còn</option>
                    <option value="2">Hết</option>
                </select>
                <small class="form-text text-danger"><?= isset($status_er) ? $status_er : '' ?></p></small>
            </div>
            <div class="form-group mt-4">
                <label for="">Loại vé</label>
                <select class="form-control input_d" name="type_ticket_id">
                    <option value=""></option>
                    <?php foreach ($type_ticket_all as $key => $value):?>
                    <option value="<?=$value['id']?>"><?=$value['name']?></option>
                    <?php endforeach?>
                </select>
                <small class="form-text text-danger"><?= isset($type_ticket_id_er) ? $type_ticket_id_er : '' ?></p></small>
            </div>
            <div class="form-group mt-4">
                <label for="">Chuyến bay</label>
                <select class="form-control input_d" name="flight">
                    <option value="" ></option>
                    <?php foreach ($flight_all as $key => $value):?>
                    <option value="<?=$value['id']?>"><?="Từ: ".$value['pointOfDeparture']."=> Đến: ".$value['destination']." == ".$value['dateTime']?></option>
                    <?php endforeach?>
                </select>
                <small class="form-text text-danger"><?= isset($flight_er) ? $flight_er : '' ?></p></small>
            </div>

            <div class="form-group mt-4">
                <label for="inputEmail5">Số Lượng</label>
                <input type="number" class="form-control input_d" id="inputEmail5" name="quantity" value="<?= isset($quantity) ? $quantity : '' ?>" placeholder="To ..." />
                <small class="form-text text-danger"><?= isset($quantity_er) ? $quantity_er : '' ?></p></small>
            </div>

            <div><button class="btn btn-success pe-5 ps-5 mt-4" name="check">Tạo Mới</button> 
            <a href="/admin/index.php?action=ticket" class="btn btn-primary pe-5 ps-5 mt-4 ms-3" >Quay Lại</a></div>
        </form>
    </div>
</section>