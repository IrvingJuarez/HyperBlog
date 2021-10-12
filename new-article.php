<?php

$errors = "";

require "functions.php";

function photoComprobation(){
    if( !empty($_FILES) ){
        echo "Non empty";
    }else{
        echo "Empty";
    }
}

function upload($title, $text, $img){
    $connection = dbConnection();

    if($connection){
        $title = clear($title);
        $text = clear($text);
        echo $img["photo"]["name"];
    }else{
        echo "<span class='err'>Sorry, problems with the data base, we are working on that :)</span>";
    }
}

if( isset($_POST['upload']) ){
    $title = $_POST['title'];
    $content = $_POST['content'];
}

require "views/new-article.view.php";