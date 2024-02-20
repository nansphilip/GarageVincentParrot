const ajaxApprovementRequest = (idReview, action, url) => {

    Ajax.reviewApprovementRequest(idReview, action, url).then(response => {
        if (response.success) {
            // Show success message
        } else {
            const modalEl = document.querySelector('.modal');
            let modal = new bootstrap.Modal(modalEl);
            modal.show();
        }
    });
}

// Import Ajax class
import Ajax from "/static/js/common/Ajax.js";

let approveButtonList = document.querySelectorAll('.approve-button');
let denyButtonList = document.querySelectorAll('.deny-button');

approveButtonList.forEach(approveButton => {
    approveButton.addEventListener('click', () => {
        const idReview = approveButton.getAttribute('data-id');
        ajaxApprovementRequest(idReview, 'approve', "index.php?a=async/ajax-review");
    });
});

denyButtonList.forEach(denyButton => {
    denyButton.addEventListener('click', () => {
        const idReview = denyButton.getAttribute('data-id');
        ajaxApprovementRequest(idReview, 'deny', "index.php?a=async/ajax-review");
    });
});
