<?php

echo "you olde keychain to order";
echo ("\n");
echo "1) Add keychains to order";
echo ("\n");

echo "2) Remove keychains from order";
echo ("\n");

echo "3) view current order";
echo ("\n");

echo "4) checkout";
echo ("\n");

$choice = readline("please enter your choice : ");
echo ("\n");
echo $choice;
echo ("\n");
if($choice==1){

function add_Keychains($type1){
 echo "you have $type1 keychains";
}
add_Keychains(5);
}
else if($choice==2){

function remove_Keychains($type2){
echo  "you have remove $type2 keychains";
}
remove_Keychains(4);
}
else if($choice==3){

function view_Order($type3){
 echo "keychain cost $type3 each";
}
view_Order(10);
}
else{
 echo "checkout";
}
?>