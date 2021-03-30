<?php

$gender = readline("what is your gender (M or F) : ");
echo ("\n");
echo $gender;
echo ("\n");

$fn  = readline("firstname : ");
echo ("\n");
echo $fn;
echo ("\n");
$ln  = readline("lastname : ");
echo ("\n");
echo $ln;
echo ("\n");
$age = readline("age : ");
echo ("\n");
echo $age;
echo ("\n");
$marry = readline("are u married $fn (y or n)");
echo ("\n");
echo $marry;

if($gender=='M'){

echo "then i shall cal you Mr.$ln";
}


else if($marry=='y'){
 echo "then i shall cal you Mrs.$ln";
}
else{
 echo "then i shall cal you Ms.$ln";
}

?>