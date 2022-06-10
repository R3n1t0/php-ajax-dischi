<?php

  require_once __DIR__ ."./data/db.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Document</title>
</head>
<body>
  <?php foreach($dischi as $disco): ?>
    <div class="disco">
      <h2><?php echo $disco["title"] ?></h2>
      <h3><?php echo $disco["author"] ?></h3>
      <h4><?php echo $disco["genre"] ?></h4>
      <p><?php echo $disco["year"] ?></p>
    </div>
  <?php endforeach; ?>
</body>
</html>