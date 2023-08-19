async function getPosts(){
    let res = await fetch('http://Degusha.API.local/api/v1/Degusha/');
    let posts = await res.json();
    console.log(posts[0]["full_name"]);
}
getPosts();