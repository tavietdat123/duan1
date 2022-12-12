<section class="home">
    <div class="text" style="margin-left:-1% ;">Cập nhật Slide Show</div>

    <main class="infor">
        <form action="index.php?action=updateSlideshow" method="post" enctype="multipart/form-data">
            <input type="number" name="id" class="input-text" value="<?php if (isset($id) && ($id != "")) echo $id; ?>">
            <label for="">Image</label>
            <br>
            <input type="hidden" name="imgup" class="input-text"
                value="<?php if (isset($image) && ($image != "")) echo $image; ?>">
            <input type="file" name="img" class="input-text">
            <br>
            <br>
            <img style="width:150px;height:150px;"
                src="../upload/<?php if (isset($image) && ($image != "")) echo $image; ?>" alt="">
            <br>
            <br>
            <label for="">Title</label>
            <input type="text" name="title" class="input-text"
                value="<?php if (isset($title) && ($title != "")) echo $title; ?>">
            <br>
            <br>
            <label for="">Nội dung</label>
            <br>
            <textarea name="description"
                style="width: 100%;height: 180px;"><?php if (isset($description) && ($description != "")) echo $description; ?></textarea>
            <br>
            <br>
            <input name="updateSlideshow" style="margin-left: 33%;margin-bottom:50px ;width: 150px;" type="submit"
                class="btn-add" value="Cập nhật ưu đãi" onclick="return confirm('Bạn có muốn cập nhật không ?')">
        </form>
    </main>
</section>
</div>

<script type="text/javascript" src="../js/admin.js"></script>