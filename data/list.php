<?php include './controllers/getALLcompte.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Liste des minous</title>
  <link rel=stylesheet href="./css/main.css"> 
  <link rel=stylesheet href="./css/exportedcss.css">
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
         <th>Supprimer</th>
         <th>Update</th>
        </tr>
        <?php foreach($LOGGS as $LOGG) {?>
          <tr class="row">
            <td><?= $LOGG['lastName'] ?></td>
            <td><?= $LOGG['firstName'] ?></td>
            <td><?= $LOGG['age'] ?></td>
            <td><?= $LOGG['Login'] ?></td>
            <td><?= $LOGG['Password'] ?></td>
            <td>
              <form action="./deletecompte.php" method ="POST">
              <input type="hidden" name ="id" value="<?= $LOGG['id']?>">
              <input type="submit" value="X">
              </form>
            </td>
            <td>
                <form action="./updatecompte.php" method ="POST">
                <input type="hidden" name ="id" value="<?= $LOGG['id']?>">
                <input type="submit" value="U">
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