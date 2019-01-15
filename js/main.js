function init(bgNum) {
  let bgAddr = `files/bg/rain${bgNum}.gif`
  $('<img/>')
    .attr('src', bgAddr)
    .on('load', function() {
      $(this).remove()
      $('#bg').css('background-image', "url('" + bgAddr + "')")

      let song = new Audio('files/H E R B - Moving.mp3')
      song.play()
      song.loop = true
    })
}

let bgNum = ~~(Math.random() * 10) + 1
// let songs = {
//   moving: {
//     name: ""
//   }
// }
init(bgNum)
