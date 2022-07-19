// FOUNDER CHNAGER LOGIC
let FounderEls = document.querySelectorAll(".section-about-us__founder");
let ChangerBtn = document.querySelector(".btn-founder-changer");
let aboutFounders = document.querySelectorAll(".about-founder");

function changeFounder() {
  Array.prototype.forEach.call(FounderEls, (item) => {
    item.classList.toggle("active");
  });
  Array.prototype.forEach.call(aboutFounders, (item) => {
    item.classList.toggle("active");
  });
  // let daoChampagne = document.querySelector(".dao-champagne");
  // let alexandreMartel = document.querySelector(".alexandre-martel");
  // if (daoChampagne.classList.contains("active")) {
  // }
}

// about us nav logic

let btnArray = ["#founders", "#mission", "#origins", "#newTalents"];
let sectionArray = [
  ".section-about-us__founders",
  ".section-about-us__missions",
  ".section-about-us__origins",
  ".section-about-us__new-talents",
];
let currChar = 0;

function LetsDisplay(btn, section) {
  const activeEls = document.querySelectorAll(".active");
  Array.prototype.forEach.call(activeEls, (item) => {
    if (
      item.classList.contains("section-about-us__subsec") ||
      item.classList.contains("section-about-us__nav-list")
    ) {
      item.classList.remove("active");
    }
  });
  if (!document.querySelector(btn).classList.contains("active")) {
    document.querySelector(btn).classList.add("active");
  }
  if (!document.querySelector(section).classList.contains("active")) {
    document.querySelector(section).classList.add("active");
  }
}

function nextDisplay() {
  if (currChar == 3) {
    currChar = 0;
    LetsDisplay(btnArray[currChar], sectionArray[currChar]);
  } else {
    LetsDisplay(btnArray[currChar + 1], sectionArray[currChar + 1]);
    currChar++;
  }
}

function prevDisplay() {
  if (currChar == 0) {
    currChar = 3;
    LetsDisplay(btnArray[currChar], sectionArray[currChar]);
  } else {
    LetsDisplay(btnArray[currChar - 1], sectionArray[currChar - 1]);
    currChar--;
  }
}
