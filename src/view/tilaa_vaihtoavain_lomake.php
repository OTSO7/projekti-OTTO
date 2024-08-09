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
          } else {
            echo "<div><a href='kirjaudu'>Kirjaudu</a></div>";
          } ?></li>
                
            </ul>
        </nav>
    </header>


    <section class="hero-section">
        <div class="hero-content">
        <h1>Unohtunut salasana</h1>

<p>Voit vaihtaa unohtuneen salasanan vaihtolinkillä avulla. Vaihtolinkin voit tilata sähköpostiisi alla olevalla lomakkeella.</p>

<form action="" method="POST">
  <div class="formi">
    <label for="email">Sähköposti:</label>
    <input id="email" type="email" name="email">
  </div>
  <div>
    <input type="submit" name="laheta" value="Lähetä">
  </div>
</form>
