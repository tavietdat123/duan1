<section class="home">
    <div class="text" style="margin-left:-1% ;">Cập nhật trải nghiệm</div>

    <main class="infor">
        <form action="index.php?action=updateExperience" method="post" enctype="multipart/form-data">
            <input type="number" name="id" class="input-text" value="<?php if (isset($id) && ($id != "")) echo $id; ?>">
            <label for="">Image</label>
            <br>
            <input type="hidden" name="imgup" class="input-text"
                value="<?php if (isset($imgEx) && ($imgEx != "")) echo $imgEx; ?>">
            <input type="file" name="image" class=" input-text">
            <br><br>
            <img style="width:150px;height:150px;"
                src="../upload/<?php if (isset($imgEx) && ($imgEx != "")) echo $imgEx; ?>" alt="">
            <br>
            <br>
            <label for="">Title</label>
            <br>
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
            <input name="updateExperience" style="margin-left: 33%;margin-bottom:50px ;width: 150px;" type="submit"
                class="btn-add" value="Cập nhật ưu đãi" onclick="return confirm('Bạn có muốn cập nhật không ?')">
        </form>
    </main>
</section>
</div>

<script type="text/javascript" src="../js/admin.js"></script>