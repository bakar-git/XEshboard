/* Normal Layout and Fixed laout switch */
function toggleLayout(){
    var bodyWrapper = document.getElementById("body-wrapper");
    (bodyWrapper.dataset.layout == "normal")?bodyWrapper.dataset.layout = "fixed":bodyWrapper.dataset.layout = "normal";
}
