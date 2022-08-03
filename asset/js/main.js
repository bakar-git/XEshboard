/* Normal Layout and Fixed laout switch */
function toggleLayout(){
    var bodyWrapper = document.getElementById("body-wrapper");
    (bodyWrapper.dataset.layout == "normal")?bodyWrapper.dataset.layout = "fixed":bodyWrapper.dataset.layout = "normal";
}
toggleLayout();
/* toggle left bar on small screen */
function lb_mobile_handler(){
    var leftbarT = document.getElementById("left-bar").children[0];
    leftbarT.onclick = ()=>{
        leftbarT.parentElement.dataset.display = "close";
    }

    if (window.matchMedia("(any-hover: none)").matches && window.matchMedia("(any-pointer: none)").matches){
        document.getElementById("left-bar").dataset.overlay = "true";
    }
}

lb_mobile_handler();

/* left bar display toggler */

function lb_display_toggle(){
    var leftbarT = document.getElementById("left-bar");
    (leftbarT.dataset.display == "normal")?leftbarT.dataset.display = "close":leftbarT.dataset.display = "normal";
}