<?php

$a = readline("your weight : ");
echo $a;
echo ("\n");
$b = readline("your height : ");
echo $b;
echo ("\n");

$c = $a/($b*$b);

$d = "your bmi is $c";
echo $d;
echo ("\n");

if($c<18.5){
echo "underweight";
echo ("\n");
}
else if($c<=24.9){
echo "normalweight";
echo ("\n");
}
else if($c<=29.9){
echo "you can vote but not rent a car";
echo ("\n");
}
else{
echo "obese";
}



?>