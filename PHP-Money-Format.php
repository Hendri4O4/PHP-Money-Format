<?php
  $number = 5000000;
  setlocale(LC_MONETARY,"id_ID");
  echo str_replace('IDR','Rp', money_format("%i", $number));
?>
