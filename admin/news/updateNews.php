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

                $image1 = "../upload/" . $image1;
                // var_dump($youtube);die;
                if (is_file($image1)) {
                    $image1 = "../upload/" . $image1;
                    $img_image1 = "<img src='" . $image1 . "' height='80'; width='100'>";
                } else {
                    $img_image1 = "No picture";
                } 
            }

            if (is_array($loadOneNews)) {
                extract($loadOneNews);
                $image2 = "../upload/" . $image2;

                if (is_file($image2)) {
                    $image2 = "../upload/" . $image2;
                    $img_image2 = "<img src='" . $image2 . "' height='80'; width='100'>";
                } else {
                    $img_image2 = "No picture";
                }
            }

            if (is_array($loadOneNews)) {
                extract($loadOneNews);

                $image3 = "../upload/" . $image3;


                if (is_file($image3)) {
                    $image3 = "../upload/" . $image3;
                    $img_image3 = "<img src='" . $image3 . "' height='80'; width='100'>";
                } else {
                    $img_image3 = "No picture";
                }
            }

            ?>

            <label for="">Tiêu đề</label>
            <br>
            <input type="text" name="title" class="input-text" value="<?php if (isset($title) && ($title != "")) echo $title; ?>">
            <br><br>

            <label for="">Ảnh 1</label>
            <br>
            <input type="file" name="image1" class="input-text">
            <br>
            <br>
            <?= $img_image1 ?>
            <br><br>

            <label for="">Ảnh 2</label>
            <br>
            <input type="file" name="image2" class="input-text">
            <br>
            <br>
            <?= $img_image2 ?>
            <br><br>

            <label for="">Ảnh 3</label>
            <br>
            <input type="file" name="image3" class="input-text">
            <br>
            <br>
            <?= $img_image3 ?>
            <br><br>

            <label for="">Nội dung 1</label>
            <br>
            <input type="text" name="content1" class="input-text" value="<?php if (isset($content1) && ($content1 != "")) echo $content1; ?>">
            <br><br>

            <label for="">Nội dung 2</label>
            <br>
            <input type="text" name="content2" class="input-text" value="<?php if (isset($content2) && ($content2 != "")) echo $content2; ?>">
            <br><br>

            <label for="">Nội dung 3</label>
            <br>
            <input type="text" name="content3" class="input-text" value="<?php if (isset($content3) && ($content3 != "")) echo $content3; ?>">
            <br><br>

            <label for="">Ngày tạo tin</label>
            <br>
            <input type="text" name="created_at" class="input-text" value="<?php if (isset($created_at) && ($created_at != "")) echo $created_at; ?>">
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