function applyCSSTweeks() {
    var headers = $('.section-header-javascriptTarget');
    for (var i = 0; i < headers.length; i++){
        headers[i].className = 'col-md-offset-1 col-md-6 col-lg-offset-2 col-lg-6 section-header';
    }
}
applyCSSTweeks();

window.onload = function(){
	teamSectionSetup();
};

function scrollToElem(elemID){
    $('html, body').animate({
    scrollTop: $("#"+elemID).offset().top
    }, 400);
}

// https://stackoverflow.com/questions/5353934/check-if-element-is-visible-on-screen
function checkVisible( elm, evalType ) {
    evalType = evalType || "visible";

    var vpH = $(window).height(), // Viewport Height
        st = $(window).scrollTop(), // Scroll Top
        y = $(elm).offset().top,
        elementHeight = $(elm).height();
    // console.log(vpH + " and " + st + " and " + y)
    if (evalType === "visible") return ((y < (vpH + st)) && (y > (st - elementHeight)));
    if (evalType === "above") return ((y < (vpH + st)));
}