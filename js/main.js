$(document).ready(function() {
	var canvas = document.getElementById('footBck');
	var context = canvas.getContext('2d');
	context.fillStyle = 'yellow';

	var color1 = 'rgba(70,136,186,1)';
	var color2 = 'rgba(9,110,188,1)';

	var grd1 = context.createLinearGradient(0, 0, canvas.width, canvas.height);
	grd1.addColorStop(0, color1);
	grd1.addColorStop(1, color2);

	var grd2 = context.createLinearGradient(0, 0, canvas.width, canvas.height);
	grd2.addColorStop(0, color2);
	grd2.addColorStop(1, color1);

	context.beginPath();
	context.moveTo(0,0);
	context.lineTo(210,0);
	context.lineTo(500,250);
	context.lineTo(0,250);
	context.closePath();
	context.fillStyle = grd1;
	context.fill();

	context.beginPath();
	context.moveTo(209,0);
	context.lineTo(499,250);
	context.lineTo(750,250);
	context.lineTo(750,0);
	context.closePath();
	context.fillStyle = grd2;
	context.fill();
});
