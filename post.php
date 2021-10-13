<?php

require "functions.php";
$errors = "";

if($_GET['title'] == ""){
    header("Location: index.php");
}else{
    $title = preg_replace("/\%20/", "", $_GET["title"]);
}

$connection = dbConnection();

if($connection){
    $sql = "SELECT title, content, date, img FROM articles WHERE title = ?";
    $statement = $connection->prepare($sql);
    $statement->bind_param("s", $title);
    $statement->execute();

    $result = $statement->get_result();
    if($result->num_rows == 0){
        header("Location: index.php");
    }else{
        $article = $result->fetch_assoc();
    }
}else{
    $errors .= "<span class='err'>Sorry, there was a mistake with the data base. We are working on that.</span>";
}

require "views/post.view.php";