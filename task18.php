<?php

$pin = 12345;
$tries = 0;

echo "WELCOME TO AXIS BANK\n";
$password = readline("enter your pin : ");

while($password != $pin)
{

echo "incorrect password";
echo("\n");
$password = readline("enter your pin : ");
$tries++;
}
if($password == $pin){
echo "pin accepted you now have access to";
}

?>