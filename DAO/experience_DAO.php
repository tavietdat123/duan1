<?php
function addExperience($imgEx,$title,$description)
{
    $sql = "insert into experience(imgEx, title, description) values('$imgEx','$title','$description')";

    pdo_execute($sql);
}
function loadAllExperience()
{
    $sql = "select * from experience where 1 order by id desc";

    $loadAllExperience = pdo_query($sql);

    return $loadAllExperience;
}

function deleteExperience($id)
{
    $sql = "delete from experience where id=" . $id;

    pdo_execute($sql);
}

function loadOneExperience($id)
{
    $sql = "select * from experience where id=" . $id;

    $loadOneExperience = pdo_query_one($sql);

    return $loadOneExperience;
}
function updateExperience($id,$imgEx,$title,$description)
{

    $sql = "update experience set imgEx='" . $imgEx . "', title='" . $title . "', description='" . $description . "' where id=" . $id;
    
    pdo_execute($sql);
}