<?php

include "includes/header.php";

?>


<div class="col-sm-8 blog-main">
    <div class="blog-post">

        <div class = "signup-forma">
            <?php

            if(isset($_GET['error']) && $_GET['error'] === 'notfound'){
                echo " <p  class = 'alert alert-danger' > Username or password is wrong </p>";
            }

            ?>
            <form action = "includes/login.inc.php" method = "POST" onsubmit="return loginValidation()" >
               


                <input type="text" name="username" placeholder="Enter username" id="loginUsername"></input><br>
                <p id="login_username_alert" class = 'alert alert-danger' style="display:none" >Username is required </p>

                

                <input type="password" name="password" placeholder="password" id="loginPassword"></input><br>
                <p id="login_password_alert" class = 'alert alert-danger' style="display:none" >Password is required </p>



                <div class="buttons-for-posts">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
     
</div><!-- /.blog-main -->    
<?php

include "includes/sidebar.php";

include "includes/footer.php";
?>
<script src="main.js"></script>
