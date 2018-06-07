<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "includes/header.php";
include_once "includes/db.php";

?>
<div class="col-sm-8 blog-main">


<!-- Single post from database -->
    <div class="blog-post">
    <?php
    //checking  if id is set in url
    if(isset($_GET['id'])){

            $id = $_GET['id'];
            //function for querying one post with specific id and comments related to that post
            $sql = "SELECT p.Title,p.Body, p.Author, p.Created_at, c.id, c.Author as comment_author, c.Text
            FROM posts as p LEFT JOIN comments as c ON p.id = c.Post_id WHERE p.id = '$id'";
            $join = query($sql, $conn);

            $post = $join[0];
            $comments = [];
            $count = count($join);

          foreach($join as $comm){
            $single = array('id' => $comm['id'],'comment_author' => $comm['comment_author'], 'Text' => $comm['Text'],);
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

            <form action="includes/delete-posts.php" method="POST" onsubmit = "return check()">
                    <input type="hidden" name="delete_id" value=<?php echo $id ?> >
                    <button   class="btn btn-danger" name="deletePost"> Delete post </button>
             </form>
           
           
            <hr>


    </div><!-- /.blog-post -->


     <!-- Submit comment form -->
    <div class='submit_comment_form'>

        <form  name='myForm' action="includes/create-comment.php" method="POST" onsubmit=" return validate()" >

                <div class="input-small">
                     <input type="text" placeholder ="Name" name="Author" id="formName"><br>
              </div>
                   
                    <textarea name="body" placeholder ="Enter comment" rows = "10" id='formBody'></textarea><br>
                    <input type="hidden" name="Post_id" value=<?php echo $id ?> > 

                     <p id="alert_tag" class = 'alert alert-danger' style="display:none" > All fileds must be filed in </p>

               <div class="buttons-for-comment">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit"  name='submit' class="btn btn-success">Submit</button>
             </div>
        </form>

     </div>     



         <?php
        //if there is comments, display comments and show hide/show button 
        if($comments[0]["Text"]){

            echo '<button type="button" id="show_hide_buttton" class="btn btn-default" style ="margin-bottom:20px">Hide comments</button>
            
                <div id="comment_div">';
                


            foreach($comments as $comment){

                echo'<ul>
                        <li>
                            <p class="blog-post-meta">'
                                .$comment["comment_author"].
                            '</p>

                            <div class = "delete-comment-style">
                                <p>'
                                .$comment["Text"]. '
                                    
                                </p>
                                <form action="includes/delete-comments.php" method = "POST">
                                    <input type="hidden" name="post_id" value ='.$id.'> 
                                    <input type="hidden" name="id" value ='.$comment['id'].'> 

                                    <button type="submit"  name="delete" class="btn-sm btn-danger">Delete a comment</button>
                                        
                                </form>
                            </div>
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



<?php
include "includes/sidebar.php";
include "includes/footer.php";
?>

<script src="main.js"></script>

