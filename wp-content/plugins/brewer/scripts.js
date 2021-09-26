async function fetchBrew(method, url) {
    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error('Failed to fetch address. Please try again!');
        }
        const data = await response.json();
        if (data.error_message) {
            throw new Error(data.error_message);
        }
        console.log(data);
    } catch (error) {
        alert(error.message);
        console.log(error.response);
    }
}


fetchBrew('GET', 'https://api.openbrewerydb.org/breweries');