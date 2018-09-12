function submit_form() {
	if (document.getElementById('input').value > 0 && document.getElementById('input').value % 1 == 0) {
		return true;
	} else {
		return false;
	}
}
