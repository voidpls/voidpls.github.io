<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
    /* GET RANDOM BACKGROUND */
    $bgArr = array_slice(scandir("files/bg/"), 2);
    $i = rand(0, count($bgArr)-1);
    $bg = "$bgArr[$i]";
  ?>

  <title>URL Shortener</title>
  <link href='css/raleway.css' rel='stylesheet' type='text/css'>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet" type='text/css'>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    loadBG(<?php echo '"' . $bg . '"'; ?>)
  </script>
</head>
<body id="bg">

  <div class="site-wrapper">

    <div class="site-wrapper-inner">

      <div class="main-container">

        <div class="inner cover">
          <span class="glyphicon glyphicon-link"></span>
          <h1>URL Shortener</h1>
          <h4>voidxd.me/shorten</h4>

          <div class="row">

            <div class="col-lg-12">
              <div class="input-group input-group-lg">
                <input id="url-field" type="text" class="form-control" placeholder="Paste a link...">
                <span class="input-group-btn">
                  <button class="btn btn-shorten" type="button">SHORTEN</button>
                </span>
              </div>
            </div>

            <div class="col-lg-12">
              <div id="link"></div>
            </div>

          </div>

        </div>

      </div>
      <div class="footer">
        <p id="foot"> Playing "Trip4luv" by Taiyo Ky </p>
        <a href="https://soundcloud.com/taiyoky/trip4luv" target="_blank">
          <img id="SC" src="../files/imgs/sclogo.png">
        </a>
      </div>
    </div>

  </div>

  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
