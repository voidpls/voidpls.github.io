function init(bgNum) {
  let bgAddr = `files/bg/rain${bgNum}.gif`

  $('<img/>')
    .attr('src', bgAddr)
    .ready(function() {
      $(this).remove()
      $('#bg').css('background-image', "url('" + bgAddr + "')")
      console.log($('#bg').css('background-image'))
      let song = new Audio('files/H E R B - Moving.mp3')
      song.loop = true
      song.volume = 0.75
      song.play()
    })
}

let bgNum = ~~(Math.random() * 6) + 1
// let songs = {
//   moving: {
//     name: ""
//   }
// }
init(bgNum)
