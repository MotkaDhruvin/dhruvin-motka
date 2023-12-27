<?php 
for($y=1901; $y<=2016; $y++)
{
    if($y%4==0)
    {
        echo "$y is a LEAP YEAR<br>";
    }
    else{
        echo "$y not a leap year<br>";
    }
}
?>