<?php session_start();?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/exportedcss.css">
    <title>Epreuve 1 - Sagesse</title>
</head>
<body>

<?php include"./templates/header.php";?>

<main>
    <h1>EPREUVE DE LA SAGESSE</h1>
    <p>Vous voici arrivé(e) à la première épreuve de votre périple : l'épreuve de <strong>Sagesse</strong>.</p>
    <p>Il y a 3 énigmes à résoudre...A <strong>vous</strong> de bien y répondre!</p>

    <h2>Jeune héro(ïne), selon toi, qu'est-ce-qui s'allonge et rétrécit en même temps?</h2>
    <form>
        <label for="response1" :>
        <input type="text" id="response1" name="response1" required maxlength="20" size="25" value="vie" placeholder="ta réponse">
        <input type="button" value="valider" onclick="response1()">
    </form>
    <br>
    <h2>Jeune héro(ïne), selon toi, qu'est ce qui est plus grand que la Tour Eiffel, mais infiniment moins lourd ?</h2>
    <form>
        <label for="response2" :>
        <input type="text" id="response2" name="response2" required maxlength="20" size="25" placeholder="ta réponse">
        <input type="button" value="valider" onclick="response2()">
    </form>
    <!-- <script>
        function response() {
            var resp = document.getElementById("response").value;
        if (resp == 0
            echo "Bonne réponse! Tu peux passer à l'énigme suivante..."
        }
        else
            echo "Continue!"
        }
     </script> -->
     <br>
    <h2>Jeune héro(ïne), selon toi, qu'est-ce-qui est noir, deviens rouge et fini blanc?</h2>
    <form>
        <label for="response3" :>
        <input type="text" id="response3" name="response3" required maxlength="20" size="25" placeholder="ta réponse">
        <input type="submit" value="valider" onclick="response3()">
    </form>
    <!-- <script>
        function response() {
            var resp = document.getElementById("response").value;
    if (resp == ("le charbon" || "Le charbon" || "LE CHARBON" || "charbon" || "Charbon" || "CHARBON" || "du charbon" || "Du charbon" || "DU CHARBON" )) {
        echo "Bonne réponse! Tu peux passer à l'énigme suivante..."
    }
    else
        echo "Continue!"
    }
    </script> -->
    <br>
    <h3>Mamie Müjo te félicite pour ton courage et ta vaillance et t'invite à la <strong>2e épreuve</strong>...celle d'<strong>AGILITE</strong></h3>
</main>

<script src="./js/response.js"></script>

<?php include './templates/footer.html'?>

</body>
</html>