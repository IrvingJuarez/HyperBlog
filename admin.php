<?php

session_start();

if( isset( $_POST['submit'] ) ){
    $connection = new mysqli("localhost", "root", "", "blog", 8080);

    if( $connection->errno == 0 ){
        echo "OK";
    }else{
        $errors = "There was an error with the database, try later.";
    }
}

require "views/admin.view.php";