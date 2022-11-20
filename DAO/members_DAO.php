<?php

function loadAllInfor(){
    $sql="select * from information where 1 order by id desc";

    $loadAllInformation=pdo_query($sql);

    return $loadAllInformation;
}

?>