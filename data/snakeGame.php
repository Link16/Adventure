<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>
<body>
    <div class="flex agilityDiv">
        <div id="divMyScore" class="hidden">Ton score est de <span id="score">0</span> points !</div>
        <form  class="" action="./controllers/test.php" method="post">
            <input id="myScore" class="hidden" type="text" name="agilityScore">
            <button id="nextBtn" class="hidden" >Suivant</button>
        </form>
        <div>
            <canvas id="gameCanvas" width="300" height="300" style="margin-left:30px"><canvas>
        </div>
        <button id="startBtn" onclick="snakeGame()">Start</button>
    </div>
<script src="./js/snakeGame.js"></script>    
</body>
</html>