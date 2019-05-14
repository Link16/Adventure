<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <title>Check</title>
</head>
<body>
<?php
include './templates/header.php';
include './controllers/getALLcompte.php';

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
    header("refresh:5;url=./controllers/addONEcompte.php");}

    include './templates/footer.html';?>
</body>
</html>