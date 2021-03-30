<?php

$ready = readline("are you ready for a quiz : ");
echo $ready;
echo ("\n");

if($ready=='y'){
echo "oh k here it comes";
echo ("\n");
}

$cap = readline("what is the capital of alask(please enter) : ");
echo ("\n");
echo "1)melborne";
echo ("\n");
echo "2)anchorge";
echo ("\n");
echo "3)juneau";
echo ("\n");
echo $cap;

$num = readline("enter the ans : ");

if($num==3){
echo "correct";
}
else{
echo "not correect";
}
echo ("\n");

$cat = readline("can you store the value 'cat' in a variable of type int(please enter) ?");
echo ("\n");
echo "1)yes";
echo ("\n");
echo "2)no";
echo ("\n");
echo $cat;

$ans = readline("enter the ans :");
if($cat==2){
echo "it is correct";
}
else{
echo "sorry 'cat' is a string ints can only store number";
}
echo ("\n");
$cal = readline("what is the result of 9+6/3 ? ");
echo "1)3";
echo ("\n");
echo "2)13";
echo ("\n");
echo "3)21";
echo ("\n");
echo $cal;

$final = readline("enter the ans : ");
if($final==1){
echo "this is correct";
}
else{
echo "incorrect";
}



?>