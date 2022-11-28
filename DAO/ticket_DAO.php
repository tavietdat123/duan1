<?php
function selectAllTicket()
{
    $sql = "select * from ticket";
    return pdo_query($sql);
}
function selectOneTicket($id)
{
    $sql = "select * from ticket where id = $id";
    return pdo_query_one($sql);
}
function ticket_insert($price,$company,$company_img,$status,$type_ticket_id,$quantity,$flight_id)
{
    $sql = "insert into ticket (price,company,company_img,status,type_ticket_id,quantity,flight_id)
        values(?,?,?,?,?,?,?)";
    pdo_execute($sql,$price,$company,$company_img,$status,$type_ticket_id,$quantity,$flight_id);
}

function ticket_update($price,$company,$company_img,$status,$type_ticket_id,$quantity,$flight_id,$id)
{
    $sql = "UPDATE ticket SET price = ?,company = ?,company_img = ?,status = ?,type_ticket_id = ?,quantity = ?,flight_id = ? WHERE id = ?";
    pdo_execute($sql,$price,$company,$company_img,$status,$type_ticket_id,$quantity,$flight_id,$id);
}

//Xóa 
function ticket_delete($id)
{
    $sql = "delete from ticket where id = ?";
    pdo_execute($sql, $id);
}

?>