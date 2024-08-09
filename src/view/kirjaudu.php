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
        <h1>Kirjautuminen</h1>

<form action="" method="POST">
<div class="formi">
    <label>Sähköposti:</label>
    <input type="text" name="email">
  </div>
  <div class="formi">
    <label>Salasana:</label>
    <input type="password" name="salasana">
  </div>
  <div class="error"><?= getValue($error,'virhe'); ?></div>
  <div>
    <input type="submit" name="laheta" value="Kirjaudu">
  </div>
</form>

<div class="info">
  Jos sinulla ei ole vielä tunnuksia, niin voit luoda ne <a href="lisaa_tili">täällä</a>.<br>
  Jos olet unohtanut salasanasi, niin voit vaihtaa sen <a href="tilaa_vaihtoavain">täällä</a>.
</div>

    </section>