//atualizando banners imagens
var banners = ["assets/img/slides/slider.jpg", "assets/img/slides/banner1.jpg","assets/img/slides/banner.jpg"];
var bannerAtual = 0;


function trocaBanner() {
    bannerAtual = (bannerAtual + 1) % 3; //cria contador para ler imgs 1 por 1
    //bannerAtual = Math.floor((Math.random() * 3)+1);
    document.querySelector('.slider').src = banners[bannerAtual];

}
var timer = setInterval(trocaBanner,3000);

function Pause(){
	var controle = document.querySelector('.pause');

	clearInterval(timer);
	document.querySelector('.pause').style.visibility = 'hidden';
	document.querySelector('.play').style.visibility = 'visible';
}

function Play(){
	var controle = document.querySelector('.play');

	timer = setInterval(trocaBanner,3000);
	document.querySelector('.play').style.visibility = 'hidden';
	document.querySelector('.pause').style.visibility = 'visible';
}

