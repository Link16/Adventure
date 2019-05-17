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
<?php include './templates/header.php'; 
include './controllers/getALLScores.php';
include './controllers/getALLcompte.php';?>
<main>
    <div class="containerbaba"><h1>Tableau des scores :</h1>
        <table id="t01">
            <tr>
                <th>Points</th> 
                <th>Personnage</th>
            </tr>
            <?php foreach ($scores as $score) {
                echo '<tr>';
                echo'<td>'.$score['perso'].'</td>';
                echo '<td>'.$score['Points'].'</td>';
                echo'</tr>';
            }?>
        </table>
        <div class="basdroit" style="margin-bottom:40px; border:none;">
                    <div id='zoubou' class="jouer" style='box-shadow : 5px 5px 30px blue'>
                        <div class = "Crasse">
                            <a href='./fin.php'><H1>Découvrir le score !</H1></a>
                        </div>
                   </div>
                </div>
    </div>
    
    

    </main>

    <?php include './templates/footer.html'; ?>

</body>
</html>