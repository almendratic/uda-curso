$('#myModal').on('show.bs.modal', function (e) {
	$.ajax({
		method: "GET",
		url: "https://api.tvmaze.com/search/shows?q=batman"		
	})
	.done(function( data ) {		
		var modal = $('.modal-body');
		var show, title, image;

		for (var i = 0; i < data.length; i++) {
			show = data[i].show;
			title = '<h3>' + show.name + '</h3>';
			image = '<img src="' + show.image.medium + '" />';

			modal.append('<div class="show">' + title + image + '</div>');
		}
	});
});
