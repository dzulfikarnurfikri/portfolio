new WOW().init();
$(".scrollpage").click(function(e){
	e.preventDefault();
	var elemen = $(this).attr('href');
	var elemen2 = $(elemen);
	$('body, html').animate({
		scrollTop : elemen2.offset().top - 60
	}, 1000, 'swing');
});
$(window).scroll(function(){
	if($(document).scrollTop() > 400 ){
		$(".navbar").addClass('navbar-scroll');
	}else{
		$(".navbar").removeClass('navbar-scroll');
	}
});
