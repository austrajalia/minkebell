$(document).ready(function() {
	$('.menu-toggle').click(function() {
		$('.menu-toggle').toggleClass('active');
		$('.slide').toggleClass('active');
		$('.nav-toggle').toggleClass('out');
	});
})

var path = document.querySelector('.path');
var length = path.getTotalLength();