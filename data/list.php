<?php include './controllers/getALLcompte.php'; 
session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Liste des personnages</title>
  <link rel=stylesheet href="./css/main.css"> 
  <link rel=stylesheet href="./css/exportedcss.css">
  <link rel="icon" href="./ressources/favico.ico"/>
</head>
<body>
  <?php include './templates/header.php';?>
  <main>
    <div class='container'>
      <table>
        <tr class='row'>
        <th>lastName</th>
         <th>firstName</th>
         <th>age</th>
         <th>Login</th>
         <th>Password</th>
         <th>Update</th>
         <th>Supprimer</th>
        </tr>
        <?php foreach($LOGGS as $LOGG) {?>
          <tr class="row">
            <td><?= $LOGG['lastName'] ?></td>
            <td><?= $LOGG['firstName'] ?></td>
            <td><?= $LOGG['age'] ?></td>
            <td><?= $LOGG['Login'] ?></td>
            <td><?= $LOGG['Password'] ?></td>
            <td>
            <form action="./updatecompte.php" method ="POST">
                <input type="hidden" name ="id" value="<?= $LOGG['id']?>">
                <input type="submit" value="U">
                </form>
            </td>
            <td>
            <form action="./deletecompte.php" method ="POST">
              <input type="hidden" name ="id" value="<?= $LOGG['id']?>">
              <input type="submit" value="X">
              </form>
          </td>
        </tr>
        <?php }?>
      </table>
    </div>
  </main>
  <?php include './templates/footer.html';?>
</body>
</html>


<form action="./deletecompte.php" method ="POST">
              <input type="hidden" name ="id" value="<?= $LOGG['id']?>">
              <input type="submit" value="X">
              </form>