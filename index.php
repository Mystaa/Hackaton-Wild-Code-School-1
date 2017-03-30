<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>.Hack Météo</title>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>


  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css";">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300">
    <link href="http://cdn-files.deezer.com/js/min/dz.js">

</head>

<body>
  <?php include ('script.php'); ?>
  <div id="login-button">
    <img src="loupe.png">
  </img>
</div>
<div id="container2">
  <h1>Météo</h1>
  <span class="close-btn">
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
  </span>

  <form action="index.php" method="post">
    <input type="text" name="ville" placeholder="Entrez la ville de votre choix">
      <input id='search' type="submit" value="Rechercher" />
      <div id="remember-container">
      <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
      <span id="remember">Enregistrer la ville</span>
      <span id="forgotten">Villes précédentes</span>
    </div>
  </form>
</div>
<!-- Villes précédentes -->
<div id="forgotten-container">
 <h1>Villes précédentes</h1>
 <span class="close-btn">
  <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
</span>
<form>
  <script type="text/javascript">// <![CDATA[
function deroule(champ,valeur)
{/*valeur est la hauteur en pixel de la zone*/
switch (champ)
{
case 2: /*si champ vaut 2 alors on change la hauteur de zone2*/
    document.getElementById("zone2").style.height=valeur+'px';
    break;
}
}
// ]]></script>
<div id="zone2" style="width: 100%; height: 20px; background: White; border: 1px solid DimGrey; transition: height 1s; -moz-transition: height 1s;-webkit-transition: height 1s;-o-transition: height 1s; overflow: hidden;">
    <div id="bandeau2" style="text-align: center; height: 20px; width: 100%; font-size: medium; color: white; background-color: darkgrey;" onmouseover="deroule(2,250);" onmouseout="deroule(2,20);">Villes Précédentes
    </div>
    <div id="texte2" style="text-align: center;">Antartica
    </div>
</div>
  <a href="#" class="orange-btn">Selectionner</a>
</form>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>
<script>
  (function(d, s, id) { 
  var js, djs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return; 
  js = d.createElement(s); js.id = id; 
  js.src = "http://e-cdn-files.deezer.com/js/widget/loader.js"; 
   djs.parentNode.insertBefore(js, djs);
}(document, "script", "deezer-widget-loader"));</script>



<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>


  <?php
  $ville = htmlspecialchars($_POST["ville"]);
  if (!empty($ville)){

      $weatherjson = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$ville."&units=metric&appid=3f769c525adf37bcccd252e255f81a53");
      $weatherarray = json_decode($weatherjson, true);
      $pressure = $weatherarray["main"]["pressure"];
      $temp = $weatherarray["main"]["temp"];
      $humidity = $weatherarray["main"]["humidity"];
      $name = $weatherarray["name"];
      $desc = $weatherarray["weather"]["0"]["main"];

  }

  ?>

  <div class="background">
      <div class="container">
          <svg id="back">
              <radialGradient id="SVGID_1_" cx="0" cy="0" r="320.8304" gradientUnits="userSpaceOnUse">
                  <stop  offset="0" style="stop-color:#FFDE17;stop-opacity:0.7"/>
                  <stop  offset="1" style="stop-color:#FFF200;stop-opacity:0"/>
              </radialGradient>
              <path id="sunburst" style="fill:url(#SVGID_1_);" d="M0,319.7c-18.6,0-37.3-1.6-55.5-4.8L-7.8,41.4c5.1,0.9,10.6,0.9,15.7,0L56,314.8C37.6,318,18.8,319.7,0,319.7z
   M-160.8,276.6c-32.5-18.8-61.3-42.9-85.5-71.6L-34,26.2c3.4,4.1,7.4,7.4,12,10.1L-160.8,276.6z M161.3,276.4L22.1,36.2
  c4.5-2.6,8.6-6,12-10.1l212.6,178.5C222.5,233.4,193.8,257.6,161.3,276.4z M-302.5,108.3C-315.4,73-321.9,36-322-1.8l277.6-0.5
  c0,5.3,0.9,10.4,2.7,15.2L-302.5,108.3z M302.6,107.8L41.8,12.8c1.7-4.7,2.6-9.7,2.6-14.9c0-0.3,0-0.6,0-1H322l0-1.3l0,1.9
  C322,35.4,315.5,72.5,302.6,107.8z M-41.8-17.5l-261-94.5c12.8-35.4,31.6-68,55.8-96.9L-34.1-30.8C-37.5-26.8-40.1-22.3-41.8-17.5z
   M41.7-17.7c-1.8-4.8-4.4-9.3-7.8-13.3l212-179.2c24.3,28.8,43.3,61.3,56.3,96.6L41.7-17.7z M-22.2-40.8l-139.6-240
  c32.7-19,68.1-32,105.2-38.6L-8-46.1C-13-45.2-17.8-43.4-22.2-40.8z M22-40.9c-4.4-2.6-9.2-4.3-14.2-5.1l47.1-273.6
  c37.2,6.4,72.7,19.2,105.4,38L22-40.9z"/>
          </svg>
          <nav>
              <ul>
                  <li><a id="button-snow" class="active"><i class="wi wi-snow"></i></a></li>
                  <li><a id="button-wind"><i class="wi wi-strong-wind"></i></a></li>
                  <li><a id="button-rain"><i class="wi wi-rain"></i></a></li>
                  <li><a id="button-thunder"><i class="wi wi-lightning"></i></a></li>
                  <li><a id="button-sun"><i class="wi wi-day-sunny"></i></a></li>
              </ul>
          </nav>
          <div id="card" class="weather">
              <svg id="inner">
                  <defs>
                      <path id="leaf" d="M41.9,56.3l0.1-2.5c0,0,4.6-1.2,5.6-2.2c1-1,3.6-13,12-15.6c9.7-3.1,19.9-2,26.1-2.1c2.7,0-10,23.9-20.5,25 c-7.5,0.8-17.2-5.1-17.2-5.1L41.9,56.3z"/>
                  </defs>
                  <circle id="sun" style="fill: #F7ED47" cx="0" cy="0" r="50"/>
                  <g id="layer3"></g>
                  <g id="cloud3" class="cloud"></g>
                  <g id="layer2"></g>
                  <g id="cloud2" class="cloud"></g>
                  <g id="layer1"></g>
                  <g id="cloud1" class="cloud"></g>
              </svg>
              <div class="details">
                  <div class="temp"><?php echo number_format($temp,0); echo "<span>°C</span>" ?></div>
                  <div class="right">
                      <div id="date"><?php echo date(' d-m-Y'); ?></div>
                      <div id="ville"><?php echo $name; ?></div>
                  </div>

              </div>
          </div>
          <svg id="outer"></svg>
      </div>
  </div>

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
    echo '<div id="player" class="deezer-widget-player" data-src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=350&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=1531937333&app_id=230062" data-scrolling="no" data-frameborder="0" data-allowTransparency="true" data-width="350" data-height="350"></div>';
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


  

<!-- BDD History -->
<?php 
$ville = $_POST['ville']; 
try
{
$bdd = new PDO('mysql:host=localhost; dbname = hackaton', 'root', 'Azerty67');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO ville(ville) VALUES(;ville)');
$req->execute(array(';Ville' => $_POST['Ville']));

echo $_POST['ville'];
?>
</body>
</html>
