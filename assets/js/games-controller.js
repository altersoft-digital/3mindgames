function swapgame(game, delt) {
    let gm = document.querySelector(`#hero-game-${game}`);
    let dlt = document.querySelector(`#hero-game-${delt}`)

    gm.classList.add('show-hero-game');
    dlt.classList.remove('show-hero-game');
}