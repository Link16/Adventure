<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/champ.css">
    <title>Choix</title>
</head>
<body>
<?php include './templates/header.php';?>   
 <?php 
 foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;} 
    echo '<h1>'.'Bonjour Aventurier '.$_SESSION['search'].'</h1>'
    ?>
    <?php include './templates/footer.html';?>
</body>
</html>