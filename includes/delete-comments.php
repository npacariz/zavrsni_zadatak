<?php
include 'db.php';


if(!isset($_POST['delete'])){
    header("Location: ../index.php");
}else{
    $id = $_POST['id'];
    $post_id = $_POST['post_id'];
    $sql = "DELETE FROM comments WHERE id={$id}"; 

    insertOrDelete($sql, $conn);

    header("Location: ../single-posts.php?id={$post_id}"); 
}