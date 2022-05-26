<!--
File: calc.php
Author: Juhász Roland
Copyright: 2021, Juhász Roland
Group: Szoft I N
Date: 2022-05-26
Github: https://github.com/Roleeygit/laposszferoid
Licenc: GNU GPL
-->

<?php

echo file_get_contents('templates/head.html');
$oldal = file_get_contents('templates/calc.html');

if(!empty($_GET['a']) and 
!empty($_GET['b'])) 
{
    $a = $_GET['a'];
    $b = $_GET['b'];


    $terfogat = calcArea($a,$b);
}
else
{
    $terfogat = "Hiba! Helytelen adatok.";
}

function calcArea($a,$b,) 
{


    $terfogat = ((4*M_PI)/3) * (pow($a, 2)*$b);
    
    return $terfogat;
}

$oldal = str_replace('{{eredmeny}}', $terfogat, $oldal);

echo $oldal;
echo file_get_contents('templates/foot.html');

