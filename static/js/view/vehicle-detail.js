// Import Ajax class
import Ajax from "/static/js/common/Ajax.js";



// Sets options
const optionContainer = ['#brand', '#model'];

optionContainer.forEach((selector) => {
    window.addEventListener('load', () => Ajax.fetchForm(selector, 'option'));
});


// Sets min, max and placeholder values
const inputList = ['#mileage-min', '#mileage-max', '#year-min', '#year-max', '#price-min', '#price-max'];

inputList.forEach((selector) => {
    window.addEventListener('load', () => Ajax.fetchForm(selector, 'range'));
});



// Fetches vehicles cards
const formEl = document.querySelector('#filters');

window.addEventListener('load', () => Ajax.fetchVehicle(formEl));
formEl.addEventListener('change', () => Ajax.fetchVehicle(formEl));