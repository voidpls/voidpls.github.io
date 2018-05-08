
function loadBG(bgFile) {

  let bgAddr = "../files/bg/"+bgFile;


  $('<img/>').attr("src", bgAddr).on('load', function() {
     $(this).remove();
	 $("#bg").css("background-image", "url('"+bgAddr+"')");     
	 
	 var song = new Audio('../files/H E R B - Moving.mp3');
     song.play();
     song.loop = true;
  });

}
