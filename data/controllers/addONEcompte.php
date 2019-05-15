<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <title>Check</title>
</head>
<body>
<?php
include '../templates/header.php';
include './getALLcompte.php';
foreach ($LOGGS as $LOGG) {
    if (($_POST['Login'] == $LOGG['Login']))
    {
      $test = TRUE;
      break;
    }
    else
    {
      $test = FALSE;
    }
  }

  if ($test == TRUE)
  {
    echo "Ce login est déjà utilisé, merci d'en choisir un autre !";
    header("refresh:5;url=../Inscription.php");}
  else
  {
    echo "Redirection dans 5 secondes";
    $pdo = new PDO('mysql:host=localhost; dbname=Connect', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $stmt = $pdo->prepare('INSERT INTO LOGG (lastName, firstName, age, Login, Password) VALUES (:lastName, :firstName, :age, :Login, :Password)');
    $stmt->bindParam(':lastName', $_POST['lastName']);
    $stmt->bindParam(':firstName', $_POST['firstName']);
    $stmt->bindParam(':age', $_POST['age']);
    $stmt->bindParam(':Login', $_POST['Login']);
    $stmt->bindParam(':Password', $_POST['Password']);
    $stmt->execute();
    header("refresh:5;url=../index.php");}

    include '../templates/footer.html';?>
</body>
</html>

