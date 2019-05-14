<header>
  <nav>
    <ul class="topnav">
      <li><a class = "active" href="/">Accueil</a></li>
      <?php if (!isset($_SESSION['pseudo']))
      {
        echo '<li><a href="connect.php">Connection</a></li>';
        echo '<li><a href="Inscription.php">Inscription</a></li>';  
      }
      else
        echo '<li><a href="../index.php"></a>Disconnect</li>'; ?>
    </ul>
  </nav>
</header>