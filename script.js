/*global $*/
window.onload = main;
 function ajax_word_query(word){
    let httpRequest = new XMLHttpRequest();
    let url = "/request.php?q="+word
    
    httpRequest.onreadystatechange = function(){
        if(httpRequest.readyState === XMLHttpRequest.DONE ){
            if(httpRequest.status === 200){
                let response = httpRequest.responseText;
                alert(response);
            }else{
                alert("There was some error");
            }
        }
    }
    
    httpRequest.open("GET", url, true);
    httpRequest.send();
}
 function main(){
    let submit = $("#submission")[0];
    submit.onclick = function(event){
        event.preventDefault();
        ajax_word_query("definition");
    };
    
} 