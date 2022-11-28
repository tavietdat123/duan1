<?php 
if(isset($_POST['check'])){
  $name = $_POST['name'];
  $type_id = $_POST['type_id'];
  
  if($name == ''){
    $name_er = "Bạn cần phải nhập trường này! ";
  }
  if (!isset($name_er) ) {
    type_ticket_update($name,$type_id);
    echo"<script>
        location.href = '/admin/index.php?action=ticket_type'
    </script>";
    
  }

}
$id = $_GET['id'];
$row = selectOneTicket_type($id);
?>
<section class="home ps-5 pe-5 pb-5">
<div class="text">Thêm chuyến bay</div>
<div class="ps-5 pe-5 pb-5">
<form id="bookingForm" action="" method="post" class="needs-validation ps-5 pe-5 pb-5" novalidate autocomplete="off">
        <!-- Start Input Name -->
        <input name="type_id" type="hidden" value="<?=$row['id'] ?>">
        <div class="form-group">
          <label for="inputName">Tên Loại vé</label>
          <input type="text" class="form-control input_d" id="inputName" name="name" value="<?= $row['name']?>" placeholder="Loại..." required />
          <small class="form-text text-danger"><?= isset($name_er) ? $name_er:''?></p></small>
        </div>
        <div><button class="btn btn-success pe-5 ps-5 mt-4" name="check">Tạo Mới</button> <a href="/admin/index.php?action=ticket_type" class="btn btn-primary pe-5 ps-5 mt-4 ms-3" >Quay Lại</a></div>
</form>
</div>
</section>