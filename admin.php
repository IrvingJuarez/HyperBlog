<?php

session_start();

if( isset( $_POST['submit'] ) ){
    echo "The form was sent";
}

require "views/admin.view.php";