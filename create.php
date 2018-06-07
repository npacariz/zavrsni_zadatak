<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "includes/db.php";
include_once "includes/header.php";

?>

<div class="col-sm-8 blog-main">
    <div class="blog-post">
    

<div class='posts-form'>
    <form action = "includes/create-post.php" method = "POST" id="postsForma" onsubmit="return postValidate()" >
    <div class="input-small">
        <input type="text" name="Title" placeholder="Naslov" id="titlePosts"></input><br>
        <input type="text" name= "Autor" placeholder ="Autor" id="authorPosts"></input>
    </div>
        
        <textarea name="body" placeholder ="Enter Post" rows = "10" id="bodyPosts"></textarea>

        <div class="buttons-for-comment">
               <button type="submit" name="submit">Submit</button>
        </div>
    </form>
</div>


    </div><!-- /.blog-post -->
</div><!-- /.blog-main -->





   <?php
   
   include "includes/sidebar.php";
   
   include "includes/footer.php";
   ?>
   <script src="main.js"></script>