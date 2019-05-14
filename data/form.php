  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet', href="../css/main.css">
    <title>Connection</title>
  </head>
  <body>
  <script>function Message() {
    var msg="Mot de passe incorrect";
    //console.log(msg)
    alert(msg);
}</script>
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
      echo 'Redirection dans 5 secondes.';
      header("refresh:1;url=../page1.php");}
  else
  {
    echo '<h1>Mot de passe incorrect</h1>';
    header("refresh:1;url=./connect.php");}

include './templates/footer.html'; ?>    
  </body>
  </html>
