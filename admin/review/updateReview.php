<section class="home">
    <div class="text">Cập nhật thông tin giới thiệu Website</div>

    <main class="infor">
    <form action="index.php?action=updateReview" method="post" enctype="multipart/form-data">
            <label for="">ID</label>
            <br>
            <input type="number" name="id" disabled class="input-text">
            <br><br>

            <label for="">Nội dung</label>
            <br>
            <input type="text" name="review" class="input-text" value="<?php if (isset($review) && ($review != "")) echo $review; ?>">
            <br><br>

            <label for="">Tầm nhìn</label>
            <br>
            <input type="text" name="vision" class="input-text" value="<?php if (isset($vision) && ($vision != "")) echo $vision; ?>">
            <br><br>

            <label for="">Sứ mệnh</label>
            <br>
            <input type="text" name="mission" class="input-text" value="<?php if (isset($mission) && ($mission != "")) echo $mission; ?>">
            <br><br>

            <label for="">Giá trị cốt lõi</label>
            <br>
            <input type="text" name="core_values" class="input-text" value="<?php if (isset($core_values) && ($core_values != "")) echo $core_values; ?>">
            <br><br>

            <label for="">Sp của chúng tôi</label>
            <br>
            <input type="text" name="our_products" class="input-text" value="<?php if (isset($our_products) && ($our_products != "")) echo $our_products; ?>">
            <br><br>

            <label for="">Kinh nghiệm chuyên môn</label>
            <br>
            <input type="text" name="professional_experience" class="input-text" value="<?php if (isset($professional_experience) && ($professional_experience != "")) echo $professional_experience; ?>">
            <br><br>

            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">

           <input name="updateReview" type="submit" value="CẬP NHẬT" class="btn-add" onclick="return confirm('Bạn có muốn cập nhật không ?')">

            <input type="reset" value="NHẬP LẠI" class="btn-reset" onclick="return confirm('Bạn có muốn nhập lại không ?')">

            <a href="index.php?action=review"><input type="button" value="DANH SÁCH" class="btn-list"></a>
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