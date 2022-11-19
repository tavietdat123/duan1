<?php

// if (isset($_GET['action'])) {
//     $action = $_GET['action'];
//     switch ($action) {
//         case 'experience';
//             $TITLE_NAME = "Trải nghiệm chuyến bay";
//             break;
//         case 'sr';
//             $TITLE_NAME = "Tìm kiếm chuyến bay";
//             break;
//         case 'trips';
//             $TITLE_NAME = "Các chuyến bay";
//             break;
//         case 'review';
//             $TITLE_NAME = "Giới thiệu";
//             break;
//         case 'endow';
//             $TITLE_NAME = "Ưu đãi";
//             break;
//         case 'news';
//             $TITLE_NAME = "Tin Tức";
//             break;
//         default:
//             $TITLE_NAME = "Chuyến bay";
//             break;
//     }
// }else {
//     $TITLE_NAME = "Chuyến bay";

// }

// require_once './DAO/PDO.php';

include "header.php";

include "../DAO/PDO.php";

include "../DAO/information_DAO.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'addInfor':
            //Kiểm tra xem người dùng có click vào nút Thêm mới không 
            if (isset($_POST['addInfor']) && ($_POST['addInfor'])) {
                $logo = $_FILES['logo']['name'];

                $urlWebsite = $_POST['url_Website'];
                $tell = $_POST['tell'];
                $email = $_POST['email'];
                $address = $_POST['address'];

                $facebook = $_FILES['facebook']['name'];

                $instagram = $_FILES['instagram']['name'];

                $youtube = $_FILES['youtube']['name'];

                $target_dir = "../upload/";
                $target_dir1 = "../upload/";
                $target_dir2 = "../upload/";
                $target_dir3 = "../upload/";
                $logo = $target_dir . basename($_FILES['logo']['name']);
                $target_file1 = $target_dir1 . basename($_FILES['facebook']['name']);
                $target_file2 = $target_dir2 . basename($_FILES['instagram']['name']);
                $target_file3 = $target_dir3 . basename($_FILES['youtube']['name']);

                if (move_uploaded_file($_FILES['logo']['tmp_name'], $logo)) {} else {}
                if(move_uploaded_file($_FILES['facebook']['tmp_name'], $target_file1)){}else{}
                if(move_uploaded_file($_FILES['instagram']['tmp_name'], $target_file2)){}else{}
                if(move_uploaded_file($_FILES['youtube']['tmp_name'], $target_file3)){}else{}

                addInfor($logo, $urlWebsite, $tell, $email, $address, $facebook, $instagram, $youtube);

                $thongbao = "Thêm thông tin thành công";

                // $thongbao = insertProduct($productName, $productPrice, $img,$describe, $idCategory);
            }

            $loadAllInformation = loadAllInfor();

            include 'information/addInfor.php';
            break;

        case 'information':

            $loadAllInformation = loadAllInfor();
            include 'information/information.php';
            break;

        case "delete_infor":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                deleteInfor($_GET['id']);
            }

            $loadAllInformation = loadAllInfor();

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
