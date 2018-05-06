<!DOCTYPE html>

<html>

  <head>
    <?php
      $bgArr = scandir("files/bg/");

      $i = rand(0, count($bgArr)-1);
      $bg = "$bgArr[$i]";
    ?>

    <style type="text/css">
    body{
      background: url(files/bg/<?php echo $bg; ?>) no-repeat;
      filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='files/bg/<?php echo $bg; ?>',sizingMethod='scale');
      -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='files/bg/<?php echo $bg; ?>',sizingMethod='scale')";
    }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body>
    <audio id="song" style="display:none;" src="files/H E R B - Moving.mp3" controls autoplay loop>
  </body>

</html>
