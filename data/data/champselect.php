
<?php session_start();?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/champ.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="icon" href="./ressources/favico.ico"/>
    <title>Création du personnage</title>
</head>
<body>
<?php include './templates/header.php';?>
    <main>
        <form class="coucou" action="./controllers/addONEAVENTURIER.php" method="post">
        <div class="containerbaba">
            <div class="top">
                <div class="left">
                    <h1>La guerrière intrépide !</h1>
                    <div  class="center1">
                         <img id='coucou' onClick="myFunction()" src='../ressources/coucou.jpg'>
                         <span><i class="far fa-hand-pointer"></i></span>
                        <div class ="checkbox">
                            <input class="centercheckbox" type="radio" id="1" name="Personnages" value="Femme" required>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <h1>Le héros sans peur !</h1>
                    <div class="center2">
                        <img id ="coucou1" onClick="myFunction1()" src='../ressources/27566307-guerrier-en-colère.jpg'>
                        <span><i class="far fa-hand-pointer"></i></span>
                        <div class="checkbox">
                            <input class="centercheckbox" type="radio" id='2' name="Personnages" value="Homme" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bot">
                <div class="botleft">
                    <img src="../ressources/mamie.jpg">
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
<script>
function myFunction() {
  document.getElementById("coucou").style.opacity = "1";
  document.getElementById("coucou").style.boxShadow = "3px 3px 30px blue";
  document.getElementById("coucou1").style.opacity = "0.5";
  document.getElementById("coucou1").style.boxShadow = "none";
  document.getElementById("1").checked =  true;
  document.getElementById("2").checked =  false;
  
}
function myFunction1() {
    document.getElementById("coucou1").style.opacity = "1";
  document.getElementById("coucou1").style.boxShadow = "3px 3px 30px blue";
  document.getElementById("coucou").style.opacity = "0.5";
  document.getElementById("coucou").style.boxShadow = "none";
  document.getElementById("2").checked =  true;
  document.getElementById("1").checked =  false;
}
</script>
</body>
</html>