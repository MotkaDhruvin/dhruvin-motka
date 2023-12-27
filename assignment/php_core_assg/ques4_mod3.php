
<?php 


    $n=9;
    $a = 1;
    $b = 1;
    echo "$a $b ";
    for($i=1; $i <= ($n-2); $i++)
    {
        $c = $a + $b;
        echo "$c ";
        $a = $b;
        $b = $c;
    }


?>

