<?php
$id = $_GET['id'];
flight_delete($id);
$rows =  pdo_query("select * from ticket where flight_id = $id");
if(!$rows == []){
    foreach ($rows as $key => $value) {
        $ticket_id = $value['id'];
        pdo_execute("delete from booking where ticket_id = ticket_id");
        ticket_delete($ticket_id);
    }
}
echo"<script>
        location.href = '/admin/index.php?action=flight'
    </script>";