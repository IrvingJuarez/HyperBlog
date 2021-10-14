<?php

$errors = "";
require "functions.php";

if( $_GET["title"] == "" ){
    header("Location: admin.php");
}else{
    $title = $_GET["title"];
}

$connection = dbConnection();

if($connection){
    $sql = "SELECT title, content, img FROM articles WHERE title = ?";
    $statement = $connection->prepare($sql);
    $statement->bind_param("s", $title);
    $statement->execute();

    $result = $statement->get_result();
    if(!$result){
        header("Location: admin.php");
    }
}else{
    $errors .= "<span class='err'>Sorry, there was a mistake with the data base. Try later</span>";
}

require "views/edit.view.php";