<section class="home">
    <div class="text">Danh sách trải nghiệm </div>
    <article class="add-fix-delete">
        <a href="index.php?action=addExperience"><input type="button" value="Thêm" name="btn-add"></a>
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
            foreach ($loadAllExperience as $loadAll) {
                extract($loadAll);
                $sua = "index.php?action=suaExperience&id=" . $id;
                $xoa ="index.php?action=xoaExperience&id=" . $id;
                echo '
                <tr>
                    <td>'.$title.'</td>
                    <td><img style="width:150px;height:150px;" src="../upload/'.$imgEx.'" alt=""></td>
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
</section>


</div>

<script type="text/javascript" src="../js/admin.js"></script>