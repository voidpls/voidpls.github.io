<!DOCTYPE html>

<html>

  <head>

    <?php
      $bgArr = array_slice(scandir("files/bg/"), 2);
      $i = rand(0, count($bgArr)-1);
      $bg = "$bgArr[$i]";
    ?>


    <link rel="stylesheet" type="text/css" href="css/style.php">

  </head>

  <body id=bg>

    <h1>Void</h1>
    <h2>#1488</h2>

    <audio id="song" style="display:none;" src="files/H E R B - Moving.mp3" autoplay loop>

  </body>

</html>
