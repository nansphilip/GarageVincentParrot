export default class Ajax {

    /**
     * Makes an async request.
     * @param {object} data Is a form element.
     * @param {string} url URL to request.
     * @example
     * fetchRequest("index.php?a=my-async-controller", {
     *     brand: "Citroen",
     *     model: "C4",
     * });
     */
    static async fetchRequest(data, url) {
        try {

            const formData = new FormData(data);

            formData.forEach((value, key) => {
                // console.log(`${key}:`, value);
            });

            const response = await fetch(url, {
                method: "POST",
                body: formData,
            });

            if (!response.ok) throw new Error("Network response was not ok.");

            try {
                return await response.json();
            } catch (error) {
                throw new Error("JSON response could not be parsed.");
            }
        }
        catch (error) {
            // TODO: show bootstrap alert
            console.error(`fetchRequest: ` + error);
        }
    }
}