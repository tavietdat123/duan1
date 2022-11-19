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
                <th>img_Facebook</th>
                <th>img_Instagram</th>
                <th>img_YouTube</th>
                <th></th>
            </tr>

            <?php

            foreach ($loadAllInformation as $loadAll) {
                extract($loadAll);

                $fix_infor = "index.php?action=fix_infor&id=" . $id;

                $delete_infor = "index.php?action=delete_infor&id=" . $id;

                $logo = "../upload/" . $logo;
                $facebook = "../upload/" . $facebook;
                $instagram = "../upload/" . $instagram;
                $youtube = "../upload/" . $youtube;
                // var_dump($youtube);die;


                if (is_file($logo)) {
                    $logo = "../upload/" . $logo;
                    $img_logo = "<img src='" . $logo . "' height='80'>";
                } else {
                    $img_logo = "No img logo";
                }

                if (is_file($facebook)) {
                    $facebook = "../upload/" . $facebook;
                    $picture = "<img src='" . $facebook . "' height='80'>";
                } else {
                    $picture = "No img facebook";
                }

                if (is_file($instagram)) {
                    $instagram = "../upload/" . $instagram;
                    $picture1 = "<img src='" . $instagram . "' height='80'>";
                } else {
                    $picture1 = "No img instagram";
                }

                if (is_file($youtube)) {
                    $youtube = "../upload/" . $youtube;
                    $picture2 = "<img src='" . $youtube . "' height='80'>";
                } else {
                    $picture2 = "No img youtube";
                }


                echo '
                        <tr>
                            <td>' . $id . '</td>
                            <td>' . $img_logo . '</td>
                            <td>' . $url_website . '</td>

                            <td>' . $tell . '</td>
                            <td>' . $email . '</td>
                            <td>' . $address . '</td>

                            <td>' . $picture . '</td>

                            <td>' . $picture1 . '</td>

                            <td>' . $picture2 . '</td>

                            <td><a href="' . $fix_infor . '"><input type="button" value="Sửa" name="btn-fix"></a>
                            <a href="' . $delete_infor . '"><input type="button" value="Xóa" name="btn-delete"></a></td>
                        
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