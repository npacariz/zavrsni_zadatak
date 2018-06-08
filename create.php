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
        <p id="posts_title_alert" class = 'alert alert-danger' style="display:none" > Title is required </p>

        <input type="text" name= "Autor" placeholder ="Autor" id="authorPosts"></input><br>
        <p id="author_post_alert" class = 'alert alert-danger' style="display:none" > Author name is required </p>

    </div>
        
        <textarea name="body" placeholder ="Enter Post" rows = "10" id="bodyPosts"></textarea><br>
        <p id="body_post_alert" class = 'alert alert-danger' style="display:none" >Body of posts is required  </p>

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