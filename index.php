<html>
  <head>
    <title>Raspberry Pi Webcam Streaming</title>
  </head>
  <body>
    <div id="video-jwplayer_wrapper" style="position: relative; display: block; width: 960px; height: 540px;">
      <object type="application/x-shockwave-flash" data="/jwplayer/jwplayer.flash.swf" width="100%" height="100%" bgcolor="#000000" id="video-jwplayer" name="video-jwplayer" tabindex="0">
        <param name="allowfullscreen" value="true">
        <param name="allowscriptaccess" value="always">
        <param name="seamlesstabbing" value="true">
        <param name="wmode" value="opaque">
      </object>
      <div id="video-jwplayer_aspect" style="display: none;"></div>
      <div id="video-jwplayer_jwpsrv" style="position: absolute; top: 0px; z-index: 10;"></div>
    </div>
   // <div> <h1>TESTING PHP</h1>
//</div>
    <script src="/jwplayer/jwplayer.js"></script>
    <script>jwplayer.key="Dztd6fPx1dsBKrY/Ppq0pqKBL8spJvOZQ6fZEA=="</script>
    <script type="text/javascript">
    jwplayer('video-jwplayer').setup({
      flashplayer:"/jwplayer/jwplayer.flash.swf"
      , file:"rtmp://" + window.location.hostname + "/flvplayback/flv:myStream.flv"
      , autoStart: true
      , rtmp:{
        bufferlength:0.1
      }
      , deliveryType: "streaming"
      , width: 960
      , height: 540
      , player: {
        modes: {
          linear: {
            controls:{
              stream:{
                manage:false
                , enabled: false
              }
            }
          }
        }
      }
      , shows: {
        streamTimer: {
          enabled: true
          , tickRate: 100
        }
      }
    });
    </script>
  </body>
</html>
