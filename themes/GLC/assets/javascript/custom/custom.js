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

// Remove overlay
$(document).ready(function(){
	$('#loadOverlay').addClass('remove-overlay');
	setTimeout(function(){ $('#loadOverlay').remove();},800);
});

// Photo grid
$(document).ready(function(){
	$('.grid').masonry({
		percentPosition: true,
		columnWidth: '.grid-sizer',
		gutter: '.gutter-sizer',
		itemSelector: 'grid-item'
	});
});