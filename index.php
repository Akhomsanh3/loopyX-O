<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Loopy X &amp; O</title>
    <meta name='description' content='A Tic-Tac-Toe game with a timer and an infinite loop'>
    <link rel='stylesheet' href='style.css'>
    <meta name='theme-color' content='#2F4F4F'>
    <link rel='manifest' href='./manifest.json'>
    <!--Meta elements taken from notwaldorf's doodle-->
    <!--https://github.com/notwaldorf/doodle-->
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>

    <link rel='shortcut icon' href='./images/favicon.ico'>
    <meta name='application-name' content='loopyXO'>
    <!-- Add to homescreen for Safari on iOS -->
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-status-bar-style' content='black-translucent'>
    <meta name='apple-mobile-web-app-title' content='loopyXO'>
    <!-- Homescreen icons -->
    <link rel='apple-touch-icon' sizes='192x192' href='./images/icon-192x192.png'>
    <!-- Tile icon for Windows 8 (144x144 + tile color) -->
    <meta name='msapplication-TileImage' content='./images/icon-192x192.png'>
    <meta name='msapplication-TileColor' content='#2F4F4F'>
    <meta name='msapplication-tap-highlight' content='no'>
    <link rel="stylesheet" href="raleway.css" async>
    <link rel="stylesheet" href="snackbarlight.min.css" async>
</head>

<body>
    <div style='display:flex; flex-direction: column'>
        <div id='progress' width=0 height=0>
        </div>

        <header id='scorecard'>
            <p id='xScoreContainer'>X: <span class='xScore'>0</span></p>
            <h2><a href="/" >Loopy X &amp; O</a></h2>
            <p id='oScoreContainer'>O: <span class='oScore'>0</span></p>
        </header>

        <canvas id='canvas'>
        </canvas>
    </div>

    <div class="fragment">
        <div class="fragmentContent">
            <p>Wanna give it a try?. </p>
            <p>Let's play ‎🎉</p>

            <button class='onePlayer'>Player vs AI</button>
            <button class='twoPlayer'>II Players</button>
        </div>
    </div>

    <script src='js/fabric.min.js'></script>
    <script src='js/lodash.min.js' async></script>
    <script src='build/index.js' async></script>
    <script src='js/snackbarlight.min.js' async></script>
    <script src='js/service-worker-registration.js' async></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-46315795-6', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>
