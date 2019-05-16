<?php 

$pdo = new PDO('mysql:host=localhost; dbname=Scores; charset=utf8', 'root', '0000');
$stmt = $pdo->prepare('UPDATE score VALUES score');
$stmt->bindParam(':score', $_POST['score']);
$stmt->execute();


header('Location: /epreuve3.php');