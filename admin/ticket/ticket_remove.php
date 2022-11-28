<?php
$id = $_GET['id'];
unlink("../img/".selectOneTicket($id)['company_img']);
ticket_delete($id);

echo"<script>
        location.href = '/admin/index.php?action=ticket'
    </script>";