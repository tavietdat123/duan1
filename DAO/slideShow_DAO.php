<?php
function addSlideshow($image,$title,$description)
{
    $sql = "insert into slideshow(image, title, description) values('$image','$title','$description')";

    pdo_execute($sql);
}
function loadAllSlideshow()
{
    $sql = "select * from slideshow where 1 order by id desc";

    $loadAllSlideshow = pdo_query($sql);

    return $loadAllSlideshow;
}

function deleteSlideshow($id)
{
    $sql = "delete from slideshow where id=" . $id;

    pdo_execute($sql);
}

function loadOneSlideshow($id)
{
    $sql = "select * from slideshow where id=" . $id;

    $loadOneSlideshow = pdo_query_one($sql);

    return $loadOneSlideshow;
}
function updateSlideshow($id,$image,$title,$description)
{

    $sql = "update slideshow set image='" . $image . "', title='" . $title . "', description='" . $description . "' where id=" . $id;
    
    pdo_execute($sql);
}