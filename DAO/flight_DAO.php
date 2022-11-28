<?php 
function flight_select_all()
{
    $sql = "select * from flight";
    return pdo_query($sql);
}
function flight_select_one($id)
{
    $sql = "select * from flight where id = $id";
    return pdo_query_one($sql);
}
function flight_insert($pointOfDeparture,$destination,$dateTime)
{
    $sql = "insert into flight (pointOfDeparture,destination,dateTime)
        values(?,?,?)";
    pdo_execute($sql, $pointOfDeparture,$destination,$dateTime);
}

function flight_update($id,$pointOfDeparture,$destination,$dateTime)
{
    $sql = "UPDATE flight SET pointOfDeparture = ?,destination = ?,dateTime = ? WHERE id = ?";
    pdo_execute($sql,$pointOfDeparture,$destination,$dateTime,$id);
}

//Xóa 
function flight_delete($id)
{
    $sql = "delete from flight where id = ?";
    pdo_execute($sql, $id);
}

?>