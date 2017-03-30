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


</head>

<body>
  <div id="login-button">
    <img src="loupe.png">
  </img>
</div>
<div id="container">
  <h1>Météo</h1>
  <span class="close-btn">
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
  </span>

  <form action="ville.php" method="POST">
    <input type="text" name="ville" placeholder="Entrez la ville de votre choix">
      <input id='search' type="submit" value="Rechercher" />
      <div id="remember-container">
      <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
      <span id="remember">Enregistrer la ville</span>
      <span id="forgotten">Villes précédentes</span>
    </div>
  </form>
</div>
<!-- Trouver une ville -->
<div id="forgotten-container">
 <h1>Bi-bi-bite</h1>
 <span class="close-btn">
  <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
</span>

<form>
  <input type="bi-bite" name="bi-bite" placeholder="bi-bite">
  <a href="#" class="orange-btn">bite</a>
</form>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>



</body>
</html>
