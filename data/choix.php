<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" href="./ressources/favico.ico"/>
    <title>Choix</title>
</head>
<body>
<?php include './templates/header.php';?>   
 <?php 
 foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;} 
    ?>
    <div class='containerbaba'style="height:83vh; width:150vh;">
        <div class='top'>
            <?='<h1>'.'Bonjour Aventurier '.$_SESSION['search'].'</h1>'?>
        </div>
        <div class="regles" style='text-align:center'>
            <p style="margin-top:60px;"><strong>Voici les règles:</strong><br><br>
            Ici bas tu devras résoudre des énigmes et faire preuve de concentration, ainsi tu accumuleras un total de points.<br><br>
            Si tu fais partis du TOP 5 des joueurs, tu pourras aller affronter la sorcière !<br><br>
            Ne te précipite pas et prend ton temps pour répondre correctement aux épreuves de sagesse et savoir.
            </p>    
        </div>
    
        <div class="bas">
            <div class="basgauche">

            </div>
            
            <div class="basdroit">
                <div id='zoubou' class="jouer" style='box-shadow : 5px 5px 30px blue'>
                    <div class = "Crasse">
                        <a href='./epreuve1.php'><H1>JOUER !</H1></a>
                    </div>
               </div>
            </div>
        </div>
   
    </div>
    <?php include './templates/footer.html';?>
</body>
</html>