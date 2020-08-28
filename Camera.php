<?php

class Camera {
  public $camera_id;

  public $camera_numero;

  public $camera_piano;

  public $camera_max_ospiti;

  public $camera_created;

  public $camera_updated;


  public function __construct($_camera_id, $_camera_numero, $_camera_piano, $_camera_max_ospiti, $_camera_created, $_camera_updated) {

    $this->camera_id = $_camera_id;
    $this->camera_numero = $_camera_numero;
    $this->camera_piano = $_camera_piano;
    $this->camera_max_ospiti = $_camera_max_ospiti;
    $this->camera_created = $_camera_created;
    $this->camera_updated = $_camera_updated;

  }

  public function getData() {
    return [
      'camera_id' => $this->camera_id,
      'camera_numero' => $this->camera_numero,
      'camera_piano' => $this->camera_piano,
      'camera_max_ospiti' => $this->camera_max_ospiti,
      'camera_created' => $this->camera_created,
      'camera_updated' => $this->camera_updated

    ];
  }



}


 ?>
