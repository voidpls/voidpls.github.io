<!DOCTYPE html>

<?php
  $file = file_get_contents('files/ip.json', true);
  $data = json_decode($file, true);
  unset($file);

  $protocol = $_SERVER['SERVER_PROTOCOL'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $agent = $_SERVER['HTTP_USER_AGENT'];
  $ref = $_SERVER['HTTP_REFERER'];
  $dateTime = date('Y/m/d G:i:s');
  $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

  $arr = array("hostname"=>$hostname,
    "user agent"=>$agent,
    "ref"=>$ref,
    "time"=>$dateTime
  );
  $jsonobj = json_encode(array($ip => $arr));

  $data[$ip] = $jsonobj;
  $result = json_encode($data, 128);
  file_put_contents('files/ip.json', $result);
  unset($result);
?>

<html>

  <head>
    <?php

    $bgArr = array_slice(scandir("files/bg/"), 2);
    $i = rand(0, count($bgArr)-1);
    $bg = "$bgArr[$i]";

    ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preload" href="css/font.css" as="style">
    <style>

    body#bg {
      background: url(files/bg/<?php echo $bg; ?>) no-repeat 50% 50% fixed;
      background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      -webkit-background-size: cover;
      height: 100%;
    }

    </style>
  </head>

  <body id=bg>

    <div class=box>

      <h1>Void</h1>
      <!--<h2>#1488</h2>-->

    </div>

    <audio id="song" style="display:none;" src="files/H E R B - Moving.mp3" autoplay loop>

  </body>

</html>
