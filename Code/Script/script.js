// Login :Hide and show
function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    $("#name").text(profile.getName());
    $("#email").text(profile.getEmail());
    $("#image").attr('src', profile.getImageUrl());
    $(".data").css("display", "block");
    $(".sidebar").css("display", "block");
    $(".container123").css("display", "block");
    $(".Contant123").css("display", "block");
    $(".g-signin2").css("display", "none");
    $(".lol").css("display", "none");
    $(".lol1").css("display", "none");
    $(".fuimg").css("display", "none");
    $(".container").css("display", "none");
    $(".fuimg1").css("display", "none");
}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function() {
        alert("You have been signed out successfully");
        $(".data").css("display", "none");
        $(".g-signin2").css("display", "block");
        $(".sidebar").css("display", "none");
        $(".container123").css("display", "none");
        $(".Contant123").css("display", "none");
        $(".lol").css("display", "block");
        $(".lol1").css("display", "block");
        $(".fuimg").css("display", "block");
        $(".container").css("display", "block");
        $(".fuimg1").css("display", "block");
    });
}

// Dont Know
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