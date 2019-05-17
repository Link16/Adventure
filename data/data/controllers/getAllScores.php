<?php
$pdo = new PDO('mysql:host=localhost; dbname=Scores', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('SELECT * FROM score');
$stmt->execute();
$scores = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>