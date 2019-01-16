function init(bgNum) {
  let bgAddr = `files/bg/rain${bgNum}.gif`

  $('<img/>')
    .attr('src', bgAddr)
    .on('load', function() {
      $(this).remove()
      $('#bg').css('background-image', "url('" + bgAddr + "')")
      let song = new Audio('files/H E R B - Moving.mp3')
      song.loop = true
      song.volume = 0.75
      song.play()
    })
}

let bgNum = ~~(Math.random() * 6) + 1
init(bgNum)

$(document).ready(function() {
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
})
