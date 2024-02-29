// called when the video loads or when the picture is clicked, runs the video
// after receiving both calls.
var callsSoFar = {
	'video': false,
	'picture': false
};

function maybePlayVideo(caller){
	var c = callsSoFar;
	callsSoFar[caller] = true;
	if (callsSoFar.video && callsSoFar.picture){
		return true;
	}
}

function onPlayerReady(event) {
	var play = maybePlayVideo('video');
	player.playVideo();
	if (!play){
		player.pauseVideo();
	}
}

function pictureClicked(){
	$('.header-placeholder')[0].style.visibility = 'hidden';
	var play = maybePlayVideo('picture');
	if (play){
		player.a.style.display = 'block';
		player.playVideo();
	}
}