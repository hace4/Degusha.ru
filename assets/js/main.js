async function getPosts(){
    let res = await fetch('http://Degusha.API.local/notebook/api/v1/Degusha/');
    let posts = await res.json();

    var elem = document.getElementsByClassName('card-text'); 
    const img = document.getElementsByClassName('card-img');
    console.log(posts[3]["preview"]);
    img[0].src  = posts[3]["preview"];
    elem[0].innerHTML = posts[0]["Title"];
}
getPosts();