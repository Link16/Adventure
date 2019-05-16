<?php
$pdo = new PDO('mysql:host=localhost; dbname=Connect', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('UPDATE LOGG SET lastName = :lastName, firstName = :firstName, age = :age, Login = :Login, Password = :Password WHERE id = :id');
$stmt->bindParam(':lastName', $_POST['lastName']);
$stmt->bindParam(':firstName', $_POST['firstName']);
$stmt->bindParam(':age', $_POST['age']);
$stmt->bindParam(':Login', $_POST['Login']);
$stmt->bindParam(':Password', $_POST['Password']);
$stmt->bindParam(':id',$_POST['id']);
$stmt->execute();

header('Location: /list.php');
?>