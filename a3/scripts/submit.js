function submit_form() {
	if (document.getElementById('input').value > 0 && document.getElementById('input').value % 1 == 0) {
		return true;
	} else {
		return false;
	}
}

function cardCheck() {
	var img = document.getElementById('ccimg');
	if (document.getElementById('ccnum').value.charAt(0) == 4){
		img.style.visibility = 'visible';
	}else {
		img.style.visibility = 'hidden';
	}
}
