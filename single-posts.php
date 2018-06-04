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


            </div><!-- /.blog-main -->


<?php

include "includes/sidebar.php";

include "includes/footer.php";
?>
