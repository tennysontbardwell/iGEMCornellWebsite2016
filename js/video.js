// called when the video loads or when the picture is clicked, runs the video
// after receiving both calls.
var callsSoFar = {
	'video': false,
	'picture': false
};
function maybePlayVideo(caller){
	var c = callsSoFar;
	callsSoFar[caller] = true;
	if (callsSoFar['video'] && callsSoFar['picture']){
		player.playVideo();
	}
}

function onPlayerReady(event) {
	maybePlayVideo('video');
	player.playVideo();
	player.pauseVideo();
}

function pictureClicked(){
	maybePlayVideo('picture');
	player.a.style.visibility = 'visible';
	$('#video-placeholder')[0].style.visibility = 'hidden';
}