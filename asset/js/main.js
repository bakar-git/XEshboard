
/* toggle left bar on small screen */
function lb_mobile_handler(){
    // in mobile devices, onclick of first child of left-bar, change display of left-bar to close
    var leftbarT = document.getElementById("left-bar").children[0];
    leftbarT.onclick = ()=>{
        leftbarT.parentElement.dataset.display = "close";
    }
    // checks if in mobile device
    var mediaQuery= window.matchMedia("(any-hover: none)");
    mediaQuery.onchange = ()=>{
        if (mediaQuery.matches) leftbarT.parentElement.dataset.overlay = "true";
    };
    mediaQuery.onchange();
}

lb_mobile_handler();

/* left bar comapct mode item hover handle */ 
function lb_compact_item_hover(){
    var leftbar = document.getElementById("left-bar");
    document.querySelectorAll(".lb-item .name").forEach(elem=>{
        elem.parentElement.onmouseover = () => {
            if(leftbar.dataset.display == "compact"){
                elem.style.top = elem.parentElement.getBoundingClientRect().top + "px";
                elem.style.height = elem.parentElement.offsetHeight + "px";
            }
        }
    });
}

lb_compact_item_hover();




/* different config buttons */ 
function configs(){
    var leftbar = document.getElementById("left-bar");
    //top bar toggle -> lb-display-close
    document.getElementById("toggle-lb-display-close").onclick = ()=>{leftbar.dataset.display = (leftbar.dataset.display == "normal" || leftbar.dataset.display == "compact")? "close": "normal";};
    // content expand
    var content = document.getElementById("content");
    document.getElementById("toggle-content-display-expand").onclick = ()=>{content.dataset.display = (content.dataset.display == "normal")? "expand": "normal";};
    // lb config panel
    document.getElementById("toggle-lb-overlay").onclick = ()=>{leftbar.dataset.overlay = (leftbar.dataset.overlay == "true")? "false": "true";};
    document.getElementById("toggle-lb-display-compact").onclick = ()=>{leftbar.dataset.display = (leftbar.dataset.display == "normal")? "compact": "normal";};
    document.getElementById("toggle-lb-interaction-mouse").onclick = ()=>{leftbar.dataset.interaction = (leftbar.dataset.interaction == "normal")? "mouse": "normal";};
}
configs();
