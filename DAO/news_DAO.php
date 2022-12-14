<?php
function addNews($imgNews, $contenNew, $dateNews, $descNew)
{
    $sql = "insert into news(imgNews, contenNew, dateNews, descNew) values('$imgNews', '$contenNew', '$dateNews', '$descNew')";

    pdo_execute($sql);
}

function loadAllNews()
{
    $sql = "select * from news where 1 order by id desc";

    $loadAllNews = pdo_query($sql);

    return $loadAllNews;
}

function deleteNews($id)
{
    $sql = "delete from news where id=" . $id;

    pdo_execute($sql);
}

function loadOneNews($id)
{
    $sql = "select * from news where id=" . $id;

    $loadOneNews = pdo_query_one($sql);

    return $loadOneNews;
}

function updateNews($id,$title, $image1, $image2, $image3, $content1, $content2, $content3, $createdAt)
{

    if ($image1 != "" || $image2 != "" || $image3 != "") 
        $sql = "update news set title='" . $title . "', image1='" . $image1 . "', image2='" . $image2 . "', image3='" . $image3 . "', content1='" . $content1 . "', content2='" . $content2 . "', content3='" . $content3 . "', createdAt='" . $createdAt . "' where id=" . $id;
    else
    $sql = "update news set title='" . $title . "', content1='" . $content1 . "', content2='" . $content2 . "', content3='" . $content3 . "', createdAt='" . $createdAt . "' where id=" . $id;
    
    pdo_execute($sql);
}

?>