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


import Functions from '/static/js/common/Functions.js';
Functions.starFormRating();