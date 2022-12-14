<section class="home">
    <div class="text">Cập nhật thông tin tin tức</div>

    <main class="infor">
        <form action="index.php?action=updateNews" method="post" enctype="multipart/form-data">
            <label for="">ID</label>
            <br>
            <input type="number" name="id" disabled class="input-text">
            <br><br>

            <?php

            if (is_array($loadOneNews)) {
                extract($loadOneNews);

                $imgNews = "../upload/" . $imgNews;
                // var_dump($youtube);die;
                if (is_file($imgNews)) {
                    $imgNews = "../upload/" . $imgNews;
                    $img_image1 = "<img src='" . $imgNews . "' height='80'; width='100'>";
                } else {
                    $img_image1 = "No picture";
                } 
            }

            ?>

            <label for="">Ảnh</label>
            <br>
            <input type="file" name="imgNews" class="input-text">
            <br>
            <br>
            <?= $img_image1 ?>
            <br><br>

            <label for="">Tiêu đề</label>
            <br>
            <input type="text" name="contenNew" class="input-text" value="<?php if (isset($contenNew) && ($contenNew != "")) echo $contenNew; ?>">
            <br><br>

            <label for="">Ngày tạo</label>
            <br>
            <input type="text" name="dateNews" class="input-text" value="<?php if (isset($dateNews) && ($dateNews != "")) echo $dateNews; ?>">
            <br><br>

            <label for="">Nội dung</label>
            <br>
            <input type="text" name="descNew" class="input-text" value="<?php if (isset($descNew) && ($descNew != "")) echo $descNew; ?>">
            <br><br>

            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">

            <input name="updateNews" type="submit" value="CẬP NHẬT" class="btn-add" onclick="return confirm('Bạn có muốn cập nhật không ?')">

            <input type="reset" value="NHẬP LẠI" class="btn-reset">

            <a href="index.php?action=news"><input type="button" value="DANH SÁCH" class="btn-list"></a>
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