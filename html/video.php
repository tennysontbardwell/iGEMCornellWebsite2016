<script src="js/video.js<?php bustCache()?>"></script>
<div id="video-wrapper" align="center" class="row full-width embed-responsive embed-responsive-16by9">
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
          }
        });
        player.a.style.visibility = 'hidden';
      }
  </script>
  <div class="header-placeholder">
    <ul>
      <li><span>
        <h1 class="header-title">Find out what Cornell’s only synthetic biology team is all about</h1>
      </span></li>
      <li><span>
        <img class="header-playbutton" src="resources/header/play.png" onclick = 'pictureClicked()'>
      </span></li>
      <li><span>
        <ul class="header-info-buttons-desktop" style="
            margin:  0 auto;
        ">
          <li><div></div></li>
          <li><div></div></li>
          <li><div></div></li>
        </ul>
      </span></li>
    </ul>
  </div>
</div>
<div id="video-bottom"></div>
<div class="container header-info-buttons-mobile">
  <div class="col-sm-4">
    <img class="img-responsive" src="resources/header/button_WL_col.png" style="
        padding-bottom: 40px;
    ">
  </div>
  <div class="col-sm-4">
    <img class="img-responsive" src="resources/header/button_DL_col.png" style="
        padding-bottom: 40px;
    ">
  </div>
  <div class="col-sm-4">
    <img class="img-responsive" src="resources/header/button_PP_col.png" style="
        padding-bottom: 40px;
    ">
  </div>
</div>
