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


$('.btn-shorten').on('click', function(){

  $.ajax({
    url: '/api/shorten',
    type: 'POST',
    dataType: 'JSON',
    data: {url: $('#url-field').val()},
    success: function(data){
        var resultHTML = '<a class="result" href="' + data.shortUrl + '">'
            + data.shortUrl + '</a>';
        $('#link').html(resultHTML);
        $('#link').hide().fadeIn('slow');
    }
  });

});
