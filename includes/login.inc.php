<?php
include 'db.php';

if(!isset($_POST["submit"])){
    header("Location:index.php");
}else{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username) ||  empty($password)){
        header("Location:../login.php?error=empty");
    }else{
        $sql = "SELECT id, username, password FROM users";
        $array = query( $sql,$conn);

        foreach($array as $item ){
            if($item['username'] === $username){
                if($item['password'] === $password){
                    session_start();
                    $_SESSION['id'] = $item['id'];
                    header("Location:../index.php?login=successful");
                    die();
                }
            }
        }
        header("Location:../login.php?error=notfound");   
        die();
    }
}
