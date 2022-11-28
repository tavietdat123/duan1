<section class="home">
    <div class="text">Cập nhật thông tin tài khoản thành viên</div>

    <main class="infor">
        <form action="index.php?action=updateMember" method="post" enctype="multipart/form-data">
            <label for="">ID</label>
            <br>
            <input type="number" name="id" disabled class="input-text"
                value="<?php if (isset($id) && ($id != "")) echo $id; ?>">
            <br><br>

            <label for="">Họ và tên</label>
            <br>
            <input type=" text" name="fullName" class="input-text"
                value="<?php if (isset($fullName) && ($fullName != "")) echo $fullName; ?>">
            <br><br>

            <label for="">Mật khẩu</label>
            <br>
            <input type="text" name="passWord" class="input-text"
                value="<?php if (isset($passWord) && ($passWord != "")) echo $passWord; ?>">
            <br><br>

            <label for="">Email</label>
            <br>
            <input type="email" name="email" class="input-text"
                value="<?php if (isset($email) && ($email != "")) echo $email; ?>">
            <br><br>

            <label for="">Chức vụ</label>
            <br>
            <?php
            
            $check_role =''; 
            if($role == 0){
            $check_role = 'Admin';
        }else if($role == 1){
            $check_role = 'Thành viên';
        }
            ?>
            <input type="text" name="check_role" class="input-text"
                value="<?php if (isset($role) && ($role != "")) echo $check_role; ?>">
            <br><br>

            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">

            <input name="updateMember" type="submit" value="CẬP NHẬT" class="btn-add"
                onclick="return confirm('Bạn có muốn cập nhật không ?')">

            <input type="reset" value="NHẬP LẠI" class="btn-reset">

            <a href="index.php?action=listMembers"><input type="button" value="DANH SÁCH" class="btn-list"></a>
            <br><br>

            <?php
            if (isset($thongbao) && ($thongbao))
                echo $thongbao;
            ?>

        </form>
    </main>
</section>
</div>

<script type="text/javascript" src="../js/admin.js"></script>