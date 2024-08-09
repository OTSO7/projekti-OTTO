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
                <li><a href="#home">Home</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero-section">
        <div class="hero-content">
        <h1>Uuden tilin luonti</h1>
        <form action="" method="POST">
  <div class="formi">
    <label for="nimi">Nimi:</label>
    <input id="nimi" type="text" name="nimi">
  </div>
  <div class="formi">
    <label for="email">Sähköposti:</label>
    <input id="email" type="email" name="email">
  </div>
  <div class="formi">
    <label for="discord">Discord-tunnus:</label>
    <input id="discord" type="text" name="discord">
  </div>
  <div class="formi">
    <label for="salasana1">Salasana:</label>
    <input id="salasana1" type="password" name="salasana1">
  </div>
  <div class="formi">
    <label for="salasana2">Salasana uudelleen:</label>
    <input id="salasana2" type="password" name="salasana2">
  </div>
  <div class="nappi">
    <input type="submit" name="laheta" value="Luo tili">
  </div>
</form>
        </div>
    </section>




