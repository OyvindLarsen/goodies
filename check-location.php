<?php
  
function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}

$output="";


if ($_POST) {

  
  $lat =  $_POST["lat"];
  $lon = $_POST["long"];
  
  
  $url = 'http://api.openweathermap.org/data/2.5/weather?lat='. $lat. '&lon=' . $lon .'&appid=2686f9f8e8cb62a977bb6ad8d0afdb44';
  $content = file_get_contents($url);
  
  $weatherArray = json_decode($content, true);
  
  
  $weatherDescription = $weatherArray['weather'][0]['description'];
  $city = $weatherArray['name'];
  $tempInCelcius = intval($weatherArray['main']['temp'] - 273);
  $wind = $weatherArray['wind']['speed'];
  
  $output = 'BY: ' . $city . ' <br>Tempratur: ' . $tempInCelcius .'<br>Vind: '. $wind . 'm/s<br>Beskrivelse:' .$weatherDescription;
  echo $output;
     
  }





?>
