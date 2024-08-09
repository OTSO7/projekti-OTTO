<?php $this->layout('template', ['title' => 'Tulevat tapahtumat']) ?>

<div class="tapahtumat-container">
    <?php
    foreach ($tapahtumat as $tapahtuma) {

        $start = new DateTime($tapahtuma['tap_alkaa']);
        $end = new DateTime($tapahtuma['tap_loppuu']);

        echo "<div class='tapahtuma-card'>";
            echo "<div class='tapahtuma-header'>$tapahtuma[nimi]</div>";
            echo "<div class='tapahtuma-dates'>" . $start->format('j.n.Y') . " - " . $end->format('j.n.Y') . "</div>";
            echo "<div class='tapahtuma-footer'>";
                echo "<a href='tapahtuma?id=" . $tapahtuma['idtapahtuma'] . "' class='tapahtuma-link'>TIEDOT</a>";
            echo "</div>";
        echo "</div>";
    }
    ?>
</div>

