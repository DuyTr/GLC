// Homepage slider
$(document).ready(function(){
  	$('.homepage-slider').slick({
    	autoplay: true,
    	dots: true
  	});
});

// Equal height width
function equalHeightWidth(){
	var divWidth = $('.ssap .grid-item').width();
	$('.ssap .grid-item').height(divWidth);
	$('.ssap .ssap-title').height(divWidth*2);
}
	
$( document ).ready(equalHeightWidth);
$( window ).resize(equalHeightWidth);
