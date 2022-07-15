let picArray = ['1', '2', '3', '4'];
let currpicnum = 0;


function changepicture(picture) {
    let pic = document.querySelector('#upcoming-main-image-inside');
    let smallpic = document.querySelector(`#small-image-${picture}`);
    pic.removeAttribute('class');
    pic.classList.add(`main-image-${picture}`);
    document.querySelector('.active-small-image').classList.remove('active-small-image');
    smallpic.classList.add('active-small-image');
}

function nextpic() {
    if(currpicnum == 3) {
        currpicnum = 0;
        changepicture(picArray[currpicnum]);
    } else {
        changepicture(picArray[currpicnum+1]);
        currpicnum++;
    }
}

function prevpic() {
    if(currpicnum == 0) {
        currpicnum = 3;
        changepicture(picArray[currpicnum]);
    } else {
        changepicture(picArray[currpicnum-1]);
        currpicnum--;
    }
}