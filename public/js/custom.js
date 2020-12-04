let body = document.querySelector("body");
let nav = document.querySelector("nav");
let harm = document.querySelector(".toggle");
let overlay = document.querySelector(".overlay");
let harmOpen = false;

harm.addEventListener("click", () => {
  if (!harmOpen) {
    harm.classList.add("open");
    overlay.style.display = "block";
    body.classList.add("noscroll");
    harmOpen = true;
  } else {
    harm.classList.remove("open");
    overlay.style.display = "none";
    body.classList.remove("noscroll");
    harmOpen = false;
  }
});

window.addEventListener("scroll", () => {
  if (window.scrollY > 0) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
});
