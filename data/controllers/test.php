<?php 

$pdo = new PDO('mysql:host=localhost; dbname=scores; charset=utf8', 'root', '0000');
$stmt = $pdo->prepare('INSERT INTO scores (agilityScore) VALUES (:agilityScore)');
$stmt->bindParam(':agilityScore', $_POST['agilityScore']);
$stmt->execute();


header('Location: /epreuve3.php');