$(document).ready(function() {
	$('div').mouseenter(function() {
  		$(this).animate({height: "150px", position: "fixed"});
		});
	$('div').mouseleave(function() {
  		$(this).animate({height: "100px", position: "fixed"});
	});
	$('div').click(function() {
			$(this).effect("bounce", "slow", {position: "fixed"});
	});
		
		
	/*$('div').hover(function() {
			$(this).effect("bounce","fast");
		});*/
/*
    $('div').mouseenter(function() {
		$(this).fadeTo(function() {
    	$(this).width(200);
		});
	});
	$('div').mouseleave(function() {
    	$(this).fadeTo(function() {
			$(this).width(100);
		});
	}); */
	
});