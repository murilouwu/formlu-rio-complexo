var bt1 = document.querySelector('#b1');
var div1 = document.querySelector('.atributo');
var bt2 = document.querySelector('#b2');
var div2 = document.querySelector('.local');
var bt3 = document.querySelector('#b3');
var div3 = document.querySelector('.skils');

bt1.addEventListener('click', function() {
	div1.style.display = 'flex';
	div2.style.display = 'none';
	div3.style.display = 'none';
});
bt2.addEventListener('click', function() {
	div1.style.display = 'none';
	div2.style.display = 'flex';
	div3.style.display = 'none';
});
bt3.addEventListener('click', function() {
	div1.style.display = 'none';
	div2.style.display = 'none';
	div3.style.display = 'block';
});