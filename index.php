<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "includes/db.php";
include_once "includes/header.php";

?>

<div class="col-sm-8 blog-main">
    <div class="blog-post">

        <?php 
            $sql = "SELECT * FROM posts ORDER BY Created_at DESC ";
            //function from includes/db.php for quering database
            $posts = query($sql, $conn);

            foreach($posts as $post){
        ?>
        <h2 class="blog-post-title">
            <a href ='single-posts.php?id=<?php echo $post['id'];?>'>
            <?php echo $post['Title'];?>
            </a>
        </h2>
            
        <p class="blog-post-meta">
            <?php echo $post['Created_at']; ?>by <a href="#"><?php echo $post['Author']?></a>
        </p>

      
        <p>
          <?php echo $post['Body']; ?>
        </p>
            
            <hr>
            <?php } ?>
    </div><!-- /.blog-post -->

        

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

     
</div><!-- /.blog-main -->
   


<?php

include "includes/sidebar.php";

include "includes/footer.php";
?>
