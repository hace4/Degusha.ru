async function anim() {

    let card = document.querySelectorAll('.card');    console.log(card.length);
    for (let i = 0; i < card.length; i++){

    var observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
          return;
        }
  
        if (entry.isIntersecting) {
          card[i].classList.add('animation');
          return;
        }
  
        card[i].classList.remove('animation');
      });
    });

    observer.observe(card[i]);
    }
  };
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
async function anim2() {

    let text = document.querySelector('.text-al');    console.log(text.length);

    var observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
            return;
          }
    
          if (entry.isIntersecting) {
            text.classList.add('animation');
            return;
          }
    
        });
      });
  
      observer.observe(text);
    };
getPosts();
anim();
anim2();
