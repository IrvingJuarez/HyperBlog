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

require "views/index.view.php";