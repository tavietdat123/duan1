<?php
function addReview($review, $vision, $mission, $coreValues, $ourProducts, $professionalExperience)
{
    $sql = "insert into review(review, vision, mission, core_values, our_products, professional_experience) values('$review', '$vision', '$mission', '$coreValues', '$ourProducts', '$professionalExperience')";

    pdo_execute($sql);
}

function loadAllReview()
{
    $sql = "select * from review where 1 order by id desc";

    $loadAllReview = pdo_query($sql);

    return $loadAllReview;
}

function deleteReview($id)
{
    $sql = "delete from review where id=" . $id;

    pdo_execute($sql);
}

function loadOneReview($id)
{
    $sql = "select * from review where id=" . $id;

    $loadOneReview = pdo_query_one($sql);

    return $loadOneReview;
}

function updateReview($id, $review, $vision, $mission, $coreValues, $ourProducts, $professionalExperience)
{
    $sql = "update review set review='" . $review . "', vision='" . $vision . "', mission='" . $mission . "', core_values='" . $coreValues . "', our_products='" . $ourProducts . "', professional_experience='" . $professionalExperience . "' where id=" . $id;

    pdo_execute($sql);
}

?>