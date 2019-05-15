<!DOCTYPE html>
<html lang="fr">
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
        <input type="text" id="coucou" name="lastName" required>
        <span id='missPrenom'></span><br>
      </div>
    </div>
    <div class="row">  
      <div class="col-25">
        <label for="title">Prénom</label>
      </div>
      <div class="col-75">
        <input type="text" id="Nom" name="firstName" required>
      </div>
    </div>
    <div class="row">  
      <div class="col-25">
        <label for="title">Age</label>
      </div>
      <div class="col-75">
        <input type="number" id="Nom" name="age" size="3" required>
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
      <input type="submit" value="S'inscrire" onClick="myFunction()">
  </div>
</div>
  </form>
  <script>
    function myFunction() {
      var zaza = document.getElementById("coucou").value;
      var missPrenom = document.getElementById('missPrenom');
      if (zaza == "")
      {
        event.preventDefault();
                    missPrenom.textContent = 'Prénom manquant';
                    missPrenom.style.color = 'red';
      }
      else
      {
        alert('cbon');
      }
    }
  </script>
  <?php include './templates/footer.html';?>
</body>
</html>
