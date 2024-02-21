// Import Ajax class
import Ajax from "/static/js/common/Ajax.js";

// Button selector
const buttonList = document.querySelectorAll('.ajax-button');
const ajaxUrl = "index.php?a=async/ajax-update";

buttonList.forEach(button => {
    button.addEventListener('click', () => {
        // Get data attributes
        const idData = button.getAttribute('data-id');
        const actionData = button.getAttribute('data-action');
        const tableData = button.getAttribute('data-table');

        Ajax.updateRequest(idData, actionData, tableData, ajaxUrl).then(response => {
            if (response.success) {
                const parentElement = button.closest('.parent-element');
                parentElement.remove();
            } else {
                const ajaxFailModalEl = document.querySelector('.ajax-fail-modal');
                let modal = new bootstrap.Modal(ajaxFailModalEl);
                modal.show();
            }
        });
    });
});


// Files input validation
const fileInputEl = document.querySelector('#addVehicle #picture');
const formInputEl = document.querySelector('#addVehicle');

fileInputEl.addEventListener('change', function(e) {
    const fichier = e.target.files[0];
    if (!fichier) return;

    // Extension validation
    const extension = fichier.name.split('.').pop().toLowerCase();
    if (extension !== 'webp') {
        showAlert('extension');
        e.target.value = '';
        return;
    }

    // Dimensions validation
    const reader = new FileReader();
    reader.onload = function(i) {
        const img = new Image();
        img.onload = function() {
            if (img.width !== 840 || img.height !== 700) {
                showAlert('dimensions');
                e.target.value = '';
            }
        };
        img.src = i.target.result;
    };
    reader.readAsDataURL(fichier);

    showAlert();
});

function showAlert(message) {
    const extAlerte = document.querySelector('#ext-invalid');
    const dimAlerte = document.querySelector('#dim-invalid');

    if (!extAlerte.classList.contains('d-none')) extAlerte.classList.add('d-none');
    if (!dimAlerte.classList.contains('d-none')) dimAlerte.classList.add('d-none');

    if (message === 'extension') {
        extAlerte.classList.remove('d-none');
    } else if (message === 'dimensions') {
        dimAlerte.classList.remove('d-none');
    }
}


// Star rating input
import Functions from '/static/js/common/Functions.js';
Functions.starFormRating();
