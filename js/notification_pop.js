var box  = document.getElementById('box_noti');
var down = false;


function Notifi(){
	if (down) {
		box.style.height  = '0px';
		box.style.opacity = 0;
		down = false;
	}else {
		box.style.height  = 'auto';
		box.style.opacity = 1;
		down = true;
	}
} 

