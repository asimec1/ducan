<!DOCTYPE html>
<html>
<head>
  <title>Php zadaca</title>
</head>
<body>
<?php     
    $d = date('H'); 
    $ot = 8;
    $ct = 16;

      function check_time($d, $ot, $ct) { 
           return ($d >= $ot && $d <= $ct);  
      }   

      echo "<p>Dućan je otvoren od " . $ot . "h do " . $ct . "h.</p>
      <p>Sada je $d sati!</p>
      <p>Dućan je " . (check_time($d, $ot, $ct) ? "otvoren" : "zatvoren") . "</p>";
?>


</body>
<html>
