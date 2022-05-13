const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");


toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
})


// Dark and Light Mode
modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");

    if (body.classList.contains("dark")) {
        modeText.innerText = "Light mode";
    } else {
        modeText.innerText = "Dark mode";

    }
});
// 
//


// Popup Test
function togglepopup() {
    document.getElementById("popup-1").classList.toggle("active");

}


// Popup Frinds Case
const container = document.querySelector(".container"),
    privacy = container.querySelector(".post .privacy"),
    arrowBack = container.querySelector(".audience .arrow-back");

privacy.addEventListener("click", () => {
    container.classList.add("active");
});

arrowBack.addEventListener("click", () => {
    container.classList.remove("active");
});