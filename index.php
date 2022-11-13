<?php
include "view/header.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'login';

            include 'view/account/login.php';
            break;

        case 'register';

            include 'view/account/register.php';
            break;

        case 'experience';

            include 'view/experience.php';
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
?>