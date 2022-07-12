// FOUNDER CHNAGER LOGIC
let FounderEls = document.querySelectorAll(".section-about-us__founder");
let ChangerBtn = document.querySelector(".btn-founder-changer");

ChangerBtn.addEventListener("click", function () {
  Array.prototype.forEach.call(FounderEls, (item) => {
    item.classList.toggle("active");
  });
});

// about us nav logic

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
