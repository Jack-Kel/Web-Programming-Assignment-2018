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
