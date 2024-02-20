export default class Ajax {

    static async fetchRequest(data, url) {
        try {

            const formData = new FormData(data);

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

    static async reviewApprovementRequest(idReview, action, url) {
        try {

            const formData = new FormData();

            formData.append("idReview", idReview);
            formData.append("action", action);

            formData.forEach((value, key) => {
                console.log(`${key}:`, value);
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