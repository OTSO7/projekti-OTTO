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
        <h1>Tili luotu!</h1>

<p>Sinun tulee varmistaa sähköpostiosoitteesi ennen, kuin voit käyttää
tiliäsi. Sinulle on lähetetty sähköpostiisi (<?= getValue($formdata,'email') ?>)
vahvistusviesti. Ole hyvä ja käy vahvistamassa sähköpostiosoitteesi klikkaamalla
viestissä olevaa linkkiä.</p>

</div>
    </section>
