const minusButton = document.getElementById('minus');
const plusButton = document.getElementById('plus');
const inputField = document.getElementById('input');

minusButton.addEventListener('click', function () {
	event.preventDefault();
	const currentValue = Number(inputField.value) || 0;
	inputField.value = currentValue - 1;
});

plusButton.addEventListener('click', function () {
	event.preventDefault();
	const currentValue = Number(inputField.value) || 0;
	inputField.value = currentValue + 1;
});

function updateTotal(p1){

	var p2 = p1;
	document.getElementById("subtotal").value = p2*document.getElementById("input").value;
}

function updateTotalM(p1){

	var p2 = p1;
	document.getElementById("subtotal").value = p2*document.getElementById("input").value + p2;
}

function updateTotalP(p1){

	var p2 = p1;
	document.getElementById("subtotal").value = p2*document.getElementById("input").value - p2;
}


