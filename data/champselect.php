<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/champ.css">
    <title>Création du personnage</title>
</head>
<body>
<?php include './templates/header.php';?>
    <main>
        <form class="coucou" action="./choix.php" method="post">
        <div class="containerbaba">
            <div class="top">
                <div class="left">
                    <h1>La guerrière intrépide !</h1>
                    <div class="center1">
                   <img src='../ressources/coucou.jpg'>
                    </div>
                </div>
                <div class="right">
                    <h1>Le héro sans peur !</h1>
                    <div class="center2">
                        <img src='../ressources/27566307-guerrier-en-colère.jpg'>
                    </div>
                </div>
            </div>
            <div class="bot">
                <div class="botleft">

                </div>
                <div class="botright">
                        <div class="row">
                            <div class="col-25">
                                <label class="lname">Nom du personnage :</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="password" name="search" placeholder="Nom du personnage" required>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" value="GO !">
                        </div>
                   </form>
                </div>
            </div>
        </div>    
    </main>
<?php include './templates/footer.html';?>
</body>
</html>