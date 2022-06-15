<?php
require_once __DIR__ . "/Agency.php";

$agency = new Agency("Boolean S.r.l.", "Piazzale Giovanni delle Bande Nere, 9");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styleAdress.css">
</head>

<body>
  <div>
    <h1 class="title_0">Indirizzo:</h1>
    <h1 class="title_1">
      <?php echo $agency->printAdress(); ?>
    </h1>
  </div>
</body>

</html>