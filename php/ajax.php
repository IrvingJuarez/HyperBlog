<?php

require "../functions.php";

$connection = dbConnection();

if($connection){
    $likeNum = (int)$_POST['like'];
    $likeNum++;

    $connection->set_charset("utf8");
    $sql = "UPDATE articles SET likes = ? WHERE title = ?";
    $statement = $connection->prepare($sql);
    $statement->bind_param("is", $likeNum, $_POST['title']);
    $statement->execute();

    if($statement->affected_rows >= 1){
        $result = $_POST['like'];
    }else{
        $result = ":(";
    }
}else{
    $result = ":(";
}

echo $result;