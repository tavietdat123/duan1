<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'addInfor';
            $TITLE_NAME = "Thêm thông tin website";
            break;
        case 'information';
            $TITLE_NAME = "Thông tin website";
            break;

        case 'listMembers';
            $TITLE_NAME = "Danh sách thành viên";
            break;

        case 'fix_infor';
            $TITLE_NAME = "Cập nhật thông tin website";
            break;
        default:
            $TITLE_NAME = "Thống kê";
            break;
    }
} else {
    $TITLE_NAME = "Thống kê";
}

session_start();

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

                $facebook = $_POST['facebook'];

                $instagram = $_POST['instagram'];

                $youtube = $_POST['youtube'];

                $target_dir = "../upload/";
          
                $logo = $target_dir . basename($_FILES['logo']['name']);
                
                if (move_uploaded_file($_FILES['logo']['tmp_name'], $logo)) {
                } else {
                }

                addInfor($logo, $urlWebsite, $tell, $email, $address, $facebook, $instagram, $youtube);

                $thongbao = "Thêm thông tin thành công";

                
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

        case "fix_infor":

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $loadOneInformation = loadOneInformation($_GET['id']);
            }

            include 'information/updateInformation.php';
            break;

        case "updateInfor":
            
            if (isset($_POST['updateInfor']) && ($_POST['updateInfor'])) {
                $updateInfor = $_POST['id'];

                $logo = $_FILES['logo']['name'];

                $urlWebsite = $_POST['url_Website'];
                $tell = $_POST['tell'];
                $email = $_POST['email'];
                $address = $_POST['address'];

                $facebook = $_POST['facebook'];

                $instagram = $_POST['instagram'];

                $youtube = $_POST['youtube'];

                $target_dir = "../upload/";
          
                $logo = $target_dir . basename($_FILES['logo']['name']);
                
                if (move_uploaded_file($_FILES['logo']['tmp_name'], $logo)) {
                } else {
                }

                updateInformation($updateInfor, $logo, $urlWebsite, $tell, $email, $address, $facebook, $instagram, $youtube);

                // header(location: "information/information.php");

                $thongbao = "Thêm thông tin website thành công";

               }

            $loadAllInformation = loadAllInfor();

            include 'information/information.php';
            break;

        case "listMembers":
            include 'members/listMember.php';

        default:
            include "body.php";
            break;
    }
} else {
    include "body.php";
}
include "footer.php";
