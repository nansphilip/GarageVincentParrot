const brandModelList = document.querySelectorAll('.brandModelMatch');
const brandModelMatch = [];

brandModelList.forEach((brandModel) => {
    const brand = brandModel.querySelector('.brand').innerHTML;
    const model = brandModel.querySelector('.model').innerHTML;
    
    brandModelMatch[brand] = model;
});

const brandSelect = document.querySelector('#brand');
const modelSelect = document.querySelector('#model');

brandSelect.addEventListener('change', (event) => {
    const selectedBrand = event.target.value;
    modelSelect.value = brandModelMatch[selectedBrand];
});