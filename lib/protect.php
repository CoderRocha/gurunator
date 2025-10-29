<?php


function protect($admin) {

    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['usuario'])) {
        header("location: login.php");
    }

    if($admin == 1 && $_SESSION['admin'] != 1) {
        header("location: login.php");
    }

}