<!DOCTYPE html>

<html>

  <head>
    <?php
      $bgArr = scandir("files/bg/");

      $i = rand(0, count($bgArr)-1);
      $bg = "$bgArr[$i]";
    ?>

    <style type="text/css">
    .bg {

      background-image: url("https://3.bp.blogspot.com/-RiujjOs5QrM/WjrM8APbmSI/AAAAAAAC6fY/ykXFC5pLOdocgAwZgZKAe0SwGMlnK01PACLcBGAs/s1600/Capture.JPG")
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;

    }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body>
    <div class="bg"></div>
    <audio id="song" style="display:none;" src="files/H E R B - Moving.mp3" controls autoplay loop>
  </body>

</html>
