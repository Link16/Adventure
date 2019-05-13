<nav>
    <ul>
        <li><button><a href="/">Accueil</a></button></li>
        <br>
        <?php if (!isset($_SESSION['pseudo'])): ?>
        <li><button><a href="./connection.php">Connection</a></button></li>
        <br>
        <?php endif ?>
        <li><button><a href="./controllers/disconnect.php">DECONNEXION</a></button></li>
    </ul>
</nav>