<?php

$a = readline("hey what is your name : ");
echo $a;
echo ("\n");

$b = readline("oh k $a.how old are you : ");
echo $b;
echo ("\n");

if($b<16){

echo "you can drive $a";

}
else if($b<18){

echo "you can't vote $a";

}
else if($b<25){

echo "you can't rent a car $a";

}
else if($b<25){

echo "you can't rent a car $a";

}
else{
echo "you can do anything thats legal";
}



?>