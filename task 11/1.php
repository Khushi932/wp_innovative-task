<?php
function printAlphabetTriangle($rows) {
    $numSpaces = $rows - 1;
  
    for ($i = 0; $i < $rows; $i++) {
      for ($j = 0; $j < $numSpaces; $j++) {
        echo "&nbsp;&nbsp;";
      }
      for ($j = 0; $j <= $i; $j++) {
        echo chr(65 + $j);
      }
      for ($j = $i - 1; $j >= 0; $j--) {
        echo chr(65 + $j);
      }
      echo "<br>";
  
      $numSpaces--;
    }
  }
  printAlphabetTriangle(4);
  
?>