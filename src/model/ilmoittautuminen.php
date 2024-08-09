<?php

  require_once HELPERS_DIR . 'DB.php';

  function haeIlmoittautuminen($idhenkilo,$idtapahtuma) {
    return DB::run('SELECT * FROM ilmoittautuminenn WHERE idhenkiloo = ? AND idtapahtum = ?',
                   [$idhenkilo, $idtapahtuma])->fetchAll();
  }

  function lisaaIlmoittautuminen($idhenkilo,$idtapahtuma) {
    DB::run('INSERT INTO ilmoittautuminenn (idhenkiloo, idtapahtum) VALUE (?,?)',
            [$idhenkilo, $idtapahtuma]);
    return DB::lastInsertId();
  }

  function poistaIlmoittautuminen($idhenkilo, $idtapahtuma) {
    return DB::run('DELETE FROM ilmoittautuminenn  WHERE idhenkiloo = ? AND idtapahtum = ?',
                   [$idhenkilo, $idtapahtuma])->rowCount();
  }

?>
