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
    echo "Dućan je " . (check_time($d, "8", "16") ? "otvoren" : "zatvoren");
?>



</body>
<html>
