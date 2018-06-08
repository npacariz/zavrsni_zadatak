<?php

include "includes/header.php";

?>


<div class="col-sm-8 blog-main">
    <div class="blog-post">

        <div class = "signup-forma">
            <?php

            if(isset($_GET['error']) && $_GET['error'] === 'taken'){
                echo " <p  class = 'alert alert-danger' >Username or Email is taken </p>";
            }

            ?>
            <form action = "includes/singup.inc.php" method = "POST" onsubmit="return singUpvalidation()" >
                <input type="text" name="firstName" placeholder="First name" id="signupFirstName"></input><br>
                <p id="signup_firstName_alert" class = 'alert alert-danger' style="display:none" >First Name is required </p>

                <input type="text" name="lastName" placeholder="Last name" id="signupLastName"></input><br>
                <p id="signup_lastName_alert" class = 'alert alert-danger' style="display:none" >Last Name is required </p>


                <input type="text" name="username" placeholder="Username" id="signupUsername"></input><br>
                <p id="signup_username_alert" class = 'alert alert-danger' style="display:none" >Username is required </p>

                <input type="text" name="email" placeholder="email" id="signupEmail"></input><br>
                <p id="signup_email_alert" class = 'alert alert-danger' style="display:none" >Email is required </p>

                <input type="password" name="password" placeholder="password" id="signupPassword"></input><br>
                <p id="signup_password_alert" class = 'alert alert-danger' style="display:none" >Password is required </p>

                <input type="password" name="password" placeholder="repeat password" id="signupPassword2"></input><br>
                <p id="signup_password_alert2" class = 'alert alert-danger' style="display:none" >Password is required </p>
                <p id="notmatch_password_alert" class = 'alert alert-danger' style="display:none" >The passwords you typed do not match.</p>


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
