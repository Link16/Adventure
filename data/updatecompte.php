<?php include './controllers/getONEcompte.php'?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel=stylesheet href="./css/main.css">
  <link rel=stylesheet href="./css/exportedcss.css">
  <title>Modifiez !</title>
</head>
<body>
<?php include './templates/header.php'?>
  <div class="container">
  <form action="./controllers/updateONEcompte.php" method="post">
    <input type="hidden" name="id" value="<?= $LOGGS['id']?>">
    <div class="row">  
      <div class="col-25">
        <label for="title">Son petit nom</label>
      </div>
      <div class="col-75">
        <input type="text" name="lastName" value="<?= $LOGGS['lastName']?>">
      </div>
    </div>
    <div class="row">  
      <div class="col-25">
        <label for="title">Nom du proprietaire</label>
      </div>
      <div class="col-75">
        <input type="text" name="firstName" value="<?= $LOGGS['firstName']?>">
      </div>
    </div>
    <div class="row">  
      <div class="col-25">
        <label for="title">Son age</label>
      </div>
      <div class="col-75">
        <input type="number" name="age" value="<?= $LOGGS['age']?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="title">Couleur de ses yeux</label>
      </div>
      <div class="col-75">
        <input type="text" name="Login" value="<?= $LOGGS['Login']?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="title">Password</label>
      </div>
      <div class="col-75">
        <input type="text" name="Password" value="<?= $LOGGS['Password']?>">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Update">
  </div>
</div>
  </form>
  <?php include './templates/footer.html';?>
</body>
</html>