<?php

  require_once HELPERS_DIR . 'DB.php';

  function lisaaHenkilo($nimi,$email,$discord,$salasana) {
    DB::run('INSERT INTO henkiloo (nimi, email, discord, salasana) VALUE  (?,?,?,?);',[$nimi,$email,$discord,$salasana]);
    return DB::lastInsertId();
  }

  function haeHenkiloSahkopostilla($email) {
    return DB::run('SELECT * FROM henkiloo WHERE email = ?;', [$email])->fetchAll();
  }


?>
