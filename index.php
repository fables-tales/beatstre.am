<!DOCTYPE html>
<html>
    <head>
        <title>beatstre.am</title>
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <style type="text/css">
            .container {
                margin-top:50px;
                margin-bottom:50px;
            }
            .mixes {
                margin:50px 0px;
                padding-top:20px;
                padding-bottom:30px;
            }

            .mixes h2 {
                margin-bottom:30px;
            }
            .match-unit {
                padding-left:60px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>beatstre.am Live Streaming</h1>
                <h2>Live Mixes by Steven Richards and Johan Michalove</h2><br>
<?php
$url = file_get_contents("http://beatstre.am:8000/status.xsl");
if (preg_match("/Stream Title/i", $url)) {
    echo "<audio src=\"http://beatstre.am:8000/stream.ogg\" controls=\"controls\" autoplay=\"autoplay\"></audio>";
    echo "<h2>stream is up!</h2>";
} else {
    echo "<h2>No one currently mixing, check back later!</h2>";
}
?>
            </div>
            <h3 class="match-unit"><a href="mailto:steven@beatstre.am">Email Steven</a> or <a href="mailto:johan@beatstre.am">Email Johan</a></h3>
            <hr/>
            <h2 class="match-unit">Recent Mixes: </h2>
            <div class="hero-unit mixes">
                <h2>Saturday September 29th, 2012</h2>
                <iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F61661005&show_artwork=true"></iframe>
            </div>
        </div>
    </body>
</html>

