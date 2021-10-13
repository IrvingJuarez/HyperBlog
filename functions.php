<?php

function dateFormat($timestamp){
    $timestamp = strtotime($timestamp);

    $day = date("d", $timestamp);
    $month = date("m", $timestamp);
    $year = date("y", $timestamp);

    return "$day/$month/$year";
}

function dbConnection(){
    $connect = new mysqli("localhost", "root", "", "blog", 8080);
    if( $connect->errno == 0 ){
        return $connect;
    }else{
        return false;
    }
}

function clear($variable){
    $variable = filter_var($variable, FILTER_SANITIZE_STRING);
    $variable = trim($variable);
    $variable = stripslashes($variable);
    $variable = htmlspecialchars($variable);
    return $variable;
}

function nonEmpty($variable, $msg){
    global $errors;

    if( empty($variable) ){
        $errors .= "<span class='err'>Please add a $msg</span>";
    }
}