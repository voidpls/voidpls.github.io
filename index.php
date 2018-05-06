<!DOCTYPE html>

<html>

  <head>

    <?php
      $bgArr = scandir("files/bg/");

      $i = rand(0, count($bgArr)-1);
      $bg = "$bgArr[$i]";
    ?>

    <style type="text/css">
    body#bg {

      background: url(files/bg/<?php echo $bg; ?>) no-repeat 50% 50% fixed;
      background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      -webkit-background-size: cover;
    }
    </style>
    <script>
      window.alert(<?php
      $js_array = json_encode($bgArr);
      echo $js_array;
      ?>)
    </script>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body id=bg>
    <audio id="song" style="display:none;" src="files/H E R B - Moving.mp3" controls autoplay loop>
  </body>

</html>
