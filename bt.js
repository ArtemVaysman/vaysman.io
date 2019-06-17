function preloader(){
	$(() => {

		setInterval(() => {

		let p = $('.preloader');

		p.css('opacity', 0);

		setInterval(
			() => p.remove(),
			parseInt(p.css('--duration')) * 1000
			);

		}, 3000);
	});
}

preloader();

	$(window).scroll(function(){
		if($(this).scrollTop() > 40){
			$('#topBtn').fadeIn();
		} else {
			$('#topBtn').fadeOut();
		}
		
	});
    $("#topBtn").click(function(){
        $('html, body').animate({ scrollTop : 0}, 800);
    });

   $('.carousel').carousel({
  interval: 4000
})