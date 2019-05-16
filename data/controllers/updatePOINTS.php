<?php
$pdo = new PDO('mysql:host=localhost; dbname=Scores', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('UPDATE score SET perso = :perso, Points = :Points WHERE id = :id');
$stmt->bindParam(':perso', $_POST['perso']);
$stmt->bindParam(':Points', $_POST['Points']);
$stmt->bindParam(':id',$_POST['id']);
$stmt->execute();
header('Location: ./epreuve3.php');
?>