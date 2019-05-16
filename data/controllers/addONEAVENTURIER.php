<?php
session_start();
foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;} 
    $pdo = new PDO('mysql:host=localhost; dbname=Connect', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $stmt = $pdo->prepare('INSERT INTO PERSO (sexe, nom) VALUES (:sexe, :nom)');
    $stmt->bindParam(':nom', $_SESSION['search']);
    $stmt->bindParam(':sexe', $_SESSION['Personnages']);
    $stmt->execute();
    header("refresh:6454;url=../choix.php");