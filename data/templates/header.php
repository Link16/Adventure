<header>
  <nav>
    <ul class="topnav">
      <li><a class = "active" href="/">Accueil</a></li>
      <?php if (!isset($_SESSION['login']))
      {
        echo '<li><a href="./connect.php">Connect</a></li>';
        echo '<li><a href="Inscription.php">Inscription</a></li>';
      }
      else if ($_SESSION['password'] == 'admin')
      {
        echo '<li><a href="list.php">Admin</a></li>';
        echo '<li><a href="../deco.php">Disconnect</a></li>';
      }
      else
      {
        if (isset($_SESSION['search']))
        {
          $sess = $_SESSION['login'];
          echo '<li><a href="../deco.php">Disconnect</a></li>';
          echo '<li><a>'.'Bienvenue '.$sess.'</a></li>';
          echo '<li><a href="../choix.php">Continuez !</a></li>';  
        }
        else
        {
        $sess = $_SESSION['login'];
        echo '<li><a href="../deco.php">Disconnect</a></li>';
        echo '<li><a>'.'Bienvenue '.$sess.'</a></li>';
        }
      }
        ?>
    </ul>
  </nav>
</header>