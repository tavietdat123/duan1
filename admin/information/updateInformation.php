<section class="home">
    <div class="text">Cập nhật thông tin website</div>

    <main class="infor">
        <form action="index.php?action=updateInfor" method="post" enctype="multipart/form-data">
            <label for="">ID</label>
            <br>
            <input type="number" name="id" disabled class="input-text">
            <br><br>

            <?php

            if (is_array($loadOneInformation)) {
                extract($loadOneInformation);

                $logo = "../upload/" . $logo;

                if (is_file($logo)) {
                    $logo = "../upload/" . $logo;

                    $img_logo = "<img src='" . $logo . "' height='80'>";
                } else {
                    $img_logo = "No image logo";
                }
            }

            ?>

            <label for="">Logo</label>
            <br>
            <input type="file" name="logo" class="input-text">
            <br>
            <br>
            <?= $img_logo ?>
            <br><br>

            <label for="">Url_Website</label>
            <br>
            <input type="text" name="url_Website" class="input-text" value="<?php if (isset($url_website) && ($url_website != "")) echo $url_website; ?>">
            <br><br>

            <label for="">Số điện thoại</label>
            <br>
            <input type="number" name="tell" class="input-text" value="<?php if (isset($tell) && ($tell != "")) echo $tell; ?>">
            <br><br>

            <label for="">Email</label>
            <br>
            <input type="email" name="email" class="input-text" value="<?php if (isset($email) && ($email != "")) echo $email; ?>">
            <br><br>

            <label for="">Địa chỉ</label>
            <br>
            <input type="text" name="address" class="input-text" value="<?php if (isset($address) && ($address != "")) echo $address; ?>">
            <br><br>

            <label for="">url_Facebook</label>
            <br>
            <input type="text" name="facebook" class="input-text" value="<?php if (isset($facebook) && ($facebook != "")) echo $facebook; ?>">
            <br><br>

            <label for="">url_Instagram</label>
            <br>
            <input type="text" name="instagram" class="input-text" value="<?php if (isset($instagram) && ($instagram != "")) echo $instagram; ?>">
            <br><br>

            <label for="">url_Youtube</label>
            <br>
            <input type="text" name="youtube" class="input-text" value="<?php if (isset($youtube) && ($youtube != "")) echo $youtube; ?>">
            <br><br>

            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">

            <input name="updateInfor" type="submit" value="CẬP NHẬT" class="btn-add" onclick="return confirm('Bạn có muốn cập nhật không ?')">

            <input type="reset" value="NHẬP LẠI" class="btn-reset">

            <a href="index.php?action=information"><input type="button" value="DANH SÁCH" class="btn-list"></a>
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