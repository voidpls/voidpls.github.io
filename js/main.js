
function loadBG(bgFile) {

  let bgAddr = "../files/bg/"+bgFile;
  console.log(bgAddr);

  $('body').css("background", "url(${"+bgAddr+"}) no-repeat 50% 50% fixed;");

  /*$('<img/>').attr("src", bgAddr).on('load', function() {
     $(this).remove();
     $('body').css("background", "url(${"+bgAddr+"}) no-repeat 50% 50% fixed;");
     var song = new Audio('../files/H E R B - Moving.mp3');
     song.play();
     song.loop = true;
  });*/

}
