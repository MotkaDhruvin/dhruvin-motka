<?php 



   $a=5;
   $b=5;
    for ($i = 0; $i < $a; $i++) {
        for ($j = 0; $j < $b; $j++) {
            if ($i == 0 || $i == $a - 1 || $j == 0) 
            {
                echo "*";
                
            } else {
                echo " ";
            }
        }
        echo "<br>";
    }




?>