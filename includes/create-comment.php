<?php
include 'db.php';



if(!isset($_POST['submit'])){
    header("Location: ../index.php");
}else{
    $author = $_POST["Author"];
    $body = $_POST["body"];
    $id = $_POST["Post_id"];
    
    if(empty($author) || empty($body) ){
        header("Location: ../single-posts.php?error=empty&id={$id}"); 
       
    }else{
        $sql = "INSERT INTO comments (Author,Text,Post_id) VALUES ('$author', '$body', '$id')";
        insertOrDelete($sql,$conn);
           
        header("Location: ../single-posts.php?comment=inserted&id={$id}"); 
    }
}
    

   
