// FOUNDER CHNAGER LOGIC
let FounderEls = document.querySelectorAll(".section-about-us__founder");
let ChangerBtn = document.querySelector(".btn-founder-changer");

ChangerBtn.addEventListener("click", function () {
  Array.prototype.forEach.call(FounderEls, (item) => {
    item.classList.toggle("active");
  });
});

// about us nav logic

let activeEls = document.querySelectorAll(".active");

function LetsDisplay(btn, section) {
  Array.prototype.forEach.call(activeEls, (item) => {
    item.classList.remove("active");
  });
  if (!document.querySelector(btn).classList.contains("active")) {
    document.querySelector(btn).classList.add("active");
  }
  if (!document.querySelector(section).classList.contains("active")) {
    document.querySelector(section).classList.add("active");
  }
}
