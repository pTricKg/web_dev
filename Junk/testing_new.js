$(document).ready(function() {
	$("#icon1").mouseenter(function() {
  		$(this).animate({height: "100px", width: "100px", position: 'relative'});
		});
	$("#icon1").mouseleave(function() {
  		$(this).animate({height: "57px", width: "57px", position: 'relative'});
	});
	$("#icon1").click(function() {
			$(this).effect("clip");
			$(this).removeAttr( "style" ).hide().fadeIn();
	});
	$("#icon2").mouseenter(function() {
  		$(this).animate({height: "100px", width: "100px", position: 'relative'});
		});
	$("#icon2").mouseleave(function() {
  		$(this).animate({height: "57px", width: "57px", position: 'relative'});
	});
	$("#icon2").click(function() {
			$(this).effect("clip");
			$(this).removeAttr( "style" ).hide().fadeIn();
	});
	$("#icon3").mouseenter(function() {
  		$(this).animate({height: "100px", width: "100px", position: 'relative'});
		});
	$("#icon3").mouseleave(function() {
  		$(this).animate({height: "57px", width: "57px", position: 'relative'});
	});
	$("#icon3").click(function() {
			$(this).effect("clip");
			$(this).removeAttr( "style" ).hide().fadeIn();
	});
	$("#icon4").mouseenter(function() {
  		$(this).animate({height: "100px", width: "100px", position: 'relative'});
		});
	$("#icon4").mouseleave(function() {
  		$(this).animate({height: "57px", width: "57px", position: 'relative'});
	});
	$("#icon4").click(function() {
			$(this).effect("clip");
			$(this).removeAttr( "style" ).hide().fadeIn();
	});
	$("#icon5").mouseenter(function() {
  		$(this).animate({height: "100px", width: "100px", position: 'relative'});
		});
	$("#icon5").mouseleave(function() {
  		$(this).animate({height: "57px", width: "57px", position: 'relative'});
	});
	$("#icon5").click(function() {
			$(this).effect("clip");
			$(this).removeAttr( "style" ).hide().fadeIn();
	});
});