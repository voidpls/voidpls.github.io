<?php

header("Content-type: text/css; charset: UTF-8");
header("Vary: Accept-Encoding");


$bgArr = array_slice(scandir("../files/bg/"), 2);
$i = rand(0, count($bgArr)-1);
$bg = "$bgArr[$i]";

?>

body, html {
  height:100%;
  margin: 0;
  background-color: #000;
  font-size: 3vw;
  font-family: "Quicksand", Helvetica, Arial, sans-serif;
  color: #fff;
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
  font-size: 7vw;
  display:inline-block;
  margin-bottom: 0;
  margin-top: 0;
  text-align: center;
}
h2 {
  font-size: 2.5vw;
  display:inline-block;
  margin-top: 0;
  text-align: center;
}
