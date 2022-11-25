<?php

function loadAllEndow()
{
    $sql = "select * from endow where 1 order by id desc";

    $loadAllEndows = pdo_query($sql);

    return $loadAllEndows;
}

function deleteEndow($id)
{
    $sql = "delete from endow where id=" . $id;

    pdo_execute($sql);
}

function loadOneEndow($id)
{
    $sql = "select * from account endow where id=" . $id;

    $loadOneEndow = pdo_query_one($sql);

    return $loadOneEndow;
}
?>