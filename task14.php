<?php
echo "WLCOME TO MITCHELL TINY ADVENTURE";
echo ("\n");
$a = readline("tou are in a creppy house! would you like to go 'upstair'into the kitchen ?  ");
echo ("\n");
echo $a;
$b = readline("there is a long countertop with dirty dishes everywhere off to one side there is as you expect a refrigerator you may open on the or in a cabinet ?  ");
echo ("\n");
echo $b;
$c = readline("inside a refrigerator you see food and stuff.would like to some of the food (y/n) ?  ");
echo ("\n");
echo $c;

if($c=='no'){
echo ("\n");
echo "you die ";
}
else if($c=='yes'){
    echo ("\n");
    echo "you not die";
}else{
 
echo ("\n");
echo "invalid";

}





?>