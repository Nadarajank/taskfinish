<?php

$month_num = readline("enter the number : ");
echo $month_num;
echo ("\n");

$month_name = date("F",mktime(0,0,0,$month_num ,10));
echo $month_name;
echo ("\n");

?>