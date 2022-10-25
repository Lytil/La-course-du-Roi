
const image = document.getElementById('carousel');
const droite = document.getElementById('right-btn');
const gauche = document.getElementById('left-btn');

// Images are from unsplash
let pictures = ['https://s2.qwant.com/thumbr/0x380/c/f/c6e01af900a88c81bfafd8411512cf0764256c9069a1c4d8f93dab61caebf7/PNL-2020.jpg?u=https%3A%2F%2Fmedia.24matins.fr%2F2019%2F11%2FPNL-2020.jpg&q=0&b=1&p=0&a=0', 'https://s2.qwant.com/thumbr/0x380/e/e/b5105b1a2fda174e148e40c9d7d3690037629f5e2310ecd471600ca67ceaa7/2bff3d79996149edafe2d7339ffd348c.960x960x1.jpg?u=https%3A%2F%2Fimages.rapgenius.com%2F2bff3d79996149edafe2d7339ffd348c.960x960x1.jpg&q=0&b=1&p=0&a=0', 'https://s2.qwant.com/thumbr/300x300/7/3/d3fe69962ea1ef253c4e5c0a4374781cc9088e75a5559c9b8e7883fdd68086/th.jpg?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.vkdGoGiAiOpqEPZa_aG-wQAAAA%26pid%3DApi&q=0&b=1&p=0&a=0', 'https://s1.qwant.com/thumbr/400x400/3/2/ca9504fa8cfd4ee0f574c26deff2f47a812b1678f6601b645afc8f9b79ae76/th.jpg?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.l1nai0BpZpdpFABVaIq_vQAAAA%26pid%3DApi&q=0&b=1&p=0&a=0'];

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
