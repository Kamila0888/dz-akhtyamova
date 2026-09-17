const menu = document.querySelector('.navigation-mobile')
const burger = document.querySelector('.burger')

burger.addEventListener('click',()=>{
    menu.classList.toggle('navigation--open')
    burger.classList.toggle('burger--open')
});