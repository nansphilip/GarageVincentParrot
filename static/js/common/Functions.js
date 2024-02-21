export default class Functions {
    static starFormRating() {
        const radioInputList = document.querySelectorAll('#radio-rating input[type="radio"]');

        radioInputList.forEach((radioInputEl) => {
            radioInputEl.addEventListener('change', () => {

                const starNumber = radioInputEl.id.split('-')[1];

                for (let i = 1; i <= starNumber; i++) {
                    const labelEl = document.querySelector(`#radio-rating label[for="star-${i}"] i`);
                    labelEl.classList.remove('bi-star');
                    labelEl.classList.add('bi-star-fill');
                }

                for (let i = 5; i > starNumber; i--) {
                    const labelEl = document.querySelector(`#radio-rating label[for="star-${i}"] i`);
                    labelEl.classList.add('bi-star');
                    labelEl.classList.remove('bi-star-fill');
                }
            });
        });
    }
}