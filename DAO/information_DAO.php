<?php 
function addInfor($logo, $urlWebsite, $tell, $email, $address, $facebook, $urlFacebook, $instagram, $urlInstagram, $youtube, $urlYoutube)
{
    $sql = "insert into information(logo, url_Website, tell, email, address, facebook,url_facebook, instagram, url_instagram, youtube, url_youtube) values('$logo', '$urlWebsite', '$tell', '$email', '$address', '$facebook', '$urlFacebook', '$instagram', '$urlInstagram', '$youtube', '$urlYoutube')";

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