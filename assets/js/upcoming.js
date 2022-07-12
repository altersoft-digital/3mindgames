function changepicture(picture) {
    let pic = document.querySelector('#upcoming-main-image-inside');
    pic.removeAttribute('class');
    pic.classList.add(`main-image-${picture}`);
}