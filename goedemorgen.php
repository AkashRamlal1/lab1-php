<!DOCTYPE html>
<html>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .time, .message {
      text-align: center;
    }
  </style>

  <body>

  <?php

 

date_default_timezone_set('Europe/Amsterdam');
$tijd = date('H:i');

$message = "Goede dag";

if ($tijd >= "6:00" && $tijd <= "12:00") {
  $message = "Goedemorgen";
  $achtergrond = 'morning.png';
}
else if ($tijd >= "12:00" && $tijd <= "18:00") {
    $message = "Goedemiddag";
    $achtergrond = 'afternoon.png';
  }
  else if ($tijd >= "18:00" && $tijd <= "00:00") {
    $message = "Goedeavond";
    $achtergrond = 'evening.png';
  }
  else if ($tijd >= "12:00" && $tijd <= "18:00") {
    $message = "Goedenacht";
    $achtergrond = 'night.png';
  }
  echo "<div class='container'>";
  echo "<h2 class='message'>$message</h2>";
  echo "dit is de tijd " .$tijd;
  

  echo "</div>";

  ?>

  <style>

      body{
        background-image: url('<?php echo $achtergrond; ?>');
      }
  </style>

    </body>
</html>