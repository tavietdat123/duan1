<?php
function loadAllContact()
{
    $sql = "select * from contact where 1 order by id desc";

    $loadAllContact = pdo_query($sql);

    return $loadAllContact;
}

function deleteContact($id)
{
    $sql = "delete from contact where id=" . $id;

    pdo_execute($sql);
}
?>