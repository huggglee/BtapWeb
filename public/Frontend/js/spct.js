function increaseQuantity(inputId) {
  var quantityInput = document.getElementById(inputId);
  var currentQuantity = parseInt(quantityInput.value, 10);
  quantityInput.value = currentQuantity + 1;
}

function decreaseQuantity(inputId) {
  var quantityInput = document.getElementById(inputId);
  var currentQuantity = parseInt(quantityInput.value, 10);
  quantityInput.value = Math.max(currentQuantity - 1, 0);
}
