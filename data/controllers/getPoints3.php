<?php
session_start();
$pdo = new PDO('mysql:host=localhost; dbname=Scores', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('SELECT * FROM score WHERE perso = :perso');
$stmt->bindParam(':perso', $_SESSION['search']);
$stmt->execute();
$POINTS = $stmt->fetch(PDO::FETCH_ASSOC);

if($_POST['response4'] =="ganon" || $_POST['response4']=="Ganon" || $_POST['response4']=="GANON" || $_POST['response4']=="ganondorf" || $_POST['response4']=="Ganondorf" || $_POST['response4']=="GANONDORF")
{
    $totalepreuve3  += 1;
}















$total = $POINTS['Points'] + $totalepreuve3;


$pdo = new PDO('mysql:host=localhost; dbname=Scores', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('UPDATE score SET Points = :Points WHERE perso = :perso');
$stmt->bindParam(':perso', $_SESSION['search']);
$stmt->bindParam(':Points', $total);
$stmt->execute();
var_dump($POINTS);
var_dump($_POST);die;
header('Location: ../finalscore.php');
?>