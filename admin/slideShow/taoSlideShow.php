<section class="home">
    <div class="text">Tạo Slide Show</div>

    <main class="infor">
        <form action="index.php?action=taoSlideShow" method="post" enctype="multipart/form-data">
            <label for="">Title</label>
            <br>
            <input type="text" name="title" class="input-text" required>
            <br><br>
            <label for="">Image</label>
            <br>
            <input type="file" name="img" class="input-text" required>
            <br>
            <br>
            <label for="">Nội dung</label>
            <br><br>
            <textarea name="description" id="" style="width:100%; height: 180px;"></textarea>
            <br><br>
            <input name="taoSlideShow" style="margin-left: 38%;" type="submit" class="btn-add" value="Tạo">
        </form>
    </main>
</section>
</div>

<script type="text/javascript" src="../js/admin.js"></script>