
<html>
    <head>
      <!--
        <link href="./img/favicon.png" rel="shortcut icon"/>
        <meta content="width=1280, maximum-scale=1.0" name="viewport"/>
      -->
        <meta charset="utf-8"/>
        <link href="./css/homepage.css" rel="stylesheet" type="text/css"/>
        </meta>
    </head>

    <body style="background: rgba(236, 143, 106, 1.0);">

        <input id="anPageName" name="page" type="hidden" value="homepage"/>

        <img src="./img/bitmap.png" class="bitmap b1" />
        <img src="./img/bitmap.png" class="bitmap b2" />
        <img src="./img/bitmap.png" class="bitmap b3" />
        <img src="./img/bitmap.png" class="bitmap b4" />
        <img src="./img/bitmap2.png" class="bitmap b5" />

        <div class="titlebar" >
          <div class="sign up t1"> <a href="signup.html"> sign up </a> </div>
          <div class="sign in t1"> <a href="login.html"> sign in </a> </div>
        </div>

        <div class="body">
            <div class="udog t1">
                UnderDog
            </div>

            <div class="info t1">
                stay updated on local places and events
            </div>
            <div id="container">
                <form action="search.php" method="post">
                <input id="searchbar" type="text" name="location" placeholder="Enter a location..."/>
                <input type="submit" value="Search"/>
              <!--<input id="button2" type="submit" value="Search">
            -->
                </form>
            </div>
<!--
            <div class="inputtex">
              <input type="text" name="FirstName" value="Mickey">
            </div>

            <div class="locate">
                <span class="span1">locate</span><span class="span2"><br /></span>
            </div>
          -->
            <div class="map1" id="map"></div>
        </div>

        <script src="map.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBH0hpAXIYEdKATsqRMH59RQYKq11z1mqU&callback=myMap"></script>

        <script type="text/javascript">
          function myMap() {
          var mapProp= {
            center:new google.maps.LatLng(39.951653, -75.191086),
            zoom:16,
          };

          var map = new google.maps.Map(document.getElementById("map"),mapProp);
          var myCenter = {<?php echo $_POST["location"];?>};

          var marker = new google.maps.Marker({
            position:myCenter,
            //animation:google.maps.Animation.BOUNCE
          });

          marker.setMap(map);
          }

        </script>
        <!-- Scripts
        <script>
            anima_isHidden = function(e) {
                if (!(e instanceof HTMLElement)) return !1;
                if (getComputedStyle(e).display == "none") return !0; else if (e.parentNode && anima_isHidden(e.parentNode)) return !0;
                return !1;
            };
            anima_loadAsyncSrcForTag = function(tag) {
                var elements = document.getElementsByTagName(tag);
                var toLoad = [];
                for (var i = 0; i < elements.length; i++) {
                    var e = elements[i];
                    var src = e.getAttribute("src");
                    var loaded = (src != undefined && src.length > 0 && src != 'data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
                    if (loaded) continue;
                    var asyncSrc = e.getAttribute("anima-src");
                    if (asyncSrc == undefined || asyncSrc.length == 0) continue;
                    if (anima_isHidden(e)) continue;
                    toLoad.push(e);
                }
                toLoad.sort(function(a, b) {
                    return anima_getTop(a) - anima_getTop(b);
                });
                for (var i = 0; i < toLoad.length; i++) {
                    var e = toLoad[i];
                    var asyncSrc = e.getAttribute("anima-src");
                    e.setAttribute("src", asyncSrc);
                }
            };
            anima_pauseHiddenVideos = function(tag) {
                var elements = document.getElementsByTagName("video");
                for (var i = 0; i < elements.length; i++) {
                    var e = elements[i];
                    var isPlaying = !!(e.currentTime > 0 && !e.paused && !e.ended && e.readyState > 2);
                    var isHidden = anima_isHidden(e);
                    if (!isPlaying && !isHidden && e.getAttribute("autoplay") == "autoplay") {
                        e.play();
                    } else if (isPlaying && isHidden) {
                        e.pause();
                    }
                }
            };
            anima_loadAsyncSrc = function(tag) {
                anima_loadAsyncSrcForTag("img");
                anima_loadAsyncSrcForTag("iframe");
                anima_loadAsyncSrcForTag("video");
                anima_pauseHiddenVideos();
            };
            var anima_getTop = function(e) {
                var top = 0;
                do {
                    top += e.offsetTop || 0;
                    e = e.offsetParent;
                } while (e);
                return top;
            };
            anima_loadAsyncSrc();
            anima_old_onResize = window.onresize;
            anima_new_onResize = undefined;
            anima_updateOnResize = function() {
                if (anima_new_onResize == undefined || window.onresize != anima_new_onResize) {
                    anima_new_onResize = function(x) {
                        if (anima_old_onResize != undefined) anima_old_onResize(x);
                        anima_loadAsyncSrc();
                    };
                    window.onresize = anima_new_onResize;
                    setTimeout(function() {
                        anima_updateOnResize();
                    }, 3000);
                }
            };
            anima_updateOnResize();
            setTimeout(function() {
                anima_loadAsyncSrc();
            }, 200);
        </script>
         End of Scripts -->
    </body>
</html>
