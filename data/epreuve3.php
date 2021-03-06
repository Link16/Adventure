<?php session_start();?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <!-- <link rel="stylesheet" href="./css/exportedcss.css"> -->
    <link rel="stylesheet" href="./css/episode.css">
    <link rel="icon" href="./ressources/favico.ico"/>
    <title>Epreuve 3 - Savoir</title>
</head>
<body>

<?php include"./templates/header.php";?>

<main>
    <div class="containerbaba2">
        <h1>EPREUVE DU SAVOIR</h1>
        <h4>Vous voici arrivé(e) à la dernière épreuve de votre périple : l'épreuve du <strong>Savoir</strong>.</h4>
        <h4>Il y a encore 3 énigmes à résoudre...A <strong>vous</strong> de bien y répondre!</h4>
        <h4>Attention! Prenez votre temps pour bien y répondre, le salut de Trüperdu dépend de vous...</h4>
        <!-- <br> -->
        <h2>Qui suis-je? Je suis l'ennemi principal d'une série de jeu sorti exclusivement sur Nintendo. Mon âme est noire et j'apparais sous différentes formes, particulièrement représentative du mal absolu. Je détiens la Triforce de la Force...Je suis...</h2>
        <form action="./controllers/getPoints3.php" method="POST">
            <label for="response4" :>
            <input type="text" id="response4" name="response4" required maxlength="20" size="25" placeholder="ta réponse" style="color:red"!important>
            <button type="button" id="btn4" onclick="toggle_text('span_txt');">valider</button>
        <br>
        <span id="e1e2" style="visibility:hidden">
            <h2>Qui suis-je? Héros du XVe jeu de cette saga connue mondialement, je suis un prince héritier du trône de mon royaume. Je possède un nom latin. Je permets à certaines personnes de m'appeler Noct. Je suis...</h2>
                <label for="response5" :>
                <input type="text" id="response5" name="response5" required maxlength="20" size="25" placeholder="ta réponse" style="color:red"!important>
                <button type="button" id="btn5" onclick="toggle_text2('span_txt');">valider</button>
            <br>
        </span>
        <span id="e1e3" style="visibility:hidden">
            <h2>Je suis qualifié comme problème ou expression fonctionnelle. Mon origine remonte à une publication de 1202 dans l'ouvrage Liber abaci décrivant la croissance d'une population de lapins. Je suis une suite d'entiers dans laquelle chaque terme est la somme des deux termes qui le précèdent. Je suis...</h2>
                <label for="response6" :>
                <input type="text" id="response6" name="response6" required maxlength="20" size="25" placeholder="ta réponse" style="color:red"!important>
                <button type="button" id="btn6">valider</button>
        </form>
            <!-- <br> -->
        </span>
        <h4>Mamie Müjo te félicite pour ton courage et ta vaillance! Consulte tes résultats pour voir si tu es l'Elu qui pourra affronter la sorcière.</h4>
        <input type="submit" value="tableau des scores">
    </div>
</main>

<script src="./js/responseEpreuve3.js"></script>

</body>
</html>