<?php
include "../DAO/PDO.php";

include "../DAO/information_DAO.php";

include "header.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'add_infor':
            //Kiểm tra xem người dùng có click vào nút Thêm mới không 
            if (isset($_POST['add_infor']) && ($_POST['add_infor'])) {
                $logo = $_FILES['logo']['name'];

                $urlWebsite = $_POST['url_Website'];
                $tell = $_POST['tell'];
                $email = $_POST['email'];
                $address = $_POST['address'];

                $imgFacebook = $_FILES['facebook']['name'];
                $urlFacebook = $_POST['url_facebook'];
                
                $imgInstagram = $_FILES['instagram']['name'];
                $urlInstagram = $_POST['url_instagram'];
                
                $imgYoutube = $_FILES['youtube']['name'];
                $urlYoutube = $_POST['url_youtube'];

                $target_dir = "../upload/";
                $logo = $target_dir . basename($_FILES['logo']['name']);
                $target_file = $target_dir . basename($_FILES['facebook']['name']);
                $target_file1 = $target_dir . basename($_FILES['instagram']['name']);
                $target_file2 = $target_dir . basename($_FILES['youtube']['name']);

                if (move_uploaded_file($_FILES['logo']['tmp_name'], $logo) || move_uploaded_file($_FILES['facebook']['tmp_name'], $target_file) || move_uploaded_file($_FILES['instagram']['tmp_name'], $target_file1) || move_uploaded_file($_FILES['youtube']['tmp_name'], $target_file2)) {
                } else {
                }

                addInfor($logo, $urlWebsite, $tell, $email, $address, $imgFacebook, $urlFacebook, $imgInstagram, $urlInstagram, $imgYoutube, $urlYoutube);

                $thongbao = "Thêm thông tin thành công";

                // $thongbao = insertProduct($productName, $productPrice, $img,$describe, $idCategory);
            }

            $listInfor=loadAllInfor();

            include 'information/add_infor.php';
            break;

        case 'information':

            $listInfor=loadAllInfor();
            include 'information/information.php';
            break;

        default:
            include "body.php";
            break;
    }
} else {
    include "body.php";
}
include "footer.php";
