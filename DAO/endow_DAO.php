<?php
function addEndow($NameCode,$CodeEndow,$AmountEndow,$MoneyEndow,$PercentEndow)
{
    $sql = "insert into endow(NameCode, CodeEndow, AmountEndow, MoneyEndow, PercentEndow) values('$NameCode', '$CodeEndow', '$AmountEndow', '$MoneyEndow', '$PercentEndow')";

    pdo_execute($sql);
}
function loadAllEndow()
{
    $sql = "select * from endow where 1 order by id desc";

    $loadAllEndow = pdo_query($sql);

    return $loadAllEndow;
}

function deleteEndow($id)
{
    $sql = "delete from endow where id=" . $id;

    pdo_execute($sql);
}

function loadOneEndow($id)
{
    $sql = "select * from endow where id=" . $id;

    $loadOneEndow = pdo_query_one($sql);

    return $loadOneEndow;
}
function updateEndow($id, $NameCode,$CodeEndow,$AmountEndow,$MoneyEndow,$PercentEndow)
{

    $sql = "update endow set NameCode='" . $NameCode . "', CodeEndow='" . $CodeEndow . "', AmountEndow='" . $AmountEndow . "', MoneyEndow='" . $MoneyEndow . "' , PercentEndow ='".$PercentEndow."' where id=" . $id;
    
    pdo_execute($sql);
}
function updateStatusEndow($id,$status)
{

    $sql = "update endow set status='" . $status . "' where id=" . $id;
    
    pdo_execute($sql);
}
function updateAmountEndow($id,$AmountEndow)
{

    $sql = "update endow set AmountEndow='" . $AmountEndow . "' where id=" . $id;
    
    pdo_execute($sql);
}
?>