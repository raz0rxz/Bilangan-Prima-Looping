<?php
$n = 0;
  for ($i=1; $i <= 40 ; $i++) {
    $spasi = 0;
      for ($j=1; $j <= 40 ; $j++) {
        if ($i % $j == 0) {
          $spasi++;
        }
      }
      if ($spasi == 2) {
        $n++;
        echo $i." ";
          if ($n % 3 == 0) {
            echo "<br>";
          }
      }
  }

 ?>
