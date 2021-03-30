<?php
$a = readline("hey what is your name : ");
echo ("\n");
$b = readline("hey what is your name ?(sorry,I keep forget.)$a ,ok ,$a how old are you : ");
echo $b;
echo ("\n");
if($b<16){
echo "you can't drive";
echo ("\n");
}
else if($b<=17){
echo "you can drive but not vote";
echo ("\n");
}
else if($b<=24){
echo "you can vote but not rent a car";
echo ("\n");
}
else{
echo "you can do preety much anything";
}



?>