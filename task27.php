<?php

echo "ye old keychains shoppe";
echo ("\n");

echo  "1.Add keychain to order";
echo ("\n");
echo "2.Remove keychain from order";
echo ("\n");
echo  "3.view current order";
echo ("\n");
echo  "4.Chekout";
echo ("\n");

$choice = readline("Please enter your choice : ");
echo ("\n");
echo $choice;
echo ("\n");
if($choice==1){
echo "Add keychains";
echo ("\n");
function add_Keychains($num1){
 echo "you have $num1 keychains";
 }
add_Keychains(0);
$add = readline("how many to add ? ");
echo ("\n");
echo "you now have $add keychains";
}
else if($choice==2){
echo "remove keychains";
echo ("\n");
function remove_Keychains($num2){
echo "you have $num2 keychains";
}
remove_Keychains(3);
$remove = readline("how many to remove ? ");
echo ("\n");
echo $remove;
$rem = 3 - $remove;
echo ("\n");
echo "you have now $rem keychains";
}
else if($choice==3){
echo "view order";
echo ("\n");
function view_Order($num3){
 echo "you have $num3 keychains";
}
view_Order(10);
echo ("\n");
echo "keychain cost 10$ each";

}
else{
echo "checkout";
}
echo ("\n");
$name = readline("what is your name : \n");
$chain = readline("you have to $choice chains.\n");
$cost = readline("keychain cost 10$ each \n");
$thank = readline("thank for the your order,$name");



?>
