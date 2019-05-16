<?php

$total = 0;

$_POST['response1'] = 'la vie';
$_POST['response2'] = "l'ombre";
$_POST['response3'] = 'le charbon';

if ($_POST['response1']=="la vie" || $_POST['response1']=="La vie" || $_POST['response1']=="vie" || $_POST['response1']=="VIE" || $_POST['response1']=="La Vie")
{
    $total += 1;
}

if ($_POST['response2']=="l'ombre" || $_POST['response2']=="son ombre" || $_POST['response2']=="ombre" || $_POST['response2']=="Son ombre" || $_POST['response2']=="SON OMBRE" || $_POST['response2']=="OMBRE" || $_POST['response2']=="L'OMBRE" || $_POST['response2']=="une ombre" || $_POST['response2']=="Une ombre" || $_POST['response2']=="UNE OMBRE")
{
    $total += 1;
}
 
if ($_POST['response3']=="le charbon" || $_POST['response3']=="Le charbon" || $_POST['response3']=="LE CHARBON" || $_POST['response3']=="charbon" || $_POST['response3']=="Charbon" || $_POST['response3']=="CHARBON" || $_POST['response3']=="du charbon" || $_POST['response3']=="Du charbon" || $_POST['response3']=="DU CHARBON" )
{
    $total += 1;
}

echo $total;