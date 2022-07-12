function changepicture(picture) {
    let pic = document.querySelector('#upcoming-main-image-inside');
    let smallpic = document.querySelector(`#small-image-${picture}`);
    pic.removeAttribute('class');
    pic.classList.add(`main-image-${picture}`);
    document.querySelector('.active-small-image').classList.remove('active-small-image');
    smallpic.classList.add('active-small-image');
}