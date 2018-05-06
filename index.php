<!DOCTYPE html>

<html>

  <head>

    <?php
      $bgArr = array_slice(scandir("files/bg/"), 2);
      $i = rand(0, count($bgArr)-1);
      $bg = "$bgArr[$i]";
    ?>

    <style type="text/css">
    body#bg {
      background: url(files/bg/<?php echo $bg; ?>) no-repeat 50% 50% fixed;
    }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body id=bg>
    <audio id="song" style="display:none;" src="files/H E R B - Moving.mp3" autoplay loop>
  </body>

</html>
