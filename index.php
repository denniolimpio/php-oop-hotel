<?php

require_once(__DIR__ . '/Camera.php');
require_once(__DIR__ . '/Ospiti.php');


$array_camere = [
  [
      'camera_id' => 1,
      'camera_numero' => 101,
      'camera_piano' => 1,
      'camera_max_ospiti' => 2,
      'camera_created' => '01/01/2018',
      'camera_updated' => '12/08/2020'
     ],
    [
      'camera_id' => 2,
      'camera_numero' => 201,
      'camera_piano' => 2,
      'camera_max_ospiti' => 4,
      'camera_created' => '01/01/2019',
      'camera_updated' => '16/08/2020'
    ],
      [
      'camera_id' => 3,
      'camera_numero' => 205,
      'camera_piano' => 2,
      'camera_max_ospiti' => 3,
      'camera_created' => '01/04/2010',
      'camera_updated' => '11/08/2020'
      ],
      [
      'camera_id' => 4,
      'camera_numero' => 303,
      'camera_piano' => 3,
      'camera_max_ospiti' => 1,
      'camera_created' => '13/11/2011',
      'camera_updated' => '15/08/2020'

      ],
      [
      'camera_id' => 5,
      'camera_numero' => 408,
      'camera_piano' => 4,
      'camera_max_ospiti' => 4,
      'camera_created' => '03/10/2010',
      'camera_updated' => '04/05/2020'

      ],

    ];


    //stampo l'array

    foreach ($array_camere as $camera) {

      $camera = new Camera($camera['camera_id'], $camera['camera_numero'], $camera['camera_piano'], $camera['camera_max_ospiti'], $camera['camera_created'], $camera['camera_updated']);

      $dati_camera = $camera->getData();

      ?>

      <div>
        <ul>
          <li>  Camera ID:  <?php  echo $dati_camera['camera_id']; ?></li>
          <li>  Numero della Camera: <?php  echo $dati_camera['camera_numero']; ?></li>
          <li>  Piano: <?php  echo $dati_camera['camera_piano']; ?></li>
          <li>  Numero massimo di ospiti: <?php  echo $dati_camera['camera_max_ospiti']; ?></li>
          <li>  Camera creata al: <?php  echo $dati_camera['camera_created']; ?></li>
          <li>  Ultima prenotazione: <?php  echo $dati_camera['camera_updated']; ?></li>



        </ul>
      </div>
      <?php



    }



    ?>
