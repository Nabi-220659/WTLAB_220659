<?php
session_start();
if(isset($_POST['user']) && isset($_POST['pass'])){
    $u = $_POST['user'];
    $p = $_POST['pass'];
    if($u === "admin" && $p === '1234'){
        $_SESSION['user'] = $u;
    }
    else{
        echo "Access Denied.";
    }
}
if(isset($_SESSION['user']))
    {
        echo "WELCOME" . $_SESSION['user'];
    }
?>
