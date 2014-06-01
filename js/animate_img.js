$(document).ready(function() {
    $(document).keydown(function(key) {
        switch(parseInt(key.which,10)) {
			case 65: // a
				$('img').click(
				$('img').animate({left: "-=10px"}, 'fast'));// move with key a
				break;
			case 83: // s
				$('img').click(
				$('img').animate({top: "+=10px"}, 'fast'));// moves with key
				break;
			case 87: // w
				$('img').click(
				$('img').animate({top: "-=10px"}, 'fast'));
				break;
			case 68:  // d
				$('img').click(
				$('img').animate({left: "+=10px"}, 'fast'));
				break;
			default:
				break;
		}
	});
});
