<?php

  require_once HELPERS_DIR . 'DB.php';

  function haeTapahtumat() {
    return DB::run('SELECT * FROM tapahtum ORDER BY tap_alkaa;')->fetchAll();
  }
  function haeTapahtuma($id) {
    return DB::run('SELECT * FROM tapahtum WHERE idtapahtuma = ?;',[$id])->fetch();
  }


?>
