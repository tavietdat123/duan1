<section class="home">
    <div class="text">Thêm thông tin giới thiệu Website</div>

    <main class="infor">
    <form action="index.php?action=addReview" method="post" enctype="multipart/form-data">
            <label for="">ID</label>
            <br>
            <input type="number" name="id" disabled class="input-text">
            <br><br>

            <label for="">Nội dung</label>
            <br>
            <textarea type="text" name="review" class="input-text" cols="70" rows="10" style="padding: 10px"></textarea>
            <br><br>

            <label for="">Tầm nhìn</label>
            <br>
            <textarea type="text" name="vision" class="input-text" cols="70" rows="10" style="padding: 10px"></textarea>
            <br><br>

            <label for="">Sứ mệnh</label>
            <br>
            <textarea type="text" name="mission" class="input-text" cols="70" rows="10" style="padding: 10px"></textarea>
            <br><br>

            <label for="">Giá trị cốt lõi</label>
            <br>
            <textarea type="text" name="core_values" class="input-text" cols="70" rows="10" style="padding: 10px"></textarea>
            <br><br>

            <label for="">Sp của chúng tôi</label>
            <br>
            <textarea type="text" name="our_products" class="input-text" cols="70" rows="10" style="padding: 10px"></textarea>
            <br><br>

            <label for="">Kinh nghiệm chuyên môn</label>
            <br>
            <textarea type="text" name="professional_experience" class="input-text" cols="70" rows="10" style="padding: 10px"></textarea>
            <br><br>

           <input name="addReview" type="submit" value="THÊM MỚI" class="btn-add">

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