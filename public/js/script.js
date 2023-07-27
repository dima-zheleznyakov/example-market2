let menuBtn = document.querySelector('.menu-btn');
let menu = document.querySelector('.header-menu-mobile');
menuBtn.addEventListener('click', function(){
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');
})

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})
// // Функция для обновления общей стоимости
// function updateTotalPrice(productId) {
//     const quantityInput = document.getElementById('quantity_' + productId);
//     const totalPriceElement = document.getElementById('total-price_' + productId);
//     const price = parseFloat(quantityInput.getAttribute('data-price'));
//     const quantity = parseInt(quantityInput.value);
//
//     const totalPrice = price * quantity;
//     totalPriceElement.textContent = totalPrice.toFixed(0);
// }
//
// // Добавляем обработчик события input для каждого input с классом quantity
// const quantityInputs = document.querySelectorAll('.quantity');
// quantityInputs.forEach(input => {
//     const productId = input.getAttribute('id').split('_')[1];
//     input.addEventListener('input', function() {
//         updateTotalPrice(productId);
//     });
//     updateTotalPrice(productId);
// });
// Функция для обновления общей стоимости
function updateTotalPrice(productId) {
    const quantityInput = document.getElementById('quantity_' + productId);
    const totalPriceElement = document.getElementById('total-price_' + productId);
    const price = parseFloat(quantityInput.getAttribute('data-price'));
    const quantity = parseInt(quantityInput.value);

    const totalPrice = price * quantity;
    totalPriceElement.textContent = totalPrice.toFixed(0);

    // Обновляем общую сумму заказа
    updateTotalCartPrice();
}

// Функция для обновления общей суммы заказа
function updateTotalCartPrice() {
    const totalPrices = document.querySelectorAll('.total-price');
    let totalCartPrice = 0;

    totalPrices.forEach(totalPrice => {
        totalCartPrice += parseFloat(totalPrice.textContent);
    });

    const priceCart = document.getElementById('total-cart-price');
    priceCart.textContent = totalCartPrice.toFixed(0);
}

// Добавляем обработчик события input для каждого input с классом quantity
const quantityInputs = document.querySelectorAll('.quantity');
quantityInputs.forEach(input => {
    const productId = input.getAttribute('id').split('_')[1];
    input.addEventListener('input', function() {
        updateTotalPrice(productId);
    });
    updateTotalPrice(productId);
});







