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
        default:
            $TITLE_NAME = "Chuyến bay";
            break;
    }
}else {
    $TITLE_NAME = "Chuyến bay";

}
require_once './model/PDO.php';
session_start();
include "view/header.php";
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'experience';
            include 'view/experience.php';
            break;
        case 'sr';
            include 'view/Search_Results.php';
            break;
        case 'trips';
            include 'view/trips.php';
            break;
        case 'review';
            include 'view/review.php';
            break;
        case 'endow';
            include 'view/endow.php';
            break;

        case 'news';
            include 'view/news.php';
            break;
        default:
            include "view/body.php";
            break;
    }
} else {
    include "view/body.php";
}

include "view/footer.php";
