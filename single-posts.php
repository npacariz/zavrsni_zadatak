<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
            //function for querying one post with specific id and comments related to that post
            $sql = "SELECT p.Title,p.Body, p.Author, p.Created_at, c.Author as comment_author, c.Text 
            FROM posts as p INNER JOIN comments as c ON p.id = c.Post_id WHERE c.Post_id = '$id'";
            $postWithComments = query($sql, $conn);

            $post = $postWithComments[0];
            $comments = [];
            $count = count($postWithComments);
           
            for($i=0; $i < $count;  $i++){
                $comments[$i]["comment_author"] = $postWithComments[$i]["comment_author"];
                $comments[$i]['Text'] = $postWithComments[$i]['Text'];
            }
    
            ?>

            <h2 class="blog-post-title">
                     <?php echo $post['Title'];?>
            </h2>


            <p class="blog-post-meta">
                <?php echo $post['Created_at']; ?> by <a href="#"><?php echo $post['Author']?></a>
            </p>

            <p>
                <?php echo $post['Body'];?>
            </p>

            <hr>
    

    </div><!-- /.blog-post -->

    <!-- comments connected to single posts from above -->
        <?php 
    
       
        foreach($comments as $comment){
  
        ?>

        <ul>
            <li>
                <p class="blog-post-meta">
                    <a href="#"><?php echo $comment['comment_author']?></a>
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
        echo "Post id is not passed by url";
    }
        
        ?>

</div><!-- /.blog-main -->

<?php
include "includes/sidebar.php";
include "includes/footer.php";
?>