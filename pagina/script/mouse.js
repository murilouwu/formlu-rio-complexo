var mo = document.querySelector('.mouse');

document.addEventListener('mousemove', function(m){
	var x = m.pageX+5;
	var y = m.pageY;

	mo.style.left = x +'px';
	mo.style.top = y +'px';
});