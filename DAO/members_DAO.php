<?php

function loadAllMembers()
{
    $sql = "select * from account where 1 order by id desc";

    $loadAllMembers = pdo_query($sql);

    return $loadAllMembers;
}

function deleteMember($id)
{
    $sql = "delete from account where id=" . $id;

    pdo_execute($sql);
}

function loadOneMember($id)
{
    $sql = "select * from account where id=" . $id;

    $loadOneMember = pdo_query_one($sql);

    return $loadOneMember;
}

function updateMember($id, $fullName, $passWord, $email, $role)
{

    $sql = "update account set fullName='" . $fullName . "', passWord='" . $passWord . "', email='" . $email . "', role='" . $role . "' where id=" . $id;
    
    pdo_execute($sql);
}

?>