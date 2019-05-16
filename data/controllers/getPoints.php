<?php
session_start();
$pdo = new PDO('mysql:host=localhost; dbname=Scores', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('SELECT * FROM score WHERE perso = :perso');
$stmt->bindParam(':perso', $_SESSION['search']);
$stmt->execute();
$POINTS = $stmt->fetch(PDO::FETCH_ASSOC);

$total = $POINTS['Points'] + $_POST['agilityScore'];

$pdo = new PDO('mysql:host=localhost; dbname=Scores', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('UPDATE score SET Points = :Points WHERE perso = :perso');
$stmt->bindParam(':perso', $_SESSION['search']);
$stmt->bindParam(':Points', $total);
$stmt->execute();

header('Location: ../epreuve3.php');
?>