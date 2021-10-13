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
        move_uploaded_file($_FILES["photo"]["tmp_name"], $cover);
    }else{
        $cover = "imgs/ether.jpg";
    }

    // $connection = dbConnection();

    // if($connection){
    //     @code
    // }else{
    //     echo "<span class='err'>Sorry, problems with the data base, we are working on that :)</span>";
    // }
}

if( isset($_POST['upload']) ){
    $title = $_POST['title'];
    $content = $_POST['content'];
}

require "views/new-article.view.php";