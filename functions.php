<?php

function clear($variable){
    $variable = filter_var($variable, FILTER_SANITIZE_STRING);
    $variable = trim($variable);
    $variable = stripslashes($variable);
    $variable = htmlspecialchars($variable);
    return $variable;
}