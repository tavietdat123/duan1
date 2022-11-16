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
                <th>url_Facebook</th>
                <th>img_Instagram</th>
                <th>url_Instagram</th>
                <th>img_YouTube</th>
                <th>url_YouTube</th>
                <th></th>
            </tr>

            <?php

            foreach ($listInfor as $list) {
                extract($list);

                $fix_infor = "index.php?action=fix_infor&id=" . $id;

                $delete_infor = "index.php?action=delete_infor&id=" . $id;

                $logo = "../upload/" . $logo;
                $imgPath = "../upload/" . $imgFacebook;
                $imgPath1 = "../upload/" . $imgInstagram;
                $imgPath2 = "../upload/" . $imgYoutube;


                if (is_file($logo)) {
                    $logo = "../upload/" . $logo;
                    $img_logo = "<img src='" . $logo . "' height='80'>";
                    
                } else {
                    $logo = "No picture";
                
                }

                if (is_file($imgPath)) {
                    $imgPath = "../upload/" . $imgFacebook;
                    $picture = "<img src='" . $imgPath . "' height='80'>";

                } else {
                    $picture = "No picture";
                }

                if (is_file($imgPath1)) {                   
                    $imgPath1 = "../upload/" . $imgInstagram;
                    $picture1 = "<img src='" . $imgPath1 . "' height='80'>";
                } else {                  
                    $picture1 = "No picture1";          
                }

                if (is_file($imgPath2)) {
                    $imgPath2 = "../upload/" . $imgYoutube;
                    $picture2 = "<img src='" . $imgPath2 . "' height='80'>";
                } else {                    
                    $picture2 = "No picture2";
                }


                echo '
                        <tr>
                            <td>'.$id.'</td>
                            <td>'.$img_logo.'</td>
                            <td>'.$urlWebsite.'</td>
                            
                            <td>'.$tell.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>

                            <td>'.$picture.'</td>
                            <td>'.$urlFacebook.'</td>

                            <td>'.$picture1.'</td>
                            <td>'.$urlInstagram.'</td>

                            <td>'.$picture2.'</td>
                            <td>'.$urlYoutube.'</td>

                            <td><a href="'.$fix_infor.'"><input type="button" value="Sửa" name="btn-fix"></a>
                            <a href="'.$delete_infor.'"><input type="button" value="Xóa" name="btn-delete"></a></td>
                        
                        </tr>
                    ';
            }
            ?>
        </table>
    </main>

    <article class="add-fix-delete">
        <a href="index.php?action=add_infor"><input type="button" value="Nhập thêm" name="btn-add"></a>
    </article>
</section>


</div>

<script type="text/javascript" src="../js/admin.js"></script>