let button = document.getElementById("show_hide_buttton");




button.onclick = function(){
    let comments = document.getElementById("comment_div");
    if(comments.style.display === "none"){
        comments.style.display = 'block';
        button.innerHTML = 'Hide comments';
    }else{
        comments.style.display = 'none';
        button.innerHTML = 'Show comments';
    }
}
    



function validate() {
    let name = document.getElementById("formName");
    let body = document.getElementById("formBody");
   
    if(name.value == '' || body.value == ''){
        document.getElementById("alert_tag").style.display = 'block';
        return false
    }
   
 
} 




function check(){

    let temp  = confirm('Do you really want to delete this post?');

    if(temp){
        return true;
    }else{
        return false;
    }

}



function postValidate() {
    let title = document.getElementById("titlePosts");
    let author = document.getElementById("authorPosts");
    let body = document.getElementById("bodyPosts");

    
    if(title.value == ''){
        document.getElementById("posts_title_alert").style.display="block"
        return false;
    }else{
        document.getElementById("posts_title_alert").style.display="none"
    }
    
    if(author.value == ''){
        document.getElementById("author_post_alert").style.display="block"
        return  false;
    }else{
        document.getElementById("author_post_alert").style.display="none"
    }

    if(body.value == ''){
        document.getElementById("body_post_alert").style.display="block"
        return false;
    }else{
        document.getElementById("author_post_alert").style.display="none"
    }
       return true;
}


//SignUp forma

function singUpvalidation() {
    let firstName = document.getElementById("signupFirstName");
    let lastName = document.getElementById("signupLastName");
    let username = document.getElementById("signupUsername");
    let email = document.getElementById("signupEmail");
    let password = document.getElementById("signupPassword");
    let password2 = document.getElementById("signupPassword2");


    if(firstName.value == ''){
        document.getElementById("signup_firstName_alert").style.display="block"
        return false;
    }else{
        document.getElementById("signup_firstName_alert").style.display="none"
    }
    
    if(lastName.value == ''){
        document.getElementById("signup_lastName_alert").style.display="block"
        return  false;
    }else{
        document.getElementById("signup_lastName_alert").style.display="none"
    }

    if(username.value == ''){
        document.getElementById("signup_username_alert").style.display="block"
        return false;
    }else{
        document.getElementById("signup_username_alert").style.display="none"
    }

    if(email.value == ''){
        document.getElementById("signup_email_alert").style.display="block"
        return false;
    }else{
        document.getElementById("signup_email_alert").style.display="none"
    }

    if(password.value == ''){
        document.getElementById("signup_password_alert").style.display="block"
        return false;
    }else{
        document.getElementById("signup_password_alert").style.display="none"
    }

    if(password2.value == ''){
        document.getElementById("signup_password_alert2").style.display="block"
        return false;
    }else{
        document.getElementById("signup_password_alert2").style.display="none"
    }

    if(password.value !== password2.value){
        document.getElementById("notmatch_password_alert").style.display="block"
        return false;
    }else{
        document.getElementById("notmatch_password_alert").style.display="none"
    }

   
}


function loginValidation() {
    let username = document.getElementById("loginUsername");
    let password = document.getElementById("loginPassword");


    if(password.value == ''){
        document.getElementById("login_username_alert").style.display="block"
        return false;
    }else{
        document.getElementById("login_username_alert").style.display="none"
    }

    if(username.value == ''){
        document.getElementById("login_password_alert").style.display="block"
        return false;
    }else{
        document.getElementById("login_password_alert").style.display="none"
    }

}