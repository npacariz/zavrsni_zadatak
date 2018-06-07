<?php  

include 'db.php';

if(!isset($_POST['deletePost'])){
    header("Location:../index.php");
    }else{

    $id = $_POST['delete_id'];
    $sql = "DELETE FROM posts WHERE id={$id}"; 
    insertOrDelete($sql, $conn);
    header("Location: ../index.php"); 

}

 
