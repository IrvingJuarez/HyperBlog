<?php

session_start();

$errors = "";
require "functions.php";

if( $_GET["title"] == "" || !isset($_SESSION['user']) ){
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

if( isset($_POST["save"]) ){
    
    $newTitle = $_POST['title'];
    $newContent = $_POST['content'];

    if( isset($_POST['currentPhoto']) ){
        $sql2 = "UPDATE articles SET title = ?, content = ?, newImage = ? WHERE title = ?";
        $props = array("ssss", $newTitle, $newContent, $_POST['photo'], $_POST['currentTitle']);
    }else{
        $sql2 = "UPDATE articles SET title = ?, content = ? WHERE title = ?";
        $props = array("sss", $newTitle, $newContent, $_POST['currentTitle']);
    }

    $statement2 = $connection->prepare($sql2);
    $statement2->bind_param($props[0], $props[1]);
    $statement2->execute();

    $result2 = $statement2->get_result();

    if($result2->affected_rows >= 1){
        print_r($result2);
    }
}

require "views/edit.view.php";