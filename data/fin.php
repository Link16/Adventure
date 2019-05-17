<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" href="./ressources/favico.ico"/>
    <title>Adventure</title>
</head>
<body>
<?php include './templates/header.php';?>

<!-- Pitch du jeu -->
<embed name="GoodEnough" src="./ressources/trol.mp3" loop="true" hidden="true" autostart="true">
<div class="containertroll">
    <div class="hautdroittroll">
  
    </div>
    <div class="hautgauchetroll">
     
    </div>  
</div>



    <?php include './templates/footer.html'; ?>

</body>
</html>