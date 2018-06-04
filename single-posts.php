<?php

include "includes/header.php";
include "includes/db.php";

?>


<div class="blog-post">
<?php 
$id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id = '$id' ORDER BY Created_at DESC ";
   $posts = connection($sql, $conn);

    foreach($posts as $post){

    
    ?>
    <h2 class="blog-post-title">
        <a href = single-posts.php?id=<?php echo $post['id'];?> >
        <?php echo $post['Title'];?>

        </a>
    </h2>
   

    <p class="blog-post-meta"><?php echo $post['Created_at']; ?>by <a href="#"><?php echo $post['Author']?></a></p>

    <p><?php echo $post['Body']; ?></p>
    
    <hr>
    <?php } ?>
</div><!-- /.blog-post -->
<?php 
     $sql = "SELECT * FROM comments WHERE Post_id='$id'";
   $comments = connection($sql, $conn);

    foreach($comments as $comment){

    
    ?>
    <ul>

        <li>
            
        <p class="blog-post-meta"><a href="#"><?php echo $comment['Author']?></a></p>

        <p><?php echo $comment['Text']; ?></p>
        </li>

    </ul>
 
    
    <hr>
    <?php } ?>




            </div><!-- /.blog-main -->


<?php

include "includes/sidebar.php";

include "includes/footer.php";
?>
