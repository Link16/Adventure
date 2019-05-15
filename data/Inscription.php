<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel=stylesheet href="./css/main.css">
  <link rel="stylesheet" href="./css/exportedcss.css">
  <title>Inscrivez-vous !</title>
</head>
<body>
  <?php include './templates/header.php';?>
 <div style = 'margin-top = 150px !important' class="container">
  <form action="./controllers/addONEcompte.php" method="post">
    <div class="row">  
      <div class="col-25">
        <label for="title">Nom</label>
      </div>
      <div class="col-75">
        <input type="text" name="lastName" required>
      </div>
    </div>
    <div class="row">  
      <div class="col-25">
        <label for="title">Prénom</label>
      </div>
      <div class="col-75">
        <input type="text" name="firstName" required>
      </div>
    </div>
    <div class="row">  
      <div class="col-25">
        <label for="title">Age</label>
      </div>
      <div class="col-75">
        <input type="number" name="age" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="title">Login</label>
      </div>
      <div class="col-75">
        <input type="text" name="Login" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="title">Password</label>
      </div>
      <div class="col-75">
        <input type="text" name="Password" required>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="S'inscrire" onClick='Message()'>
      <script type="text/javascript" src="./js/popup.js">
  //  function Message() {
  //      var msg="Votre inscription est validée!";
  //      //console.log(msg)
  //      alert(msg);
  //  }
  

</script>
  </div>
</div>
  </form>
  <?php include './templates/footer.html';?>
</body>
</html>
