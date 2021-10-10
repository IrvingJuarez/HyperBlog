<?php

session_start();

$errors = "";

function clean($variable){
    $variable = filter_var($variable, FILTER_SANITIZE_STRING);
    $variable = htmlspecialchars( $variable );
    return $variable;
}

function nonEmpty($variable, $msg){
    global $errors;

    if( empty($variable) ){
        $errors .= "<span class='err'>Please add a $msg</span>";
    }
}

function connect(){
    $connection = new mysqli("localhost", "root", "", "blog", 8080);

    if( $connection->errno == 0 ){
        $sql = "SELECT * FROM admins WHERE email = ? and password = ?";
        $statement = $connection->prepare($sql);
        $statement->bind_param("ss", $_POST['email'], $_POST['password']);
        $statement->execute();

        $query = $statement->get_result();
        if($query->num_rows >= 1){
            $_SESSION['user'] = $query->fetch_assoc()['name'];
            header("Location: admin.php");
        }else{
            echo "<span class='err'>Either the email or the password are wrong</span>";
        }
    }else{
        echo "There was an error with the database, try later.";
    }
}

if( isset($_POST['submit']) ){
    $email = $_POST['email'];
    $password = $_POST['password'];
}

require "views/admin.view.php";