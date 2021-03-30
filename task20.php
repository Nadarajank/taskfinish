<?php

$sum = 0;
$num = readline("enter the number");
while($num != 0)
{
$sum = $sum + $num;
echo  "the total so far is $sum\n";
$num =readline("number :");
}
echo "the total is $sum";


?>