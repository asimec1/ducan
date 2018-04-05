<!DOCTYPE html>
<html>
<head>
  <title>Php zadaca</title>
</head>
<body>
<?php     
  function check_time($d, $ot, $ct) { 
       return ($d >= $ot && $d <= $ct);  
  }   
  $d = date('H');    
  echo "<p>Dućan je otvoren od 8h do 16h.</p>
  <p>Sada je $d sati!</p>
  <p>Dućan je " . (check_time($d, "8", "16") ? "otvoren" : "zatvoren") . "</p>";
?>


</body>
<html>
