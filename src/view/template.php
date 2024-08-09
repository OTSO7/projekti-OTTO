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
            <h1>OtsoArts</h1>
            <p>Your Gateway to Extraordinary Art Experiences</p>
            <a href="#events" class="btn-main">Discover Upcoming Events</a>
        </div>
    </section>

    <section id="events" class="events-section">
        <h2>Upcoming Art Events</h2>
        <div class="events-container">
            <?=$this->section('content')?>
        </div>
    </section>

    <section class="featured-art-section">
        <h2>Featured Artwork</h2>
        <div class="art-gallery">
            <div class="art-item">
                <img src="public/images/art1.jpg" alt="Art 1">
            </div>
            <div class="art-item">
                <img src="public/images/art2.jpg" alt="Art 2">
            </div>
            <div class="art-item">
                <img src="public/images/art3.jpg" alt="Art 3">
            </div>
            <div class="art-item">
                <img src="public/images/art4.jpg" alt="Art 4">
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="logo-footer">
                <a href="<?=BASEURL?>">OtsoArts</a>
            </div>
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
            </div>
        </div>
        <p>&copy; 2024 OtsoArts by Otto Saarimaa</p>
    </footer>
</body>
</html>
