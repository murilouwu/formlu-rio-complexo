var bt1 = document.querySelector('#b1');
var cont1 = document.querySelector('.dp');

var bt2 = document.querySelector('#b2');
var cont2 = document.querySelector('.end');

var bt3 = document.querySelector('#b3');
var cont3 = document.querySelector('.con');

var bt4 = document.querySelector('#b4');
var cont4 = document.querySelector('.form');

bt1.addEventListener('click', function() {
	if(cont1.style.display === 'block'){
		cont1.style.display = 'none';
	}else{
		cont1.style.display = 'block';
	}
});

bt2.addEventListener('click', function() {
	if(cont2.style.display === 'block'){
		cont2.style.display = 'none';
	}else{
		cont2.style.display = 'block';
	}
});

bt3.addEventListener('click', function() {
	if(cont3.style.display === 'block'){
		cont3.style.display = 'none';
	}else{
		cont3.style.display = 'block';
	}
});

bt4.addEventListener('click', function() {
	if(cont4.style.display === 'block'){
		cont4.style.display = 'none';
	}else{
		cont4.style.display = 'block';
	}
});