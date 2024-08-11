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


    <section class="hero-section2">
        <div class="hero-content2">
        <h1>Uuden tilin luonti</h1>

<form action="" method="POST">
<div class="formi">
    <label for="nimi">Nimi:</label>
    <input id="nimi" type="text" name="nimi" value="<?= getValue($formdata,'nimi') ?>">
    <div class="error"><?= getValue($error,'nimi'); ?></div>
  </div>
  <div class="formi">
    <label for="email">Sähköposti:</label>
    <input type="text" name="email" value="<?= getValue($formdata,'email') ?>">
    <div class="error"><?= getValue($error,'email'); ?></div>
  </div>
  <div class="formi">
    <label for="discord">Discord-tunnus:</label>
    <input type="text" name="discord" value="<?= getValue($formdata,'discord')?>">
    <div class="error"><?= getValue($error,'discord'); ?></div>
  </div>
  <div class="formi">
    <label for="salasana1">Salasana:</label>
    <input type="password" name="salasana1">
    <div class="error"><?= getValue($error,'salasana'); ?></div>
  </div>
  <div class="formi">
    <label for="salasana2">Salasana uudelleen:</label>
    <input type="password" name="salasana2">
  </div>
  <div>
    <input type="submit" name="laheta" value="Luo tili">
  </div>
</form>
        </div>
    </section>




