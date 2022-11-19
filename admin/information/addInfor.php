<section class="home">
    <div class="text">Thêm thông tin Website</div>

    <main class="infor">
    <form action="index.php?action=addInfor" method="post" enctype="multipart/form-data">
            <label for="">ID</label>
            <br>
            <input type="number" name="id" disabled class="input-text">
            <br><br>

            <label for="">Logo</label>
            <br>
            <input type="file" name="logo" class="input-text">
            <br><br>

            <label for="">Url_Website</label>
            <br>
            <input type="text" name="url_Website" class="input-text">
            <br><br>

            <label for="">Số điện thoại</label>
            <br>
            <input type="number" name="tell" class="input-text">
            <br><br>

            <label for="">Email</label>
            <br>
            <input type="email" name="email" class="input-text">
            <br><br>

            <label for="">Địa chỉ</label>
            <br>
            <input type="text" name="address" class="input-text">
            <br><br>

            <label for="">img_Facebook</label>
            <br>
            <input type="file" name="facebook" class="input-text">
            <br><br>

            <label for="">img_Instagram</label>
            <br>
            <input type="file" name="instagram" class="input-text">
            <br><br>

            <label for="">img_Youtube</label>
            <br>
            <input type="file" name="youtube" class="input-text">
            <br><br>

           <input name="addInfor" type="submit" value="THÊM MỚI" class="btn-add">

            <input type="reset" value="NHẬP LẠI" class="btn-reset">

            <a href="index.php?action=information"><input type="button" value="DANH SÁCH" class="btn-list"></a>
            <br><br>

            <?php
                if(isset($thongbao)&&($thongbao))
                echo $thongbao;
            ?>

        </form>
    </main>
</section>
</div>

<script type="text/javascript" src="../js/admin.js"></script>