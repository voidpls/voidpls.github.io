
function loadBG(bg) {
  console.log(bg)

  $('<img/>').attr('src', `files/bg/${bg}`).on('load', function() {
     $(this).remove();
     $('body').css('background', `url(files/bg/${bg}) no-repeat 50% 50% fixed;`);
     var song = new Audio('../files/H E R B - Moving.mp3');
     song.play();
     song.loop = true;
  });

}
