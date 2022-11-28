<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'experience';
            $TITLE_NAME = "Trải nghiệm chuyến bay";
            break;
        case 'sr';
            $TITLE_NAME = "Tìm kiếm chuyến bay";
            break;
        case 'trips';
            $TITLE_NAME = "Các chuyến bay";
            break;
        case 'review';
            $TITLE_NAME = "Giới thiệu";
            break;
        case 'endow';
            $TITLE_NAME = "Ưu đãi";
            break;
        case 'news';
            $TITLE_NAME = "Tin Tức";
            break;
        case 'login';
            $TITLE_NAME = "Đăng nhập";
            break;
        case 'register';
            $TITLE_NAME = "Đăng kí";
            break;
        case 'forgotPassword';
            $TITLE_NAME = "Quên mật khẩu";
            break;
        case 'booking';
            $TITLE_NAME = "Booking";
            break;
        case 'pay';
            $TITLE_NAME = "Pay-Thanh toán";
            break;
        case 'pay';
            $TITLE_NAME = "Lịch Sử Đặt Vé";
            break;
        default:
            $TITLE_NAME = "Chuyến bay";
            break;
    }
} else {
    $TITLE_NAME = "Chuyến bay";
}
require_once './DAO/PDO.php';
session_start();

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'experience';
            $PAGE = 'view/experience.php';
            include "view/layout.php";
            break;

        case 'login';
            include 'view/account/login.php';
            break;

        case 'register';
            include 'view/account/register.php';
            break;
        case 'booking';
            $PAGE = 'view/booking.php';
            include 'view/layout.php';
            break;

        case 'forgotPassword';

            include 'view/account/forgotPassword.php';
            break;

        case 'sr';
            $PAGE = 'view/Search_Results.php';
            include "view/layout.php";
            break;

        case 'trips';
            $PAGE = 'view/trips.php';
            include "view/layout.php";
            break;

        case 'review';
            $PAGE = 'view/review.php';
            include "view/layout.php";
            break;

        case 'endow';
            $PAGE = 'view/endow.php';
            include "view/layout.php";
            break;

        case 'news';
            $PAGE = 'view/news.php';
            include "view/layout.php";
            break;
        case 'pay';
            $PAGE = 'view/pay.php';
            include "view/layout.php";
            break;
        case 'history';
            $PAGE = 'view/history.php';
            include "view/layout.php";
            break;

        default:
            $PAGE = "view/body.php";
            include "view/layout.php";
            break;
    }
} else {
    $PAGE = "view/body.php";
    include "view/layout.php";
}
