/* This file is to resize the background image.
 * For now it's done
 * @autor Diego Vargas
 */

$(window).load(function() {

	var win = $(window);

	var win_w = win.width(),
			win_h = win.height(),
			$bg = $('#bg');

	$bg.css('width', win_w);

	var bg_h = $bg.height();
	var ntop = (-1) * ((bg_h - win_h) / 2);

	$bg.css('top', ntop);

});
