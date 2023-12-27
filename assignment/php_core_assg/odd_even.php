<?php 

$arr = array(1,2,3,4,5);

foreach ($arr as $key => $element)
 {   
      if($key%2==0)
      {
        echo "even number<br>";
      }
      else 
      {
        echo "odd number<br>";
      }
}  
?>