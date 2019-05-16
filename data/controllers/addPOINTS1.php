<?php

$total = 0;
var_dump($_POST);
if ($_POST['response1']=="la vie" || $_POST['response1']=="La vie" || $_POST['response1']=="vie" || $_POST['response1']=="VIE" || $_POST['response1']=="La Vie")
{
    $total += 1;
}

if ($_POST['response2']=="l'ombre" || $_POST['response2']=="son ombre" || $_POST['response2']=="ombre" || $_POST['response2']=="Son ombre" || $_POST['response2']=="SON OMBRE" || $_POST['response2']=="OMBRE" || $_POST['response2']=="L'OMBRE" || $_POST['response2']=="une ombre" || $_POST['response2']=="Une ombre" || $_POST['response2']=="UNE OMBRE")
{
    $total += 1;
}
 
if ($_POST['response3']=="le charbon" || $_POST['response3']=="charbon" || $_POST['response2']=="Le charbon" || $_POST['response2']=="LE CHARBON" || $_POST['response2']=="charbon" || $_POST['response2']=="Charbon" || $_POST['response2']=="CHARBON" || $_POST['response2']=="du charbon" || $_POST['response2']=="Du charbon" || $_POST['response2']=="DU CHARBON" )
{
    $total += 1;
}

echo $total;

$pdo = new PDO('mysql:host=localhost; dbname=Scores', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $stmt = $pdo->prepare('INSERT INTO score (Points) VALUES (:Points)');
    $stmt->bindParam(':Points', $total);
    $stmt->execute();
 header('Location:../epreuve2.php');