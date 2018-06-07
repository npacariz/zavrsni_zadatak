<?php

include 'db.php';



if(!isset($_POST['submit'])){
    header("Location: ../create.php");
}else{
    $author = $_POST["Autor"];
    $body = $_POST["body"];
    $title = $_POST["Title"];
    
    if(empty($author) || empty($body) || empty($title) ){
        header("Location: ../create.php?error=empty"); 
       
    }else{
        $sql = "INSERT INTO posts (Title,Body,Author) VALUES ('$title', '$body', '$author')";
        insertOrDelete($sql,$conn);
           
        header("Location: ../index.php"); 
    }
}
    





?>