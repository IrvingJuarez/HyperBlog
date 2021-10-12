<?php

$errors = "";

require "functions.php";

function upload(){
    $connection = dbConnection();

    if($connection){
        echo "OK";
    }else{
        echo "<span class='err'>Sorry, problems with the data base, we are working on that :)</span>";
    }
}

if( isset($_POST['upload']) ){
    $title = $_POST['title'];
    $content = $_POST['content'];
}

require "views/new-article.view.php";