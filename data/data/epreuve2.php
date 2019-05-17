<?php session_start();?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/exportedcss.css">
    <link rel="stylesheet" href="./css/episode.css">
    <title>Epreuve 2 - Agilité</title>
</head>
<body>

<?php include"./templates/header.php";?>

<main>
    <div class="containerbaba">
        <h1>EPREUVE D'AGILITE</h1>
        <p>Vous voici arrivé(e) à la deuxième épreuve de votre périple : l'épreuve d' <strong>Agilité</strong>.</p>    <br>
        <div class="flex agilityDiv">
            <div id="divMyScore" class="hidden"><p>Ton score est de :<span id="score"> 0 </span> points !</p></div>
                <div>
                    <canvas id="gameCanvas" width="300" height="300" style="margin-left:30px"><canvas>
                        </div>
                        <button id="startBtn" onclick="snakeGame()" style="background-color:black; color:white; box-shadow : 5px 5px 30px red; height:200px; width:200px; margin-right:150px;">Start</button>
            </div>
                <form  class="" action="./controllers/getPoints.php" method="post">
                    <input id="myScore" class="hidden" type="text" name="agilityScore">
                    <button id="nextBtn" class="hidden" style="background-color:black; color:white; box-shadow : 5px 5px 30px red;">Continuer</button>
                </form>
        <script src="./js/snakeGame.js"></script>
    </div>   
</main>

<script src="./js/response.js"></script>

<?php include './templates/footer.html'?>

</body>
</html>