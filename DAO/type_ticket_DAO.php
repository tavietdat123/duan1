<?php
function selectAllTicket_type()
{
    $sql = "select * from ticket_type";
    return pdo_query($sql);
}
function selectOneTicket_type($id)
{
    $sql = "select * from ticket_type where id = $id";
    return pdo_query_one($sql);
}
function type_ticket_insert($name)
{
    $sql = "insert into ticket_type (name)
        values(?)";
    pdo_execute($sql,$name);
}

function type_ticket_update($name,$id)
{
    $sql = "UPDATE ticket_type SET name = ? WHERE id = ?";
    pdo_execute($sql,$name,$id);
}

//Xóa 
function type_ticket_delete($id)
{
    $sql = "delete from ticket_type where id = ?";
    pdo_execute($sql, $id);
}

?>