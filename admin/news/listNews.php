<section class="home">
    <div class="text">Tin tức</div>

    <article class="add-fix-delete">
        <a href="index.php?action=addNews"><input type="button" value="Nhập thêm" name="btn-add"></a>
    </article>

    <main class="sms">
        <table border=1>
            <tr>
                <th>STT</th>
                <th>Ảnh</th>
            
                <th>Tiêu đề</th>
                
                <th>Ngày tạo</th>
                <th>Nội dung</th>
                
                <th>Thao tác</th>
            </tr>

            <?php

            foreach ($loadAllNews as $loadAll) {
                extract($loadAll);

                $fixNews = "index.php?action=fixNews&id=" . $id;

                $deleteNews = "index.php?action=deleteNews&id=" . $id;

                $imgNews = "../upload/" . $imgNews;
                // var_dump($youtube);die;


                if (is_file($imgNews)) {
                    $imgNews = "../upload/" . $imgNews;
                    $img_image1 = "<img src='" . $imgNews . "' height='80'; width='100'>";
                } else {
                    $img_image1 = "No picture";
                }

                echo '
                        <tr>
                            <td>' . $id . '</td>
                            <td ">' . $img_image1 . '</td>

                            <td>' . $contenNew . '</td>

                            <td>' . $dateNews . '</td>

                            <td>' . $descNew . '</td>
                   
                            

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

