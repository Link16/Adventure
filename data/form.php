  <!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet', href="../css/main.css">
    <link rel="icon" href="./ressources/favico.ico"/>
    <title>Connection</title>
  </head>
  <body>
    <?php
    include './templates/header.php';
    include './controllers/getALLcompte.php';

  foreach ($LOGGS as $LOGG) {
    if (($_POST['password'] == $LOGG['Password']) && ($_POST['login'] == $LOGG['Login']))
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
    session_start();
    foreach ($_POST as $key => $value) {
      $_SESSION[$key] = $value;}
      echo '<h1>Redirection dans 5 secondes.</h1>';
      header("refresh:1;url=../champselect.php");}
  else
  {
    echo '<h1>Mot de passe incorrect</h1>';
    header("refresh:1;url=./connect.php");}

include './templates/footer.html'; ?>    
  </body>
  </html>
