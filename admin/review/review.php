<section class="home">
    <div class="text">Giới thiệu Website</div>

    <main class="sms">
        <table border=1>
            <tr>
                <th>STT</th>
                <th>Nội dung</th>
                <th>Tầm nhìn</th>
                <th>Sứ mệnh</th>
                <th>Giá trị cốt lõi</th>
                <th>Sp của chúng tôi</th>
                <th>Kinh nghiệm chuyên môn</th>
                <th>Thao tác</th>
            </tr>

            <?php

            foreach ($loadAllReview as $loadAll) {
                extract($loadAll);

                $fixReview = "index.php?action=fixReview&id=" . $id;

                $deleteReview = "index.php?action=deleteReview&id=" . $id;

                echo '
                        <tr>
                            <td>' . $id . '</td>
                            <td>' . $review . '</td>
                            <td>' . $vision . '</td>
                            <td>' . $mission . '</td>
                            <td>' . $core_values . '</td>
                            <td>' . $our_products . '</td>
                            <td>' . $professional_experience . '</td>

                            <td><a href="' . $fixReview . '"><input type="button" value="Sửa" name="btn-fix"></a>
                            <a href="' . $deleteReview . '"><input type="button" value="Xóa" name="btn-delete" ></a></td>
                        
                        </tr>
                    ';
            }
            ?>
        </table>
    </main>

    <article class="add-fix-delete">
        <a href="index.php?action=addReview"><input type="button" value="Nhập thêm" name="btn-add"></a>
    </article>
</section>


</div>



<script type="text/javascript" src="../js/admin.js"></script>