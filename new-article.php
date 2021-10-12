<?php

$errors = "";

require "functions.php";

function upload($title, $text){
    $connection = dbConnection();

    if($connection){
        $title = clear($title);
        $text = clear($text);
        if( $_FILES["photo"]["tmp_name"] ){
            echo "OK";
        }else{
            echo "<span class='err'>Please add a <i>photo</i> to upload</span>";
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