const nav = document.querySelectorAll('.main-header')

//Upon scroll event, check if user is at the top of screen
window.addEventListener('scroll', () => {
  if(window.scrollY !== 0){
    //if not at top
    nav.classList.remove('top')
  } else{
    // if at top
    nav.classList.add('top')
  }
})

