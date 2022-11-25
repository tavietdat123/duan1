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

include "../DAO/endow_DAO.php";

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
                $role = $_POST['role'];

                updateMember($id, $fullName, $passWord, $email, $role);

                $thongbao = "Cập nhật thông tin thành công";
            }

            $loadAllMembers = loadAllMembers();

            include 'members/listMember.php';
            break;
            
        case 'onpen_user':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $status = 0;
                updateStatus($id,$status);
            }
            $loadAllMembers = loadAllMembers();
            include 'members/listMember.php';
            break;
        case 'lock_user':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $status = 1;
                updateStatus($id,$status);
            }
            $loadAllMembers = loadAllMembers();
            include 'members/listMember.php';
            break;
        case 'news';

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

                $image1 = $_FILES['image1']['name'];
                $image2 = $_FILES['image2']['name'];
                $image3 = $_FILES['image3']['name'];

                $content1 = $_POST['content1'];
                $content2 = $_POST['content2'];
                $content3 = $_POST['content3'];

                $createdAt = date('h:i:sa d/m/Y');

                $target_dir = "../upload/";
                $target_dir1 = "../upload/";
                $target_dir2 = "../upload/";

                $image1 = $target_dir . basename($_FILES['image1']['name']);
                $image2 = $target_dir1 . basename($_FILES['image2']['name']);
                $image3 = $target_dir2 . basename($_FILES['image3']['name']);

                if (move_uploaded_file($_FILES['image1']['tmp_name'], $image1)) {
                } else {
                }
                if (move_uploaded_file($_FILES['image2']['tmp_name'], $image2)) {
                } else {
                }
                if (move_uploaded_file($_FILES['image3']['tmp_name'], $image3)) {
                } else {
                }

                addNews($title, $image1, $image2, $image3, $content1, $content2, $content3, $createdAt);

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

                    $id=$_POST['id'];
                    $title = $_POST['title'];
    
                    $image1 = $_FILES['image1']['name'];
                    $image2 = $_FILES['image2']['name'];
                    $image3 = $_FILES['image3']['name'];
    
                    $content1 = $_POST['content1'];
                    $content2 = $_POST['content2'];
                    $content3 = $_POST['content3'];
    
                    $createdAt = date('h:i:sa d/m/Y');
    
                    $target_dir = "../upload/";
                    $target_dir1 = "../upload/";
                    $target_dir2 = "../upload/";
    
                    $image1 = $target_dir . basename($_FILES['image1']['name']);
                    $image2 = $target_dir1 . basename($_FILES['image2']['name']);
                    $image3 = $target_dir2 . basename($_FILES['image3']['name']);
    
                    if (move_uploaded_file($_FILES['image1']['tmp_name'], $image1)) {
                    } else {
                    }
                    if (move_uploaded_file($_FILES['image2']['tmp_name'], $image2)) {
                    } else {
                    }
                    if (move_uploaded_file($_FILES['image3']['tmp_name'], $image3)) {
                    } else {
                    }
    
                    updateNews($id,$title, $image1, $image2, $image3, $content1, $content2, $content3, $createdAt);
    
                    $thongbao = "Thêm thông tin thành công";
                }

                $loadAllNews = loadAllNews();
                include 'news/listNews.php';
                break;
            case 'endow':
                $loaAllEndow = loadAllEndow();
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