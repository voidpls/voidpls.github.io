
function loadBG(bg) {

  $('<img/>').attr('src', 'http://picture.de/image.png').on('load', function() {
     $(this).remove();
     $('body').css('background', `url(files/bg/${bg}) no-repeat 50% 50% fixed;`);

     var song = new Audio('../files/H E R B - Moving.mp3');
     song.play();
     console.log('aaa')
     song.loop = true;
  });

}
