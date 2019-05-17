<?php
$pdo = new PDO('mysql:host=localhost; dbname=Connect', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('SELECT * FROM LOGG');
$stmt->execute();
$LOGGS = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>