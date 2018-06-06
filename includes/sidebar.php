<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$sql ="SELECT id, Title FROM posts ORDER BY Created_at DESC LIMIT 5";
$posts = query($sql, $conn);

?>

<aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
               
                <h4>Latest posts</h4>
                <?php 
                foreach($posts as $post){
                    ?>

                <p>
                <a href =single-posts.php?id=<?php echo $post['id'];?>>
                    <?php echo $post['Title'] ?></a>
                </p>
                <?php
        }
        ?> 
            </div>
          
        </aside><!-- /.blog-sidebar -->
      
 

