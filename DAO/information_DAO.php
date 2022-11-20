<?php 
function addInfor($logo, $urlWebsite, $tell, $email, $address, $facebook, $instagram, $youtube)
{
    $sql = "insert into information(logo, url_Website, tell, email, address, facebook, instagram, youtube) values('$logo', '$urlWebsite', '$tell', '$email', '$address', '$facebook', '$instagram', '$youtube')";

    pdo_execute($sql);
}

function loadAllInfor(){
    $sql="select * from information where 1 order by id desc";

    $loadAllInformation=pdo_query($sql);

    return $loadAllInformation;
}

function deleteInfor($id)
{
    $sql = "delete from information where id=" . $id;

    pdo_execute($sql);
}

?>