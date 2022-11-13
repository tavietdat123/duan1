<?php
include "header.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case '';
            break;

        default:
            include "body.php";
            break;
    }
} else {
    include "body.php";

}
include "footer.php";
?>
