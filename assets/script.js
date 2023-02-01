const hamburger = document.querySelector('.hamburger')
const navMenu = document.querySelector('.nav-menu')
const nav = document.querySelector('.navbar')
const content = document.querySelector('.content')
function _hamburger() {
  hamburger.classList.toggle('active')
  navMenu.classList.toggle('active')
  nav.classList.toggle('active')
  content.classList.toggle('hide')
}
