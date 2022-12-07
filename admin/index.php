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
        case 'updateInfor';
            $TITLE_NAME = "Thông tin website";
            break;

        case 'listMembers';
            $TITLE_NAME = "Danh sách thành viên";
            break;

        case 'fix_infor';
            $TITLE_NAME = "Cập nhật thông tin website";
            break;

        case 'fixReview';
            $TITLE_NAME = "Cập nhật thông tin website";
            break;
        case 'list_endow';
            $TITLE_NAME = "Danh sách ưu đãi ";
            break;
        case 'addEndow';
            $TITLE_NAME = "Tạo ưu đãi ";
            break;
        case 'suaEndow';
            $TITLE_NAME = "Cập nhật ưu đãi ";
            break;
        case 'updateEndow';
            $TITLE_NAME = "Cập nhật ưu đãi ";
            break;

        case 'onpen_endow';
            $TITLE_NAME = "Tạo ưu đãi ";
            break;
        case 'lock_endow';
            $TITLE_NAME = "Tạo ưu đãi ";
            break;
        case 'review':
            $TITLE_NAME = "Giới thiệu website";
            break;
        case 'updateReview':
            $TITLE_NAME = "Giới thiệu website";
            break;

        case 'addReview':
            $TITLE_NAME = "Thêm thông tin giới thiệu website";
            break;

        case 'updateReview':
            $TITLE_NAME = "Cập nhật thông tin giới thiệu website";
            break;

        case 'fixMember':
            $TITLE_NAME = "Cập nhật tài khoản thành viên";
            break;
        case 'updateMember':
            $TITLE_NAME = "Danh sách thành viên";
            break;
        case 'news':
            $TITLE_NAME = "Danh sách tin tức";
            break;
        case 'fixNews':
            $TITLE_NAME = "Danh sách thành viên";
            break;
        case 'updateNews':
            $TITLE_NAME = "Danh sách tin tức";
            break;

        case  "flight":
            $TITLE_NAME = "Quản lý - Chuyến Bay";
            break;
        case 'flight_fix':
            $TITLE_NAME = "Quản lý - Chuyến Bay";
            break;
        case 'flight_add':
            $TITLE_NAME = "Quản lý - Chuyến Bay";
            break;
        case 'flight_remove':
            $TITLE_NAME = "Quản lý - Chuyến Bay";
            break;
        case "ticket":
            $TITLE_NAME = "Quản lý - Vé";
            break;
        case 'ticket_fix':
            $TITLE_NAME = "Quản lý - Vé";
            break;
        case  'ticket_add':
            $TITLE_NAME = "Quản lý - Vé";
            break;
        case  'ticket_remove':
            $TITLE_NAME = "Quản lý - Vé";
            break;
        case "ticket_type":
            $TITLE_NAME = "Quản lý - Loại vé";
            break;
        case 'ticket_type_fix':
            $TITLE_NAME = "Quản lý - Loại vé";
            break;
        case  'ticket_type_add':
            $TITLE_NAME = "Quản lý - Loại vé";
            break;
        case  'ticket_type_remove':
            $TITLE_NAME = "Quản lý - Loại vé";
            break;
        case  'bill':
            $TITLE_NAME = "Bill - Đã thanh toán";
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

include "../DAO/review_DAO.php";

include "../DAO/members_DAO.php";

include "../DAO/news_DAO.php";
include "../DAO/ticket_DAO.php";
include "../DAO/type_ticket_DAO.php";
include "../DAO/flight_DAO.php";

