$(function($) {
	get_posts();
});
function get_posts(){
	$('.pagination a').on('click', function (e) {
		/*$(window).on('hashchange', function() {
		});*/
		e.preventDefault();
		var page = $(this).attr('href').split('page=')[1];
		if(page == 1)
			var url = '/';
		else
			var url = '?page=' + page;
		window.history.pushState(null, null, url);
		$.ajax({
            url : '?page=' + page,
            dataType: 'json',
        }).done(function (data) {
            $('.articles').html(data);
			get_posts();
        }).fail(function () {
            alert('Articles could not be loaded.');
        });
		return page;
	});
}