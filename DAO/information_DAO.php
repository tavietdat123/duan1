<?php
function addInfor($logo, $urlWebsite, $tell, $email, $address, $facebook, $instagram, $youtube)
{
    $sql = "insert into information(logo, url_Website, tell, email, address, facebook, instagram, youtube) values('$logo', '$urlWebsite', '$tell', '$email', '$address', '$facebook', '$instagram', '$youtube')";

    pdo_execute($sql);
}

function loadAllInfor()
{
    $sql = "select * from information where 1 order by id desc";

    $loadAllInformation = pdo_query($sql);

    return $loadAllInformation;
}

function deleteInfor($id)
{
    $sql = "delete from information where id=" . $id;

    pdo_execute($sql);
}

function loadOneInformation($id)
{
    $sql = "select * from information where id=" . $id;

    $loadOneInformation = pdo_query_one($sql);

    return $loadOneInformation;
}

function updateInformation($updateInfor, $logo, $urlWebsite, $tell, $email, $address, $facebook, $instagram, $youtube)
{

    if ($logo != "") 
        $sql = "update information set logo='" . $logo . "', url_website='" . $urlWebsite . "', tell='" . $tell . "', email='" . $email . "', address='" . $address . "', facebook='" . $facebook . "', instagram='" . $instagram . "', youtube='" . $youtube . "' where id=" . $updateInfor;
    else
        $sql = "update information set url_website='" . $urlWebsite . "', tell='" . $tell . "', email='" . $email . "', address='" . $address . "', facebook='" . $facebook . "', instagram='" . $instagram . "', youtube='" . $youtube . "' where id=" . $updateInfor;
    
    pdo_execute($sql);
}

?>