include "../DAO/endow_DAO.php";
include "../DAO/contact_DAO.php";

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

        case 'addReview':

            if (isset($_POST['addReview']) && ($_POST['addReview'])) {
                $review = $_POST['review'];
                $vision = $_POST['vision'];
                $mission = $_POST['mission'];
                $coreValues = $_POST['core_values'];

                $ourProducts = $_POST['our_products'];

                $professionalExperience = $_POST['professional_experience'];

                addReview($review, $vision, $mission, $coreValues, $ourProducts, $professionalExperience);

                $thongbao = "Thêm thông tin thành công";
            }

            $loadAllReview = loadAllReview();

            include "review/addReview.php";
            break;

        case 'review':

            $loadAllReview = loadAllReview();

            include "review/review.php";
            break;

        case "deleteReview":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                deleteReview($_GET['id']);
            }

            $loadAllReview = loadAllReview();

            include "review/review.php";
            break;

        case "fixReview":

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $loadOneReview = loadOneReview($_GET['id']);
                extract($loadOneReview);
            }

            include 'review/updateReview.php';
            break;

        case "updateReview":

            if (isset($_POST['updateReview']) && ($_POST['updateReview'])) {
                $id = $_POST['id'];
                $review = $_POST['review'];
                $vision = $_POST['vision'];
                $mission = $_POST['mission'];
                $coreValues = $_POST['core_values'];

                $ourProducts = $_POST['our_products'];

                $professionalExperience = $_POST['professional_experience'];

                updateReview($id, $review, $vision, $mission, $coreValues, $ourProducts, $professionalExperience);

                $thongbao = "Cập nhật thông tin thành công";
            }

            $loadAllReview = loadAllReview();

            include "review/review.php";
            break;

        case "listMembers":

            $loadAllMembers = loadAllMembers();

            include 'members/listMember.php';
            break;

        case "deleteMember":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                deleteMember($_GET['id']);
            }

            $loadAllMembers = loadAllMembers();

            include 'members/listMember.php';

            break;

        case "fixMember":

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $loadOneMember = loadOneMember($_GET['id']);
                extract($loadOneMember);
            }

            include 'members/updateMember.php';
            break;

        case 'updateMember':
            if (isset($_POST['updateMember']) && ($_POST['updateMember'])) {
                $id = $_POST['id'];
                $fullName = $_POST['fullName'];
                $passWord = $_POST['passWord'];
                $email = $_POST['email'];
                $check_role = $_POST['check_role'];
                if ($check_role == 'Admin') {
                    $role = 0;
                } else if ($check_role == 'Thành viên') {
                    $role = 1;
                } else {
                    $role = 0;
                }
                updateMember($id, $fullName, $passWord, $email, $role);

                // $thongbao = "Cập nhật thông tin thành công";
            }

            $loadAllMembers = loadAllMembers();

            include 'members/listMember.php';
            break;

        case 'onpen_user':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $status = 0;
                updateStatus($id, $status);
            }
            $loadAllMembers = loadAllMembers();
            include 'members/listMember.php';
            break;
        case 'lock_user':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $status = 1;
                updateStatus($id, $status);
            }
            $loadAllMembers = loadAllMembers();
            include 'members/listMember.php';
            break;

        case 'listContact';
        $loadAllContact = loadAllContact();

        include 'contact/listContact.php';
        break;
        case 'deleteContact':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                deleteContact($_GET['id']);
            }

            $loadAllContact = loadAllContact();

            include 'contact/listContact.php';

            break;
        case 'listNews';

            $loadAllNews = loadAllNews();

            include 'news/listNews.php';
            break;

        case 'deleteNews':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                deleteNews($_GET['id']);
            }

            $loadAllNews = loadAllNews();

            include 'news/listNews.php';

            break;

        case "addNews":

            //Kiểm tra xem người dùng có click vào nút Thêm mới không 
            if (isset($_POST['addNews']) && ($_POST['addNews'])) {

                $title = $_POST['title'];
                $image = $_FILES['image']['name'];
                $content = $_POST['content'];
                $createdAt = date('h:i:sa d/m/Y');

                $target_dir = "../img/";
                $image = $target_dir . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
                } else {
                }

                addNews($title, $image,$content, $createdAt);

                $thongbao = "Thêm thông tin thành công";
            }

            $loadAllNews = loadAllNews();
            include "news/addNews.php";
            break;

        case 'fixNews':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $loadOneNews = loadOneNews($_GET['id']);
                extract($loadOneNews);
            }
            include 'news/updateNews.php';
            break;

        case 'updateNews':
            if (isset($_POST['addNews']) && ($_POST['addNews'])) {

                $id = $_POST['id'];
                $title = $_POST['title'];

                $image = $_FILES['image']['name'];

                $content = $_POST['content'];


                $createdAt = date('h:i:sa d/m/Y');

                $target_dir = "../img/";
                $image = $target_dir . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
                } else {
                }

                updateNews($id, $title, $image, $content, $createdAt);

                $thongbao = "Thêm thông tin thành công";
            }

            $loadAllNews = loadAllNews();
            include 'news/listNews.php';
            break;
        case 'list_endow':
            $loadAllEndow = loadAllEndow();
            include 'endow/list_endow.php';
            break;
        case 'taoEndow':
            include "endow/tao_endow.php";
            break;
        case 'addEndow':
            if (isset($_POST['addEndow']) && ($_POST['addEndow'])) {
                $NameCode = $_POST['NameCode'];
                $CodeEndow = $_POST['CodeEndow'];
                $AmountEndow = $_POST['AmountEndow'];
                $MoneyEndow = $_POST['MoneyEndow'];
                $PercentEndow = $_POST['PercentEndow'];
                addEndow($NameCode, $CodeEndow, $AmountEndow, $MoneyEndow, $PercentEndow);
            }
            $loadAllEndow = loadAllEndow();
            include "endow/list_endow.php";
            break;

        case "suaEndow":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $loadOneEndow = loadOneEndow($_GET['id']);
                extract($loadOneEndow);
            }
            include 'endow/update_endow.php';
            break;
        case 'updateEndow':
            if (isset($_POST['updateEndow']) && ($_POST['updateEndow'])) {
                $id = $_POST['id'];
                $NameCode = $_POST['NameCode'];
                $CodeEndow = $_POST['CodeEndow'];
                $AmountEndow = $_POST['AmountEndow'];
                $MoneyEndow = $_POST['MoneyEndow'];
                $PercentEndow = $_POST['PercentEndow'];
                updateEndow($id, $NameCode, $CodeEndow, $AmountEndow, $MoneyEndow, $PercentEndow);
            }
            $loadAllEndow = loadAllEndow();
            include 'endow/list_endow.php';
            break;

        case 'flight':
            $rows = flight_select_all();
            include 'flight/flight.php';
            break;
        case 'flight_add':
            include 'flight/flight_add.php';
            break;
        case 'flight_remove':
            include 'flight/flight_remove.php';
            break;
        case 'flight_fix':
            include 'flight/flight_fix.php';
            break;
        case 'ticket':
            $rows = selectAllTicket();
            include 'ticket/ticket.php';
            break;
        case 'ticket_add':
            include 'ticket/ticket_add.php';
            break;
        case 'ticket_remove':
            include 'ticket/ticket_remove.php';
            break;
        case 'ticket_fix':
            include 'ticket/ticket_fix.php';
            break;
        case 'ticket_type':
            $rows = selectAllTicket_type();
            include 'ticket_type/ticket_type.php';
            break;
        case 'ticket_type_add':
            include 'ticket_type/ticket_type_add.php';
            break;
        case 'ticket_type_remove':
            include 'ticket_type/ticket_type_remove.php';
            break;
        case 'ticket_type_fix':
            include 'ticket_type/ticket_type_fix.php';
            break;
        case 'bill':
            $rows =  pdo_query("select * from bill where pay = 2");
            include 'bill/bill.php';
            break;
        case 'xoaEndow':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                deleteEndow($_GET['id']);
            }

            $loadAllEndow = loadAllEndow();
            include 'endow/list_endow.php';
            break;
        case 'onpen_endow':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $status = 0;
                updateStatusEndow($id, $status);
            }
            $loadAllEndow = loadAllEndow();
            include 'endow/list_endow.php';
            break;
        case 'lock_endow':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $status = 1;
                updateStatusEndow($id, $status);
            }
            $loadAllEndow = loadAllEndow();
            include 'endow/list_endow.php';
            break;
        default:
            include "body.php";
            break;
    }
} else {
    include "body.php";
}
include "footer.php";