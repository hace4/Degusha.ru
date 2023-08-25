async function anim_card() {

  let card = document.querySelectorAll('.card');  
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
async function anim() {

  let text = document.querySelector('.text-al') || {};

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


anim_card();


anim();