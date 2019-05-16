<?php
session_start();
$pdo = new PDO('mysql:host=localhost; dbname=Scores', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('SELECT * FROM score WHERE perso = :perso');
$stmt->bindParam(':perso', $_SESSION['search']);
$stmt->execute();
$POINTS = $stmt->fetch(PDO::FETCH_ASSOC);

if($_POST['response5'] =="ganon" || $_POST['response4']=="Ganon" || $_POST['response4']=="GANON" || $_POST['response4']=="ganondorf" || $_POST['response4']=="Ganondorf" || $_POST['response4']=="GANONDORF")
{
    $totalepreuve3  += 1;
}

if($_POST['response5'] =="Noctis Lucis Caelum" || $_POST['response5']=="noctis lucis Caelum" || $_POST['response5']=="Noctis lucis caelum" || $_POST['response5']=="Noctis" || $_POST['response5']=="NOCTIS" || $_POST['response5']=="noctis" || $_POST['response5']=="NOCTIS LUCIS CAELUM")
{
    $totalepreuve3  += 1;
}

if($_POST['response6'] =="la suite de fibonacci" || $_POST['response6']=="La suite de fibonacci" || $_POST['response6']=="La suite de Fibonacci" || $_POST['response6']=="LA SUITE DE FIBONACCI" || $_POST['response6']=="fibonacci" || $_POST['response6']=="Fibonacci" || $_POST['response6']=="La Suite De Fibonacci")
{
    $totalepreuve3  += 1;
}

$total = $POINTS['Points'] + $totalepreuve3;

$pdo = new PDO('mysql:host=localhost; dbname=Scores', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('UPDATE score SET Points = :Points WHERE perso = :perso');
$stmt->bindParam(':perso', $_SESSION['search']);
$stmt->bindParam(':Points', $total);
$stmt->execute();

header('Location: ../finalscore.php');
?>