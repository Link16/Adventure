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
    <link rel="icon" href="./ressources/favico.ico"/>
    <title>Epreuve 1 - Sagesse</title>
</head>
<body>

<?php include"./templates/header.php";?>

<main>
    <h1>EPREUVE DU SAVOIR</h1>
    <p>Vous voici arrivé(e) à la dernière épreuve de votre périple : l'épreuve du <strong>Savoir</strong>.</p>
    <p>Il y a encore 3 énigmes à résoudre...A <strong>vous</strong> de bien y répondre!</p>
    <p>Attention! Prenez votre temps pour bien y répondre, le salut de Trüperdu dépend de vous...</p>
    <br>
    <h2>Qui suis-je? Je suis l'ennemi principal d'une série de jeu sorti exclusivement sur Nintendo. Mon âme est noire et j'apparaîs sous différentes formes, particulièrement représentative du mal absolu. Je détiens la Triforce de la Force...Je suis...</h2>
    <form action="./controllers/addPOINTS1.php" method="POST">
        <label for="response4" :>
        <input type="text" id="response4" name="response4" required maxlength="20" size="25" placeholder="ta réponse" style="color:red"!important>
        <button type="button" id="btn4" onclick="toggle_text('span_txt');">valider</button>
    <br>
    <span id="e1e2" style="visibility:hidden">
        <h2>Jeune héro(ïne), selon toi, qu'est ce qui est plus grand que la Tour Eiffel, mais infiniment moins lourd ?</h2>
            <label for="response5" :>
            <input type="text" id="response5" name="response5" required maxlength="20" size="25" placeholder="ta réponse" style="color:red"!important>
            <button type="button" id="btn5" onclick="toggle_text2('span_txt');">valider</button>
        <br>
    </span>
    <span id="e1e3" style="visibility:hidden">
        <h2>Jeune héro(ïne), selon toi, qu'est-ce-qui est noir, deviens rouge et fini blanc?</h2>
            <label for="response6" :>
            <input type="text" id="response6" name="response6" required maxlength="20" size="25" placeholder="ta réponse" style="color:red"!important>
            <button type="button" id="btn6" onclick="toggle_text3('span_txt');">valider</button>
    </form>
        <br>
    </span>
    <br>
    <h3>Mamie Müjo te félicite pour ton courage et ta vaillance et t'invite à la <strong>2e épreuve</strong>...celle d'<strong>AGILITE</strong></h3>
    <input type="submit" value="continuer">
</main>

<script src="./js/response.js"></script>

<?php include './templates/footer.html'?>

</body>
</html>