<?php

  require_once __DIR__ ."/../data/db.php";


  $albums = empty($_GET["genre"]) || $_GET["genre"] === "all" ? $dischi : [];
  $genres = [];

  if(count($albums) === 0){

    foreach($dischi as $album){
      if($album["genre"] === $_GET["genre"]){
        $albums[] = $album;
      }
    }
  }

  foreach($dischi as $album){
    if(!in_array($album["genre"], $genres)){
      $genres[] = $album["genre"];
    }
  }

  $response = [
    "albums" => $albums,
    "genres" => $genres
  ];

  header("Content-Type: application/json");

  echo json_encode($response)
?>