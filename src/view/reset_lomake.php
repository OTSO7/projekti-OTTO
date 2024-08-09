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
        <h1>Salasanan vaihtaminen</h1>

<form action="" method="POST">
  <div class="formi">
    <label for="salasana1">Salasana:</label>
    <input id="salasana1" type="password" name="salasana1">
  </div>
  <div class="formi">
    <label for="salasana2">Salasana uudelleen:</label>
    <input id="salasana2" type="password" name="salasana2">
  </div>
  <div>
    <div class="error"><?= $error ?></div>
  </div>
  <div>
    <input type="submit" name="laheta" value="Vaihda salasana">
  </div>
</form>
</div>
    </section>