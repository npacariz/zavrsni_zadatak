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
    var name = document.getElementById("formName");
    var body = document.getElementById("formBody");
   
    if(name.value == '' || body.value == ''){
        document.getElementById("alert_tag").style.display = 'block';
        return false
    }
   
 
} 
