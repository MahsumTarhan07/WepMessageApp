const burger = document.getElementById('burger');
const ul = document.querySelector('nav ul');


burger.addEventListener('click' , function(){
    burger.classList.toggle("show-x");
    ul.classList.toggle('show');
});