<section class="home">
    <div class="text">Thông tin Website</div>

    <main class="sms">
        <table border=1>
            <tr>
                <th>STT</th>
                <th>Logo</th>
                <th>Url_Website</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>url_Facebook</th>
                <th>url_Instagram</th>
                <th>url_YouTube</th>
                <th>Thao tác</th>
            </tr>

            <?php

            foreach ($loadAllInformation as $loadAll) {
                extract($loadAll);

                $fix_infor = "index.php?action=fix_infor&id=" . $id;

                $delete_infor = "index.php?action=delete_infor&id=" . $id;

                $logo = "../upload/" . $logo;
                // var_dump($youtube);die;


                if (is_file($logo)) {
                    $logo = "../upload/" . $logo;
                    $img_logo = "<img src='" . $logo . "' height='80'; width='100'>";
                } else {
                    $img_logo = "No img logo";
                }

                echo '
                        <tr>
                            <td>' . $id . '</td>
                            <td>' . $img_logo . '</td>
                            <td ">' . $url_website . '</td>

                            <td>' . $tell . '</td>
                            <td>' . $email . '</td>
                            <td>' . $address . '</td>

                            <td>' . $facebook . '</td>

                            <td>' . $instagram . '</td>

                            <td>' . $youtube . '</td>

                            <td><a href="' . $fix_infor . '"><input type="button" value="Sửa" name="btn-fix"></a>
                            <a href="' . $delete_infor . '"><input type="button" value="Xóa" name="btn-delete" ></a></td>
                        
                        </tr>
                    ';
            }
            ?>
        </table>
    </main>

    <article class="add-fix-delete">
        <a href="index.php?action=addInfor"><input type="button" value="Nhập thêm" name="btn-add"></a>
    </article>
</section>


</div>



<script type="text/javascript" src="../js/admin.js"></script>

