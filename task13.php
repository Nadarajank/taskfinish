<?php

echo "think of an object,and I will try to guess it";
echo ("\n");

$ani = readline("It is the animal ,vegetable or mineral ? ");
echo ("\n");
echo $ani;
echo ("\n");

$ans = readline("is it bigger than a breadbox ? ");
echo ("\n");
echo $ans;

if($ans=='n'){
  echo ("\n");
  echo "my guess is that you are thinking a mouse I would ask you if Im right but i dont actually care ?";
  }
else if($ans=='y'){
if($ans=='y'){
  echo ("\n");
  echo "my guess is that you are thinking a truck I would ask you if Im right but i dont actually care ?";
}
}
else{
echo "invalid";
}

?>