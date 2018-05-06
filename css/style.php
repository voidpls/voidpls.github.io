<?php
header("Content-type: text/css; charset: UTF-8");
?>

body, html {
  height:100%;
  margin: 0;
  font-size: 3vw;
}

body#bg {
  background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  -webkit-background-size: cover;
  height: 100%;
  background: url(files/bg/<?php echo $bg; ?>) no-repeat 50% 50% fixed;
}

body {
  display: inline-block;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

h1 {
  font-size: 6.5vw;
  display:inline-block;
  margin-bottom: 0;
  margin-top: 0;
  font-family: Helvetica;
  text-align: center;
  color: #fff;
}
h2 {
  font-size: 2.5vw;
  display:inline-block;
  margin-top: 0;
  font-family: Helvetica;
  text-align: center;
  color: #fff;
}

p {
  font-size: inherit;
  display:inline-block;
}
