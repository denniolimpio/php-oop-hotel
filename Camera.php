<?php

class Camera {
  public $camera_id;

  public $camera_numero;

  public $camera_piano;

  public $camera_ospiti;

  public $camera_creata;

  public $camera_aggiornata;


  public function __construct($_camera_id, $_camera_numero, $_camera_piano, $_camera_ospiti, $_camera_creata, $_camera_aggiornata) {

    $this->camera_id = $_camera_id;
    $this->camera_numero = $_camera_numero;
    $this->camera_piano = $_camera_piano;
    $this->camera_ospiti = $_camera_ospiti;
    $this->camera_creata = $_camera_creata;
    $this->camera_aggiornata = $_camera_aggiornata;

  }

  public function getData() {
    return [
      'camera_id' => $this->camera_id,
      'camera_numero' => $this->camera_numero,
      'camera_piano' => $this->camera_piano,
      'camera_ospiti' => $this->camera_ospiti,
      'camera_creata' => $this->camera_creata,
      'camera_aggiornata' => $this->camera_aggiornata

    ];
  }

  public function setCameraNumero($_camera_numero) {
    
    if (!is_int($_camera_numero)) {

      throw new Exception('Errore, devi inserire un numero');

    } else {

      return $this->camera_numero = $_camera_numero;
    }
  }




}


?>
