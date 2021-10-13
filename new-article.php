<?php

$errors = "";

require "functions.php";

function photoComprobation(){
    if( $_FILES["photo"]["tmp_name"] ){
        echo $_FILES["photo"]["name"];
    }else{
        echo "Empty";
    }
}

function upload($title, $content){
    $title = clear($title);
    $content = clear($content);
    if($_FILES["photo"]["tmp_name"]){
        $cover = "imgs/".$_FILES["photo"]["name"];
    }else{
        $cover = "imgs/ether.jpg";
    }

    $connection = dbConnection();
    if($connection){
        $sql = "INSERT INTO articles VALUES(null, ?, ?, null, ?)";
        $statement = $connection->prepare($sql);
        $statement->bind_param("sss", $title, $content, $cover);
        $statement->execute();
        
        if($connection->affected_rows >= 1){
            move_uploaded_file($_FILES["photo"]["tmp_name"], $cover);
            header("Location: admin.php");
        }else{
            echo "<span class='err'>There was an error with the db. Try later.</span>";
        }
    }else{
        echo "<span class='err'>Sorry, problems with the data base, we are working on that :)</span>";
    }
}

if( isset($_POST['upload']) ){
    $title = $_POST['title'];
    $content = $_POST['content'];
}

require "views/new-article.view.php";