<!DOCTYPE html>
<html lang="fi">
<head>
    <link href="styles/styles.css" rel="stylesheet">
    <title>OtsoArts - <?=$this->e($title)?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <div class="logo-container">
            <h1><a href="<?=BASEURL?>">OtsoArts</a></h1>
        </div>
        <nav class="navigation">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Welcome to OtsoArts</h2>
            <p>Explore the world of art with a modern touch. Discover, create, and be inspired.</p>
            <a href="#gallery" class="btn-primary">Explore Gallery</a>
        </div>
    </section>

    <section class="content-section">
        <div class="content">
            <div class="text-content">
                <?=$this->section('content')?>
            </div>
            <div class="image-content">
                <img src="public/images/pexels.jpg" alt="Artistic Image">
            </div>
        </div>
    </section>

    <footer>
        <hr>
        <div>OtsoArts by Otto Saarimaa</div>
    </footer>
</body>
</html>
