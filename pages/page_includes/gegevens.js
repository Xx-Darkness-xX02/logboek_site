// persoonlijke gegevens lees meer knop
function read_more(){
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("my_button");

    if(dots.style.display === "none"){
        dots.style.display = "inline";
        btnText.innerHTML = "Meer weergeven";
        moreText.style.display = "none";
    }else {
        dots.style.display = "none";
        btnText.innerHTML = "Minder weergeven";
        moreText.style.display = "inline";
    }
}
// school gegevens lees meer knop
function lees_meer(){
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("mijn_knop");

    if(dots.style.display === "none"){
        dots.style.display = "inline";
        btnText.innerHTML = "Meer weergeven";
        moreText.style.display = "none";
    }else {
        dots.style.display = "none";
        btnText.innerHTML = "Minder weergeven";
        moreText.style.display = "inline";
    }
}

// stage gegevens lees meer knop

function read_More(){
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("my_Button");

    if(dots.style.display === "none"){
        dots.style.display = "inline";
        btnText.innerHTML = "Meer weergeven";
        moreText.style.display = "none";
    }else {
        dots.style.display = "none";
        btnText.innerHTML = "Minder weergeven";
        moreText.style.display = "inline";
    }
}