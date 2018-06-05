<?php

include "includes/header.php";
include "includes/db.php";

?>
<div class="col-sm-8 blog-main">
<!-- Single post from database -->
    <div class="blog-post">
    <?php 
    //checking  if id is set in url
    if(isset($_GET['id'])){

           
            $id = $_GET['id'];
            //function for querying one posts with specific id
            $sql = "SELECT * FROM posts WHERE id = '$id'";
            $post = query($sql, $conn);

            ?>

            <h2 class="blog-post-title">
                    <a href=single-posts.php?id=<?php echo $post[0]['id'];?> > <?php echo $post[0]['Title'];?></a>
            </h2>


            <p class="blog-post-meta">
                <?php echo $post[0]['Created_at']; ?> by <a href="#"><?php echo $post[0]['Author']?></a>
            </p>

            <p>
                <?php echo $post[0]['Body'];?>
            </p>

            <hr>
    

    </div><!-- /.blog-post -->

    <!-- comments connected to single posts from above -->
        <?php 
        //function calling all comments with specific id
        $sql = "SELECT * FROM comments WHERE Post_id='$id'";
        $comments = query($sql, $conn);

        foreach($comments as $comment){

        ?>

        <ul>
            <li>
                <p class="blog-post-meta">
                    <a href="#"><?php echo $comment['Author']?></a>
                </p>
                <p>
                    <?php echo $comment['Text']; ?>
                </p>
            </li>
        </ul>
        
        <hr>

        <?php 
            } 
    }else{
        // if id is not set in url echo this
        echo "post id is not passt by url";
    }
        
        ?>

</div><!-- /.blog-main -->

<?php

include "includes/sidebar.php";

include "includes/footer.php";
?>
