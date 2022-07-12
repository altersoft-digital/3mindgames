menuContainer = document.querySelector('.mobile-menu-container');
bodyy = document.querySelector('body');
burgerImage = document.querySelector('#hamburger_image');
closeImage = document.querySelector('#close_image');

function openmenu() {
    menuContainer.classList.add('show-burger-image');
    bodyy.classList.add('hide-overflow');
    burgerImage.classList.remove('show-burger-image');
    closeImage.classList.add('show-burger-image');
}

function closemenu() {
    menuContainer.classList.remove('show-burger-image');
    bodyy.classList.remove('hide-overflow');
    burgerImage.classList.add('show-burger-image');
    closeImage.classList.remove('show-burger-image');
}