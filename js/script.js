function applyCSSTweeks() {
    var headers = $('.section-header-javascriptTarget');
    for (var i = 0; i < headers.length; i++){
        headers[i].className = 'col-md-offset-1 col-md-6 col-lg-offset-2 col-lg-6 section-header';
    }
}
applyCSSTweeks();

window.onload = function(){
	teamSectionSetup();
    updateNavbar();
};
window.onscroll = function(){
    updateNavbar();
};

function scrollToElem(elemID){
    $('html, body').animate({
    scrollTop: $("#"+elemID).offset().top - 80
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

function clearNavbar(turnOn){
    var elems = $('.navbar-nav')[0].children;
    for(var i = 0; i<elems.length; i++){
        var elem = elems[i].children[0];
        if (elem.id == turnOn){
            elem.className = 'current-section-header';
        } else{
            elem.className = '';
        }
    }
}

function updateNavbar(){
    var wh = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
    var pos = $(document).scrollTop() + 80 + wh * 0.3;
    if (pos < $('#subteams').offset().top){
        clearNavbar('navbar-aboutus');
    }
    else if (pos < $('#team').offset().top){
        clearNavbar('navbar-subteams');
    }
    else if (pos < $('#recruiting').offset().top){
        clearNavbar('navbar-team');
    }
    else if (pos < $('#sponsors').offset().top){
        clearNavbar('navbar-recruiting');
    } else {
        clearNavbar('navbar-sponsors');
    }
}