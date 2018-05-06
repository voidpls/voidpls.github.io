
window.onload = playAudio()

function playAudio() {
  var song = new Audio('../files/H E R B - Moving.mp3');
  song.play();
  console.log('aaa')
  song.loop = true;
}
