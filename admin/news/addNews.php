<section class="home">
    <div class="text">Thêm thông tin tin tức</div>

    <main class="infor">
    <form action="index.php?action=addNews" method="post" enctype="multipart/form-data">
            <label for="">ID</label>
            <br>
            <input type="number" name="id" disabled class="input-text">
            <br><br>

            <label for="">Ảnh 1</label>
            <br>
            <input type="file" name="imgNews" class="input-text">
            <br><br>
            
            <label for="">Tiêu đề</label>
            <br>
            <input type="text" name="contenNew" class="input-text">
            <br><br>

            
            <label for="">Ngày tạo</label>
            <br>
            <input type="text" name="dateNews" disabled class="input-text">
            <br><br>
            
            <label for="">Nội dung</label>
            <br>
            <input type="text" name="descNew" class="input-text">
            <br><br>
           <input name="addNews" type="submit" value="THÊM MỚI" class="btn-add">

            <input type="reset" value="NHẬP LẠI" class="btn-reset">

            <a href="index.php?action=news"><input type="button" value="DANH SÁCH" class="btn-list"></a>
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