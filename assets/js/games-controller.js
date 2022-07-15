function swapgame(game, delt) {
    let gm = document.querySelector(`#hero-game-${game}`);
    let dlt = document.querySelector(`#hero-game-${delt}`);
    let bg = document.querySelector('.wrap-hero');
    let activeController = document.querySelector(`#game-controller-item-${game}`);
    let deleteController = document.querySelector(`#game-controller-item-${delt}`);
    let activeNews = document.querySelector(`#wrap-news-${game}`);
    let deleteNews = document.querySelector(`#wrap-news-${delt}`);

    gm.classList.add('show-hero-game');
    dlt.classList.remove('show-hero-game');
    bg.classList.add(`wrap-hero-game-${game}`);
    bg.classList.remove(`wrap-hero-game-${delt}`);
    activeController.classList.add('active-game-controller-item');
    deleteController.classList.remove('active-game-controller-item');
    activeNews.classList.add('display-block');
    deleteNews.classList.remove('display-block');

    if(game == '2') {
        document.querySelector('.out-game-mechanics').classList.add('display-block');
        document.querySelector('.out-characters').classList.add('display-block');
    } else {
        document.querySelector('.out-game-mechanics').classList.remove('display-block');
        document.querySelector('.out-characters').classList.remove('display-block');
    }
}