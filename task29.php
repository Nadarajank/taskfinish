<?php
   class task{
      
   function add($num1,$num2,$num3,$num4,$num5)
    {
 
     echo ($num1 + $num2)/$num3+($num4 * $num5); 
 
    
     }

   }

$task = new task;

$task -> add(10,10,10,10,10);

?>