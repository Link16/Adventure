  <?php 
  include '../templates/DOC.php';
  include '../templates/header.php';
  $users = 
      [
          [
              'login' => 'admin',
              'password' => 'password',
          ],       
     ];        
  foreach ($users as $user) {
    if (($_POST['password'] == $user['password']) && ($_POST['pseudo'] == $user['login']))
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
      header("refresh:5;url=../page1.php");}
  else
  {
    echo 'Mot de passe ou login incorrect, réessaye';
    header("refresh:4;url=./connect.php");}