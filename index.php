<?php

require_once(__DIR__ . '/Camera.php');


$array_camere = [
  [
      'camera_id' => 1,
      'camera_piano' => 1,
      'camera_ospiti' => 2,
      'camera_creata' => '01/01/2018',
      'camera_aggiornata' => '12/08/2020'
     ],
    [
      'camera_id' => 2,
      'camera_piano' => 2,
      'camera_ospiti' => 4,
      'camera_creata' => '01/01/2019',
      'camera_aggiornata' => '16/08/2020'
    ],
      [
      'camera_id' => 3,
      'camera_piano' => 2,
      'camera_ospiti' => 3,
      'camera_creata' => '01/04/2010',
      'camera_aggiornata' => '11/08/2020'
      ],
      [
      'camera_id' => 4,
      'camera_piano' => 3,
      'camera_ospiti' => 1,
      'camera_creata' => '13/11/2011',
      'camera_aggiornata' => '15/08/2020'

      ],
      [
      'camera_id' => 5,
      'camera_piano' => 4,
      'camera_ospiti' => 4,
      'camera_creata' => '03/10/2010',
      'camera_aggiornata' => '04/05/2020'

      ],

    ];


    //stampo l'array

    foreach ($array_camere as $camera) {

      $camera = new Camera($camera['camera_id'], $camera['camera_numero'], $camera['camera_piano'], $camera['camera_ospiti'], $camera['camera_creata'], $camera['camera_aggiornata']);

      $dati_camera = $camera->getData();
      ?>

      <div>
        <ul>
          <li>  Camera ID:  <?php  echo $dati_camera['camera_id']; ?></li>
          <li>  Numero della Camera: <?php  echo $camera->setCameraNumero(rand(1,9)); ?></li>
          <li>  Piano: <?php  echo $dati_camera['camera_piano']; ?></li>
          <li>  Numero massimo di ospiti: <?php  echo $dati_camera['camera_ospiti']; ?></li>
          <li>  Camera creata il : <?php  echo $dati_camera['camera_creata']; ?></li>
          <li>  Ultima prenotazione: <?php  echo $dati_camera['camera_aggiornata']; ?></li>



        </ul>
      </div>
      <?php



    }



    ?>
