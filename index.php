<?php

require "functions.php";

$connection = dbConnection();
$errors = "";

if($connection){
    $sql = "SELECT * FROM articles";
    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->get_result();

    if($result->num_rows == 0){
        $errors .= "<span>There are no published articles yet.</span>";
    }
}else{
    $errors .= "<span class='err'>Sorry, there was a mistake with the data base connection</span>";
}

if( isset($_POST['like']) ){
    $value = $_POST['currentLikes'] + 1;
    $sqlLike = "UPDATE articles SET likes = ? WHERE title = ?";
    $statement2 = $connection->prepare($sqlLike);
    $statement2->bind_param("is", $value, $_POST['title']);
    $statement2->execute();

    // if($statement2->affected_rows >= 1){
    //     echo "Success";
    // }
}

require "views/index.view.php";