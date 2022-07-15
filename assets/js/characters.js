let chars = ['angel', 'tariel', 'dog', 'astronaut', 'sonia'];
let currentChar = 'angel';
let currcharnum = 0;

function selectCharacter(char) {
    bigpic = document.querySelector(`.main-character`);

    // incoming
    ibigpicActive = `main-character-${char}`;
    icharContent = document.querySelector(`#char-content-${char}`);
    ismallpic = document.querySelector(`#smal-char-img-${char}`);

    // old
    obigpicActive = `main-character-${currentChar}`;
    ocharContent = document.querySelector(`#char-content-${currentChar}`);
    osmallpic = document.querySelector(`#smal-char-img-${currentChar}`);

    bigpic.classList.remove(obigpicActive);
    bigpic.classList.add(ibigpicActive);

    ocharContent.classList.remove('display-grid');
    icharContent.classList.add('display-grid');

    osmallpic.classList.remove('small-character-item-container-active');
    ismallpic.classList.add('small-character-item-container-active');

    currentChar = char;

}

function nextChar() {
    if(currcharnum == 4) {
        currcharnum = 0;
        selectCharacter(chars[currcharnum]);
    } else {
        selectCharacter(chars[currcharnum+1]);
        currcharnum++;
    }
}

function prevChar() {
    if(currcharnum == 0) {
        currcharnum = 4;
        selectCharacter(chars[currcharnum]);
    } else {
        selectCharacter(chars[currcharnum-1]);
        currcharnum--;
    }
}