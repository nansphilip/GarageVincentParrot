/**
 * Helpers class provides static utility methods for common tasks such as formatting phone numbers and numbers.
 */
export default class Helpers {

    /**
    * Formats the input value as a phone number with spaces.
    * The function listens for input events on a specified input field and formats its value as a phone number.
    * The phone number is formatted with spaces separating groups of digits.
    *
    * @param {string} selector - The CSS selector for the input element to be formatted as a phone number.
    */
    static phoneNumber(selector) {
        const phoneInput = document.querySelector(selector);

        phoneInput.addEventListener('input', () => {

            // Replaces all non-digit characters with an empty string
            let value = phoneInput.value.replace(/\D/g, '');

            // Limits the length of the phone number to 10 digits
            if (value.length === 11) value = value.slice(0, 10);

            // Formats the phone number
            if (value.length === 1) value = value.replace(/(\d{1})/, '$1');
            if (value.length === 2) value = value.replace(/(\d{2})/, '$1');
            if (value.length === 3) value = value.replace(/(\d{2})(\d{1})/, '$1 $2');
            if (value.length === 4) value = value.replace(/(\d{2})(\d{2})/, '$1 $2');
            if (value.length === 5) value = value.replace(/(\d{2})(\d{2})(\d{1})/, '$1 $2 $3');
            if (value.length === 6) value = value.replace(/(\d{2})(\d{2})(\d{2})/, '$1 $2 $3');
            if (value.length === 7) value = value.replace(/(\d{2})(\d{2})(\d{2})(\d{1})/, '$1 $2 $3 $4');
            if (value.length === 8) value = value.replace(/(\d{2})(\d{2})(\d{2})(\d{2})/, '$1 $2 $3 $4');
            if (value.length === 9) value = value.replace(/(\d{2})(\d{2})(\d{2})(\d{2})(\d{1})/, '$1 $2 $3 $4 $5');
            if (value.length === 10) value = value.replace(/(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/, '$1 $2 $3 $4 $5');

            // Sets the formatted value to the input
            phoneInput.value = value;
        });
    };

    /**
     * Formats the input value as a number with spaces every three digits.
     * The function listens for input events on a specified input field and formats its value according to French number formatting, which includes space as a thousand separator.
     *
     * @param {string} selector - The CSS selector for the input element to be formatted with spaces every three digits.
     */
    static formatNumber(selector) {
        const numberInput = document.querySelector(selector);

        numberInput.addEventListener('input', () => {

            // Replaces all non-digit characters with an empty string
            let value = numberInput.value.replace(/\D/g, '');

            // Formats the number with a space every 3 digits
            value = Number(value).toLocaleString('fr-FR');

            // Sets the formatted value to the input
            numberInput.value = value;
        });
    };
};