$(document).ready(function() {
	$('.scroll .text').on('click', function() {
		var video_link = $(this).attr('video');
		var title = $(this).attr('tit');
		var description = $(this).attr('desc');

		$('#video').html(video_link);
		$('#vid-title').text(title);
		$('#vid-desc').text(description);

	});
});
