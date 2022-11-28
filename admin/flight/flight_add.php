<?php 
if(isset($_POST['check'])){
  $fl_from = $_POST['fl_from'];
  $fl_to = $_POST['fl_to'];
  $fl_date = $_POST['fl_date'];
  if($fl_from == ''){
    $fl_from_er = "Bạn cần phải nhập trường này! ";
  }
  if($fl_to == ''){
    $fl_to_er = "Bạn cần phải nhập trường này! ";
  }
  if($fl_date == ''){
    $fl_date_er = "Bạn cần phải nhập trường này! ";
  }
  if (!isset($fl_from_er) && !isset($fl_to_er) && !isset($fl_date_er)) {
    flight_insert($fl_from,$fl_to,$fl_date);
    echo"<script>
        location.href = '/admin/index.php?action=flight'
    </script>";
    
  }

}
?>
<section class="home ps-5 pe-5 pb-5">
<div class="text">Thêm chuyến bay</div>
<div class="ps-5 pe-5 pb-5">
<form id="bookingForm" action="" method="post" class="needs-validation ps-5 pe-5 pb-5" novalidate autocomplete="off">
        <!-- Start Input Name -->
        <div class="form-group">
          <label for="inputName">Điểm khởi hành</label>
          <input type="text" class="form-control input_d" id="inputName" name="fl_from" value="<?= isset($fl_from) ? $fl_from:''?>" placeholder="From ..." required />
          <small class="form-text text-danger"><?= isset($fl_from_er) ? $fl_from_er:''?></p></small>
        </div>
        <!-- End Input Name -->

        <!-- Start Input Email -->
        <div class="form-group mt-4">
          <label for="inputEmail">Điểm đến</label>
          <input type="email" class="form-control input_d" id="inputEmail" name="fl_to" value="<?= isset($fl_to) ? $fl_to:''?>" placeholder="To ..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
          <small class="form-text text-danger"><?= isset($fl_to_er) ? $fl_to_er:''?></p></small>
        </div>
        <div class="form-group mt-4">
          <label for="inputEmail">Thời gian</label>
          <input type="datetime-local" class="form-control input_d" value="<?= isset($fl_date) ? $fl_date:''?>" id="inputEmail" name="fl_date" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
          <small class="form-text text-danger"><?= isset($fl_date_er) ? $fl_date_er:''?></p></small>
        </div>
        <div><button class="btn btn-success pe-5 ps-5 mt-4" name="check">Tạo Mới</button> <a href="/admin/index.php?action=flight" class="btn btn-primary pe-5 ps-5 mt-4 ms-3" >Quay Lại</a></div>
</form>
</div>
</section>
