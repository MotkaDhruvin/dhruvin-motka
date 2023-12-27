<?php 
$temp=1520;
$sum=0;
$n = $temp;
while($n>0)
 {
    $r=$n%10;
    $sum=($sum + ($r*$r*$r));
    $n=$n/10;
}
if($temp==$sum)
{
    echo "$temp : it's an armstrong number";
}
else{
    echo "$temp : not a armstrong number";
}

echo "<br>";
echo "<br>";

echo "5 9<br>2610<br>3711<br>4812";


?>