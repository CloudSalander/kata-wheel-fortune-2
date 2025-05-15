<?php 
include('classes/Panel.php');
include('classes/Contest.php');
include('classes/Contestant.php');
//TODO: Should be validate this input? Why/Why not?
/*
$panel1 = new Panel("Es van enamorar en un tren","Before Sunrise");
$panel2 = new Panel("Lorca","La casa de Bernarda Alba");

$panel1->show();
echo PHP_EOL;
$panel2->show();
*/

$contest = new Contest();
$contestant1 = new Contestant();
print_r($contest);
print_r($contestant1);

?>