async function getPosts(){
    let res = await fetch('http://Degusha.API.local/notebook/api/v1/Degusha/');
    let posts = await res.json();    
    var elem = document.getElementsByClassName('card-text'); 
    const video = document.getElementsByClassName('card-video');
    let length = posts.length;
    $.ajax({
        url: 'app/services/API/API_request.php',
        type: 'POST',
        data: {"length":length},
        success: function(data){
            console.log(data)
          },
           error: function(){
           console.log('ERROR');
           }})
    for (let i = 0; i < length; i++){

    video[i].poster  = posts[i]["preview"];
    video[i].src  = posts[i]["video"];
    elem[i].innerHTML = posts[i]["Title"];
    }

}
getPosts();