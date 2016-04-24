function pauseVideo(){
	video.pauseVideo();
}

var didPause = false;
function videoScrollCheck(){
	if(!didPause){
		if (!checkVisible($('#video-bottom'),'visible') 
			&& checkVisible($('#video-bottom'),'above')){
			pauseVideo();
		}
	}
}

var video;
function videoSetup(){
	video = new YT.Player('video-iframe');
	video.addEventListener("onStateChange","videoStateDidChange");
}

function videoStateDidChange(state){
	if (state.data == YT.PlayerState.PAUSED){
		didPause = true;
	}
}