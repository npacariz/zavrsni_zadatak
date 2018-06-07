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


function postValidate() {
    let title = document.getElementById("titlePosts");
    let author = document.getElementById("authorPostss");
    let body = document.getElementById("bodyPosts");

    
    if(title.value == ''){
        title.style.backgroundColor = "red";
        return false;
    }else  if(author.value == ''){
        author.style.backgroundColor = "red";
        return  false;
    }else if(body.value == ''){
        body.style.backgroundColor = "red";
        return false;
    }  
       
}