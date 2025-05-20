<?php 
include('classes/Panel.php');
include('classes/Contest.php');
include('classes/Contestant.php');
//TODO: Should be validate this input? Why/Why not?

$panel1 = new Panel("Es van enamorar en un tren","Before Sunrise");
$panel2 = new Panel("Lorca","La casa de Bernarda Alba");

$contester1 = new Contestant("Pepe");
$contester2 = new Contestant("Manolo");
$contester3 = new Contestant("Luisa");

$contest = new Contest($panel1, [$contester1,$contester2,$contester3]);

$contest->play();

?>