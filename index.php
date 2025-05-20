<?php 
include('classes/Panel.php');
include('classes/Contest.php');
include('classes/Contestant.php');
//TODO: Should be validate this input? Why/Why not?

$panel1 = new Panel("Es van enamorar en un tren","Before Sunrise");
$panel2 = new Panel("Lorca","La casa de Bernarda Alba");

$panel1->show();
echo PHP_EOL;
$panel2->show();


$contester1 = new Contestant("Pepe",0);
$contester2 = new Contestant("Manolo",0);

print_r($contester1);
print_r($contester2);
echo $contester1->sayLetter();
?>