<section class="home">
    <div class="text">Thông tin Website</div>

    <article class="add-fix-delete">
        <a href="index.php?action=addNews"><input type="button" value="Nhập thêm" name="btn-add"></a>
    </article>

    <main class="sms">
        <table border=1>
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>Ảnh 1</th>
                <th>Ảnh 2</th>
                <th>Ảnh 3</th>
                <th>Nội dung 1</th>
                <th>Nội dung 2</th>
                <th>Nội dung 3</th>
                <th>Ngày tạo tin</th>
                
                <th>Thao tác</th>
            </tr>

            <?php

            foreach ($loadAllNews as $loadAll) {
                extract($loadAll);

                $fixNews = "index.php?action=fixNews&id=" . $id;

                $deleteNews = "index.php?action=deleteNews&id=" . $id;

                $image1 = "../upload/" . $image1;
                $image2 = "../upload/" . $image2;
                $image3 = "../upload/" . $image3;
                // var_dump($youtube);die;


                if (is_file($image1)) {
                    $image1 = "../upload/" . $image1;
                    $img_image1 = "<img src='" . $image1 . "' height='80'; width='100'>";
                } else {
                    $img_image1 = "No picture";
                }

                if (is_file($image2)) {
                    $image2 = "../upload/" . $image2;
                    $img_image2 = "<img src='" . $image2 . "' height='80'; width='100'>";
                } else {
                    $img_image2 = "No picture";
                }

                if (is_file($image3)) {
                    $image3 = "../upload/" . $image3;
                    $img_image3 = "<img src='" . $image3 . "' height='80'; width='100'>";
                } else {
                    $img_image3 = "No picture";
                }

                echo '
                        <tr>
                            <td>' . $id . '</td>
                            <td>' . $title . '</td>
                            <td ">' . $img_image1 . '</td>

                            <td>' . $img_image2 . '</td>
                            <td>' . $img_image3 . '</td>
                            <td>' . $content1 . '</td>

                            <td>' . $content2 . '</td>

                            <td>' . $content3 . '</td>
                            <td>' . $created_at . '</td>
                            

                            <td><a href="' . $fixNews . '"><input type="button" value="Sửa" name="btn-fix"></a>
                            <a href="' . $deleteNews . '"><input type="button" value="Xóa" name="btn-delete" ></a></td>
                        
                        </tr>
                    ';
            }
            ?>
        </table>
    </main>


</section>


</div>



<script type="text/javascript" src="../js/admin.js"></script>

