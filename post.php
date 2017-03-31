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