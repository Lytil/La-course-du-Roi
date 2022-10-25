
const image = document.getElementById('carousel');
const droite = document.getElementById('right-btn');
const gauche = document.getElementById('left-btn');

// Images are from unsplash
let pictures = ['https://www.google.com/url?sa=i&url=https%3A%2F%2Ffr.wikipedia.org%2Fwiki%2FImage&psig=AOvVaw1V9ieeMAResl3HpuUjJso-&ust=1666790738030000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCNicpcC9-_oCFQAAAAAdAAAAABAE']
image.src = pictures[0];
let position = 0;

const moveRight = () => {
	if (position >= pictures.length - 1) {
    	position = 0
    	img.src = pictures[position];
    	return;
	}
	image.src = pictures[position + 1];
	position++;
}

const moveLeft = () => {
	if (position < 1) {
    	position = pictures.length - 1;
    	image.src = pictures[position];
    	return;
	}
	image.src = pictures[position - 1];
	position--;
}

droite.addEventListener("click", moveRight);
gauche.addEventListener("click", moveLeft);

setInterval(function(){
    if (position >= pictures.length - 1){
   	 position = 0
   	 image.src = pictures[position];
   	 return;
    }
    image.src = pictures[position + 1];
    position++;    
}, 3000)
