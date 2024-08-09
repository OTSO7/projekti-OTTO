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
            echo "<div>$_SESSION[user]</div>";
            echo "<div><a href='logout'>Kirjaudu ulos</a></div>";
          } else {
            echo "<div><a href='kirjaudu'>Kirjaudu</a></div>";
          } ?></li>
                
            </ul>
        </nav>
    </header>

    <section class="hero-section">
        <div class="hero-content">
        <h1>Tili luotu!</h1>

<p>Sinun tulee varmistaa sähköpostiosoitteesi ennen, kuin voit käyttää
tiliäsi. Sinulle on lähetetty sähköpostiisi (<?= getValue($formdata,'email') ?>)
vahvistusviesti. Ole hyvä ja käy vahvistamassa sähköpostiosoitteesi klikkaamalla
viestissä olevaa linkkiä.</p>

</div>
    </section>
