<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel=stylesheet href="./css/main.css">
  <link rel="stylesheet" href="./css/exportedcss.css">
  <link rel="icon" href="./ressources/favico.ico"/>
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
        <input type="text" id="lastName" name="lastName" required>
        <span id='missPrenom'></span><br>
      </div>
    </div>
    <div class="row">  
      <div class="col-25">
        <label for="title">Prénom</label>
      </div>
      <div class="col-75">
        <input type="text" id="firstName" name="firstName" required>
        <span id='missPrenom2'></span><br>
      </div>
    </div>
    <div class="row">  
      <div class="col-25">
        <label for="title">Age</label>
      </div>
      <div class="col-75">
        <input type="number" id="age" name="age" size=3 min=0 required>
        <span id='missPrenom3'></span><br>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="title">Login</label>
      </div>
      <div class="col-75">
        <input type="text" id="Login" name="Login" required>
        <span id='missPrenom4'></span><br>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="title">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="Password" name="Password" required>
        <span id='missPrenom5'></span><br>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="S'inscrire" onClick="myFunction()" style="background-color:grey">
  </div>
</div>
  </form>
  <script>
    function myFunction() {
      var missLastName = document.getElementById("lastName").value;
      var missFirstName = document.getElementById("firstName").value;
      var missAge = document.getElementById("age").value;
      var missLogin = document.getElementById("Login").value;
      var missPassword = document.getElementById("Password").value;
      var missPrenom = document.getElementById('missPrenom');
      var missPrenom1 = document.getElementById('missPrenom2');
      var missPrenom2 = document.getElementById('missPrenom3');
      var missPrenom3 = document.getElementById('missPrenom4');
      var missPrenom4 = document.getElementById('missPrenom5');
      var i = 5;
      while (i > 0) {
      if (missLastName == "") 
      {
        event.preventDefault();
                    missPrenom.textContent = 'Nom manquant';
                    missPrenom.style.color = 'red';
      }
      else if (missFirstName == "")
      {
        event.preventDefault();
        missPrenom1.textContent = 'Prénom manquant';
        missPrenom1.style.color = 'red';
      }
      else if (missAge == "")
      {
        event.preventDefault();
        missPrenom2.textContent = 'Age manquant';
        missPrenom2.style.color = 'red';
      }
      else if (missLogin == "")
      {
        event.preventDefault();
        missPrenom3.textContent = 'Login manquant';
        missPrenom3.style.color = 'red';
      }
      else if (missPassword == "")
      {
        event.preventDefault();
        missPrenom4.textContent = 'Password manquant';
        missPrenom4.style.color = 'red';
      }
      else
      {
        alert('Vous êtes bien inscrit(e) !');
        break;
      }
      i--;
    }
    }
  </script>
  <?php include './templates/footer.html';?>
</body>
</html>
