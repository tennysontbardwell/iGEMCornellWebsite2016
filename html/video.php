<script src="js/video.js<?php bustCache()?>"></script>
<div id="video-wrapper" align="center" class="row embed-responsive embed-responsive-16by9">
  <!-- <iframe id="video-iframe" src="https://www.youtube.com/embed/zq_KKnycgs8?autoplay=1;enablejsapi=1;rel=0" frameborder="0" allowfullscreen>
  </iframe> -->
  <div id="player"></div>
  <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          videoId: 'zq_KKnycgs8',
          events: {
            'onReady': onPlayerReady,
            // 'onPlayerStateChange': function(event){
            //   wait(1);
            //   player.pauseVideo();
            // }
          },
          // playerVars: {
          //   'autoplay': 1
          // }
        });
        player.a.style.visibility = 'hidden';
      }
  </script>
  <img id='video-placeholder' class='img-responsive' src='resources/placeholders/dog.jpg' onclick = 'pictureClicked()'>
</div>
<div id="video-bottom"></div>