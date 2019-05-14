<?php
$pdo = new PDO('mysql:host=localhost; dbname=Connect', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('DELETE FROM LOGG WHERE id = :id');
$stmt->bindParam(':id', $_POST['id']);
$stmt->execute();
header('Location: ./list.php');