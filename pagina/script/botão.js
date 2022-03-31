var bt1 = document.querySelector('#b1');
var div1 = document.querySelector('.dp');

bt1.addEventListener('click', function() {
	if(div1.style.display === 'block'){
		div1.style.display = 'none';
	}else{
		div1.style.display = 'block';
	}
});

var bt2 = document.querySelector('#b2');
var div2 = document.querySelector('.end');

bt2.addEventListener('click', function() {
	if(div2.style.display === 'block'){
		div2.style.display = 'none';
	}else{
		div2.style.display = 'block';
	}
});

var bt3 = document.querySelector('#b3');
var div3 = document.querySelector('.con');

bt3.addEventListener('click', function() {
	if(div3.style.display === 'block'){
		div3.style.display = 'none';
	}else{
		div3.style.display = 'block';
	}
});

var bt4 = document.querySelector('#b4');
var div4 = document.querySelector('.form');

bt4.addEventListener('click', function() {
	if(div4.style.display === 'block'){
		div4.style.display = 'none';
	}else{
		div4.style.display = 'block';
	}
});