<section class="home">
    <div class="text">Danh sách Slide Show </div>
    <article class="add-fix-delete">
        <a href="index.php?action=addSlideShow"><input type="button" value="Tạo Slide" name="btn-add"></a>
    </article>
    <main class="sms">
        <table border=1>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Nội dung</th>
                <th>Thao tác</th>
            </tr>
            <?php
            foreach ($loadAllSlideshow as $loadAll) {
                extract($loadAll);
                $sua = "index.php?action=suaSlideshow&id=" . $id;
                $xoa ="index.php?action=xoaSlideshow&id=" . $id;
                echo '
                <tr>
                    <td>'.$title.'</td>
                    <td><img style="width:150px;height:150px;" src="../upload/'.$image.'" alt=""></td>
                    <td>'.$description.'</td>
                    <td><a href="' . $sua . '"><input type="button" value="Sửa" name="btn-fix" ></a>
                    <a href="' . $xoa . '"><input type="button" value="Xóa" name="btn-delete"></a></td>
                </tr>';
                }?>
        </table>

    </main>
</section>


</div>

<script type="text/javascript" src="../js/admin.js"></script>