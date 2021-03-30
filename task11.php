<?php

$earth = readline("please enter your current earth weight ? ");
echo $earth;
echo ("\n");

echo "  I have information for the following planets";
echo ("\n");
echo "   1.venus        2.mars           3.jupitar";
echo ("\n");
echo "   4.satrun       5.uranus         6.neptune";
echo ("\n");
$visit = readline("which planet are you visiting ?");
echo ("\n");
if($visit==1){
$venus = $earth*0.78;
echo $venus;
}
else if($visit==2){
$mars =$earth*0.39;
echo $mars;
}
else if($visit==3){
$jupitar =$earth*2.65;
echo $jupitar;
}
else if($visit==4){
$satrun =$earth*1.17;
echo $satrun;
}
else if($visit==5){
$uranus =$earth*1.05;
echo $uranus;
}
else if($visit==6){
$neptune =$earth*1.23;
echo $neptune;
}
else{
echo "your number is invalid";
}

?>