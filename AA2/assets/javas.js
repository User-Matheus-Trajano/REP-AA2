const btnMenu = document.querySelector('.btn-custom');
const menu = document.querySelector(".vertical-menu");
const btnMenuClose = document.querySelector(".vertical-menu .btn-custom");
const body = document.body;

btnMenu.addEventListener('click', function() {

    menu.classList.add('menu-active');
    body.classList.add('no-scroll');
});

btnMenuClose.addEventListener('click', function() {
    menu.classList.remove('menu-active');
    body.classList.remove('no-scroll');
});