<!DOCTYPE html>
<html lang="fi">
<head>
    <title>OtsoArts - <?=$this->e($title)?></title>
    <meta charset="UTF-8">
    <link href="styles/styles.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="<?=BASEURL?>">OtsoArts</a>
            </div>
            <ul class="nav-links">
                <li><?php if (isset($_SESSION['user'])) {
            echo "<div class='username'>$_SESSION[user]</div>";
            echo "<div><a href='logout'>Kirjaudu ulos</a></div>";
            if (isset($_SESSION['admin']) && $_SESSION['admin']) {
                echo "<div><a href='admin'>Ylläpitosivut</a></div>";  
              }
          } else {
            echo "<div><a href='kirjaudu'>Kirjaudu</a></div>";
          } ?></li>
                
            </ul>
        </nav>
    </header>


    <section class="hero-section">
        <div class="hero-content">


    <section class="art-details">
        <h1>Art 1</h1>
        <img src="public/images/art1.gif" alt="Art 1">
        <p>Tämä on lisätietoja taideteoksesta Art 1...</p>
    </section>
</div>

</section>

    <footer>
        <p>&copy; 2024 OtsoArts by Otto Saarimaa</p>
    </footer>
</body>
</html>
