<?php
 echo "WELCOME TO THE BANK AXIS \n";

$pin = "12345";

$enter = readline("enter your pin \n");
echo $enter;

if($pin!=$enter){
echo ("\n");
echo "incorrect pin.Try again";
}
else if($spin=$enter){
echo ("\n");
echo "Pin accepted you won have access to your account";
}


?>