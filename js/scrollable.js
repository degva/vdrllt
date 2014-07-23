/* This script makes the scroll thing
 * work
 * @author Diego Vargas
 */

$(document).ready(function() {
	var up_left = $('a.prev');
	var down_right = $('a.next');
	var size = $('div.scroll.0').height();
	var up_down = false;
	var objs = $('.items div.scroll');
	var movePositive = false;

	if ($('.scrollable').hasClass('up-down')) {
		up_down = true;
	}

	function move() {
		var actual_top = parseInt(objs.css('top'));
		var final_amount = 0;

		if (up_down == true && movePositive == true) {
			// In the case we want to move up_down
			final_amount = actual_top + size;
		} else if (up_down == true && movePositive == false) {
			// In case we want to move left_right
			final_amount = actual_top - size;
		}

		objs.css('top', final_amount);
	}

	function change() {
		var actop = parseInt(objs.css('top'));
		if (up_down == true) {
			if (actop != 0) {
				$('a.prev').removeClass('disabled');
			} else {
				$('a.prev').addClass('disabled');
			}
			if (actop == (-1) * (size * (objs.length - 1))) {
				$('a.next').addClass('disabled');
			} else {
				$('a.next').removeClass('disabled');
			}
		}
	}

	up_left.on('click', function() {
		if (!$(this).hasClass('disabled')) {
			movePositive = true;
			move();
			change();
		};
	});

	down_right.on('click', function() {
		if (!$(this).hasClass('disabled')) {
			movePositive = false;
			move();
			change();
		};
	});

});
