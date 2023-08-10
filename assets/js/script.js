const nav = document.querySelectorAll('.main-header')[0]

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



//Toggle Mobile menu
let mobileMenuToggle = document.getElementById('mobile-menu-toggle')
let navMenu = document.getElementById('main-menu')
mobileMenuToggle.addEventListener('click', () => {
  navMenu.classList.toggle('show-nav')
  mobileMenuToggle.children[0].classList.toggle('fa-bars')
  mobileMenuToggle.children[0].classList.toggle('fa-times')
})