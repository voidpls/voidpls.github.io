
function loadBG(bgFile) {

  let bgAddr = "../files/bg/"+bgFile;

  $("#bg").css("background-image", "url('"+bgAddr+"')");
//$("#bg").css("background-image", "url('../files/bg/rain1.gif')");

  /*$('<img/>').attr("src", bgAddr).on('load', function() {
     $(this).remove();
     $('body').css("background", "url(${"+bgAddr+"}) no-repeat 50% 50% fixed;");
     var song = new Audio('../files/H E R B - Moving.mp3');
     song.play();
     song.loop = true;
  });*/

}
