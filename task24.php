<?php
echo "----------traingle-------------";
echo ("\n");
$base = readline("enter the base : \n");
echo $base;
echo ("\n");
$height = readline("enter the height : \n");
echo $height;
echo ("\n");
$area = ($base*$height)/2;
echo "area of a traingle heroins = $area";
echo ("\n");

echo "--------square-----------------";
echo ("\n");
$a1 = readline("enter the number ");
echo $a1;
echo ("\n");
$a2 = $a1*$a1;
echo "area of the square = $a2"; 
echo ("\n");

echo "------rectangle-----------------";
echo ("\n");
$width = readline("enter the width : ");
echo $width;
echo ("\n");
$length = readline("enter the length : ");
echo $length;
echo ("\n");
$area2 = $width*$length;
echo "area of the rectangle = $area2";
echo ("\n");

echo "-------circle-----------------";
echo ("\n");
$radius = readline("enter the radius : ");
echo $radius;
echo ("\n");
$circle = (22/7.0)*$radius*$radius;
echo "area of the circle = $circle";
echo ("\n");

echo "-------tripizoid-----------------";
echo ("\n");
$a = readline("enter the area :");
echo $a;
echo ("\n");
$b = readline("enter the base :");
echo $b;
echo ("\n");
$h = readline("enter the height :");
echo ("\n");

$tri = (($a+$b)/2)*$h;
echo "area of the tripizoid = $tri";
echo ("\n");

 



?>