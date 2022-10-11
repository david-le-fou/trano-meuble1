<?php
include '../config.php';
$user = 'enjana';
$password = '1234';
session_start();
if(!is_null($_SESSION['log_user'])) header('location:'.url_admin.'dashboard.php');

if(!empty($_POST)){
    if(isset($_POST['identifiant'])&&isset($_POST['password'])){
        if($_POST['identifiant'] == $user && $_POST['password']==$password){
            $_SESSION['log_user'] = 'start';
            header('location:'.url_admin.'dashboard.php');
        }else{
            echo "<script> alert('accés refusé')</script>";
        }
    }else{
        http_response_code(500);
    }
}
?>