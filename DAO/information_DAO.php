<?php 
function addInfor($logo, $urlWebsite, $tell, $email, $address, $imgFacebook, $urlFacebook, $imgInstagram, $urlInstagram, $imgYoutube, $urlYoutube)
{
    $sql = "insert into information(logo, url_Website, tell, email, address, facebook,url_facebook, instagram, url_instagram, youtube, url_youtube) values('$logo', '$urlWebsite', '$tell', '$email', '$address', '$imgFacebook', '$urlFacebook', '$imgInstagram', '$urlInstagram', '$imgYoutube', '$urlYoutube')";

    pdo_execute($sql);
}

function loadAllInfor(){
    $sql="select * from information where 1 order by id desc";

    $listInfor=pdo_query($sql);

    return $listInfor;
}

?>