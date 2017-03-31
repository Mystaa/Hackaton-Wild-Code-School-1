<?php

$index = 0;

if ($desc == "Clear" || $desc == "Atmosphere") {
    $index = 4;
    echo '<style>html {background: url("http://cupboardsupply.co.za/wp-content/uploads/2015/02/weather-background.png") no-repeat center center fixed;  background-size: cover;}</style>';
    echo '<div id="player" class="deezer-widget-player" data-src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=350&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=2957605482&app_id=230062" data-scrolling="no" data-frameborder="0" data-allowTransparency="true" data-width="350" data-height="350"></div>';

}
else if ($desc == "Thunderstorm" || $desc == "Clouds" ){
    $index = 3;
    echo '<style>html {background: url("https://s3.amazonaws.com/hoosieragtoday.com/wp-content/uploads/2016/04/dark-clouds.jpg") no-repeat center center fixed;  background-size: cover;}</style>';
    echo '<div id="player" class="deezer-widget-player" data-src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=350&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=1310050287&app_id=230062" data-scrolling="no" data-frameborder="0" data-allowTransparency="true" data-width="350" data-height="350"></div>';
}
else if ($desc == "Rain" || $desc == "Drizzle" ){
    $index = 2;
    echo '<style>html { background: url(http://cdn.magdeleine.co/wp-content/uploads/2014/05/3jPYgeVCTWCMqjtb7Dqi_IMG_8251-1400x933.jpg) no-repeat center center fixed;  background-size: cover;}</style>';
    echo '<div id="player" class="deezer-widget-player" data-src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=350&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=9251660&app_id=230062" data-scrolling="no" data-frameborder="0" data-allowTransparency="true" data-width="350" data-height="350"></div>';
}
else if ($desc == "Mist" ){
    $index = 1;
    echo '<style>html{background: url("https://image.noelshack.com/fichiers/2017/13/1490906143-weather-wallpaper-13.jpg") no-repeat center center fixed;  background-size: cover;}</style>';
    echo '<div id="player" class="deezer-widget-player" data-src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=350&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=2965515302&app_id=230062" data-scrolling="no" data-frameborder="0" data-allowTransparency="true" data-width="350" data-height="350"></div>';
}
else if ($desc == "Snow" ){
    $index = 0;
    echo '<style>html {background: url("http://www.wallfizz.com/nature/neige/3416-glace-et-neige-nord-WallFizz.jpg") no-repeat center center fixed;  background-size: cover;}</style>';
    echo '<div id="player" class="deezer-widget-player" data-src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=350&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=18947664&app_id=230062" data-scrolling="no" data-frameborder="0" data-allowTransparency="true" data-width="350" data-height="350"></div>';
}
else if ($desc !== "Clear" || $desc !== "Atmosphere" || $desc !== "Thunderstorm" || $desc !== "Clouds" || $desc !== "Rain" || $desc !== "Drizzle" || $desc !== "Mist" || $desc !== "Snow"){
    $index = 3;
    echo '<style>html {background: url("https://s3.amazonaws.com/hoosieragtoday.com/wp-content/uploads/2016/04/dark-clouds.jpg") no-repeat center center fixed;  background-size: cover;}</style>';
    echo '<div id="player" class="deezer-widget-player" data-src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=350&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=1310050287&app_id=230062" data-scrolling="no" data-frameborder="0" data-allowTransparency="true" data-width="350" data-height="350"></div>';

}
?>