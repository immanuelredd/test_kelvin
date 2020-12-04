const body = document.querySelector("body");
const mobile = document.querySelector(".mobile");
const navOverlay = document.querySelector(".admin__nav");
let mobileOpen = false;

mobile.addEventListener("click", () => {
  if (!mobileOpen) {
    mobile.classList.add("open");
    navOverlay.style.display = "block";
    body.classList.add("noscroll");
    mobileOpen = true;
  } else {
    mobile.classList.remove("open");
    navOverlay.style.display = "none";
    body.classList.remove("noscroll");
    mobileOpen = false;
  }
});
