$(document).ready(function() {
    $(document).onClick(function(key) {
        switch(parseInt(key.which,10)) {
			case 65: // a
				$('img').animate({left: "-=10px"}, 'fast');// move with key a
				break;
			case 83: // s
				$('img').animate({top: "+=10px"}, 'fast');// moves with key
				break;
			case 87: // w
				$('img').animate({top: "-=10px"}, 'fast');
				break;
			case 68:  // d
				$('img').animate({left: "+=10px"}, 'fast');
				break;
			default:
				break;
		}
	});
});