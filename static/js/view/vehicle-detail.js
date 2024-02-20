const insertVehicle = (data) => {
    const container = document.querySelector("#insert-ajax");

    container.innerHTML = "";

    if (data === null) {
        const emptyResult = document.createElement('p');
        emptyResult.className = "col-12 text-center fs-3 fw-semibold my-3";
        emptyResult.innerHTML = "Aucun résultat";

        container.appendChild(emptyResult);
    } else {

        data.forEach(element => {

            element.price = Helpers.formatNumber(element.price);
            element.mileage = Helpers.formatNumber(element.mileage);

            const cardElement = document.createElement('div');
            cardElement.className = "col-6 col-lg-3";

            cardElement.innerHTML = `
                <div class="card shadow-sm border border-0">
                    <img class="card-img-top" src="/static/img/vehicle/${element.imagePath}" alt="Photo ${element.brand} ${element.model}">
                    <div class="card-body p-2 d-flex flex-column justify-content-between">
                        <h5 class="card-title">${element.brand} ${element.model}</h5>
                        <ul class="card-text list-unstyled mb-1">
                            <li>${element.entry_year}</li>
                            <li>${element.mileage} km</li>
                        </ul>
                        <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
                            <p class="fs-5 fw-semibold mb-0">${element.price} €</p>
                            <a href="index.php?p=quote-request&vehicle=${element.id}" class="btn btn-primary stretched-link">Devis</a>
                        </div>
                    </div>
                </div>
            `;

            container.appendChild(cardElement);
        });
    }
}

const setPlaceholder = () => {
    const container = document.querySelector("#insert-ajax");
    container.innerHTML = "";

    for (let i = 0; i < 7; i++) {
        const cardPlaceholder = document.createElement('div');
        cardPlaceholder.className = "col-6 col-lg-3";

        cardPlaceholder.innerHTML = `
            <div class="card border shadow-sm border-0" aria-hidden="true">
                <svg class="bd-placeholder-img card-img-top" style="height: 12rem;">
                    <rect width="100%" height="100%" fill="var(--bs-gray-500)"></rect>
                </svg>
                <div class="card-body p-2">
                    <h5 class="card-title placeholder-glow">
                        <span class="placeholder col-6"></span>
                    </h5>
                    <p class="card-text placeholder-glow">
                        <span class="placeholder col-6"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-3"></span>
                    </p>
                    <p class="card-text placeholder-glow d-flex justify-content-between align-items-center">
                        <span class="placeholder col-4 fs-5"></span>
                        <a class="btn btn-primary disabled placeholder col-3" aria-disabled="true"></a>
                    </p>
                </div>
            </div>
        `;

        container.appendChild(cardPlaceholder);
    }
};

const ajaxFormRequest = (formEl, url) => {

    Ajax.fetchRequest(formEl, url).then(response => {
        if (response.success) {
            insertVehicle(response.data);
        } else {
            const modalEl = document.querySelector('.modal');
            let modal = new bootstrap.Modal(modalEl);
            modal.show();
        }
    });
}

// Import Ajax class
import Ajax from "/static/js/common/Ajax.js";
import Helpers from "/static/js/common/Helpers.js";

// Fetches vehicles cards
const formEl = document.querySelector("#filter-form");

window.addEventListener('load', () => {
    setPlaceholder();
    // setTimeout is used to simulate real loading time
    setTimeout(() => ajaxFormRequest(formEl, "index.php?a=async/ajax-vehicle"), 500)
});
formEl.addEventListener('change', () => {
    setPlaceholder();
    // setTimeout is used to simulate real loading time
    setTimeout(() => ajaxFormRequest(formEl, "index.php?a=async/ajax-vehicle"), 300)
});



// Match brand and models
const brandEl = document.querySelector("#brand");
const modelEl = document.querySelector("#model");
const brandModelList = JSON.parse(sessionStorage.getItem('brandModelList'));

const matchModels = () => {
    const brandValue = brandEl.value;

    if (brandValue === "") {
        Array.from(modelEl.options).forEach(optionEl => {
            optionEl.style.display = "";
        });
    } else {

        const modelList = brandModelList[brandValue];

        const optionList = Array.from(modelEl.options)

        optionList.forEach(optionEl => {
            if (optionEl.value == "" || modelList.includes(optionEl.value)) {
                optionEl.style.display = "";
            } else {
                optionEl.style.display = "none";
                optionEl.selected = false;
            }
        });
    }
}

brandEl.addEventListener('change', () => matchModels());

const matchBrand = () => {
    const modelValue = modelEl.value;

    if (modelValue === "") {
        Array.from(brandEl.options).forEach(optionEl => {
            optionEl.selected = false;
        });
    } else {

        Object.keys(brandModelList).forEach(brand => {
            if (brandModelList[brand].includes(modelValue)) {
                console.log(brand);
                brandEl.querySelector(`option[value="${brand}"]`).selected = true;
            }
        });
    }
}

modelEl.addEventListener('change', () => matchBrand());




// Reset form
const resetForm = document.querySelector("#reset-btn");

resetForm.addEventListener('click', () => {
    formEl.reset();
    matchModels();
    ajaxFormRequest(formEl, "index.php?a=async/ajax-vehicle");
});