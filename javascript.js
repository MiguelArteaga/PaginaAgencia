var imagenes1 = ['img1/img1.jpg','img1/img2.jpg','img1/img3.jpg','img1/img4.jpg','img1/img5.jpg'];
var imagenes2 = ['img2/img1.jpg','img2/img2.jpg','img2/img3.jpg','img2/img4.jpg','img2/img5.jpg'];
cont1=0;
cont2=0;

function album1(contenedor) {
	contenedor.addEventListener('click',e =>{
		let	atras = contenedor.querySelector('.atras1');
			adelante = contenedor.querySelector('.adelante1');
			img = document.getElementById('imagen1');
			tgt = e.target;

		if (tgt == atras){
			if (cont1>0) {
				img.src = imagenes1[cont1-1];
				cont1--;
			}
			else{
				img.src=imagenes1[imagenes1.length - 1];
				cont1=imagenes1.length -1;
			}
		}
		else if (tgt == adelante){
			if (cont1<imagenes1.length-1) {
				img.src=imagenes1[cont1+1];
				cont1++
			}
			else{
				img.src=imagenes1[0];
				cont1=0;
			}
		}

	});
}

document.addEventListener("DOMContentLoaded",()=>{
	let contenedor1=document.querySelector('.contenedor1');
	album1(contenedor1);
})

function album2(contenedor) {
	contenedor.addEventListener('click',e =>{
		let	atras = contenedor.querySelector('.atras2');
			adelante = contenedor.querySelector('.adelante2');
			img = document.getElementById('imagen2');
			tgt = e.target;

		if (tgt == atras){
			if (cont2>0) {
				img.src = imagenes2[cont2-1];
				cont2--;
			}
			else{
				img.src=imagenes2[imagenes2.length - 1];
				cont2=imagenes2.length -1;
			}
		}
		else if (tgt == adelante){
			if (cont2<imagenes2.length-1) {
				img.src=imagenes2[cont2+1];
				cont2++
			}
			else{
				img.src=imagenes2[0];
				cont2=0;
			}
		}

	});
}

document.addEventListener("DOMContentLoaded",()=>{
	let contenedor2=document.querySelector('.contenedor2');
	album2(contenedor2);
})