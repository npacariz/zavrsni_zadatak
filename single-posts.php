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
            FROM posts as p LEFT JOIN comments as c ON p.id = c.Post_id WHERE p.id = '$id'";
            $join = query($sql, $conn);

            $post = $join[0];
            $comments = [];
            $count = count($join);

          foreach($join as $comm){
            $single = array('comment_author' => $comm['comment_author'], 'Text' => $comm['Text'],);
            $comments[] = $single;
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

         <?php
        //if ther is comments, display comments and show hide/show button 
        if($comments[0]["Text"]){

            echo '<button type="button" id="show_hide_buttton" class="btn-md">Hide comments</button>
            
                <div id="comment_div">';
                


            foreach($comments as $comment){

                echo'<ul>
                        <li>
                            <p class="blog-post-meta">'
                                .$comment["comment_author"].
                            '</p>
                            <p>'
                            .$comment["Text"]. '
                            </p>
                            </li>
                        </ul>

                    <hr>';
            }    
            echo "</div>";

        }
        else{
            // if there is no comments display this text
            echo "<p>No comments, be first to leave comment</p>";
        }          
    }
    else{
        // if id is not set in url echo this
        echo "Post id is not passed by url";
    }

        ?>

</div><!-- /.blog-main -->
<script src="main.js">

</script>
<?php
include "includes/sidebar.php";
include "includes/footer.php";
?>
