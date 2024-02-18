export default class Ajax {

    static fetchForm(selector, type) {
        const container = document.querySelector(selector);

        const formData = new FormData();
        formData.append('type', selector);

        this.sendForm(formData, selector, type);
    }

    static async sendForm(formData, selector, type) {
        try {
            const response = await fetch("/includes/AjaxForm.php", {
                method: "POST",
                body: formData
            });

            const data = await response.json();
            this.insertOption(data, selector, type);
        }
        catch (erreur) {
            console.error("Erreur :", erreur);
        }
    }

    static insertOption(data, selector, type) {
        const container = document.querySelector(selector);

        if (type === 'option') {

            if (selector === "#brand") {
                container.innerHTML = '<option value="" selected>Marque</option>';
            } else if (selector === "#model") {
                container.innerHTML = '<option value="" selected>Modèle</option>';
            }

            data.forEach(element => {
                const option = document.createElement('option');

                option.textContent = element;

                container.appendChild(option);
            });
        }
        else if (type === 'range') {

            data = data[0];

            container.min = `${data.min}`;
            container.max = `${data.max}`;

            if (selector === "#mileage-min" || selector === "#year-min" || selector === "#price-min") {
                container.placeholder = `${data.min}`;
            }
            else if (selector === "#mileage-max" || selector === "#year-max" || selector === "#price-max") {
                container.placeholder = `${data.max}`;
            }
        }
    }

    // ----- Vehicle cards -----

    static fetchVehicle(formEl) {
        const formData = new FormData(formEl);

        this.send(formData);
    }

    static async send(formData) {
        try {
            const response = await fetch("/includes/AjaxVehicle.php", {
                method: "POST",
                body: formData,
            });

            const data = await response.json();
            this.insertVehicle(data);
        }
        catch (erreur) {
            console.error("Erreur :", erreur);
        }
    }

    static insertVehicle(data) {
        const container = document.querySelector("#insert-ajax");

        container.innerHTML = "";

        if (data === null) {
            const emptyResult = document.createElement('p');
            emptyResult.className = "col-12 text-center fs-3 fw-semibold my-3";
            emptyResult.innerHTML = "Aucun résultat";

            container.appendChild(emptyResult);
        } else {

            data.forEach(element => {

                const cardElement = document.createElement('div');
                cardElement.className = "col-6 col-lg-3 px-0 card";

                cardElement.innerHTML = `
                    <img class="card-img-top" src="/static/img/vehicle/${element.imagePath}" alt="Photo ${element.brand} ${element.model}">
                    <div class="card-body p-2 d-flex flex-column justify-content-between">
                        <h5 class="card-title">${element.brand} ${element.model}</h5>
                        <ul class="card-text list-unstyled mb-1">
                            <li>${element.entry_year}</li>
                            <li>${element.mileage} km</li>
                        </ul>
                        <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
                            <p class="fs-5 fw-semibold mb-0">${element.price} €</p>
                            <a href="index.php?p=quote-request&id=${element.id}" class="btn btn-primary">Devis</a>
                        </div>
                    </div>
                `;

                container.appendChild(cardElement);
            });
        }
    }
}