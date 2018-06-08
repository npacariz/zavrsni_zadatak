<?php  

include 'db.php';

if(!isset($_POST['deletePost'])){
    header("Location:../index.php");
    }else{

    $id = $_POST['delete_id'];
var_dump($id);
    $sql = "DELETE FROM comments WHERE Post_id={$id}"; 

    insertOrDelete($sql, $conn);

    $sql = "DELETE FROM posts WHERE id={$id}"; 

    insertOrDelete($sql, $conn);
    header("Location: ../index.php"); 

}

 
