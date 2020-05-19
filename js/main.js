//function init(bgNum) {
 // let bgAddr = `files/bg/rain${bgNum}.gif`

  //$('<img/>')
    //.attr('src', bgAddr)
    //.on('load', function() {
      //$(this).remove()
      //$('#bg').css('background-image', "url('" + bgAddr + "')")
      //let song = new Audio('files/H E R B - Moving.mp3')
      //song.loop = true
      //song.volume = 0.75
      //song.play()
    //})
//}

//let bgNum = ~~(Math.random() * 6) + 1
//init(bgNum)

$(document).ready(function() {
  $("#bgndVideo").mb_YTPlayer();
  $('#main').hover(function() {
    let box = $('#box')
    if (box.hasClass('invert')) box.removeClass('invert')
    else box.addClass('invert')
    $('#projects')
      .stop()
      .slideToggle({
        duration: 400
      })
  })
    var videoWidth = 1280;
    var  video = $(".video-container video").attr("srcdesk");
    if($(window).width() < 721) {
      videoWidth = 720;
      video = $(".video-container video").attr("srcmob"));
    }
    $(".video-container video").attr("width", videoWidth).append('<source src="' + video + '" type="video/mp4" >'),
})
