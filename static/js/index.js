/**
 * 
 * form submission
 */
const subscribeForm = document.querySelector("#subscribe-form");
subscribeForm.addEventListener("submit", (e) => {
    e.preventDefault();
 

    const formData = new FormData(subscribeForm);
    const url = "/subscribe/new";
    axios
        .post(url, formData, {
            headers: {
                "Content-Type": "multipart/form-data",
            },
        })
        .then((res) => {
            console.log(res);
        })
        .catch((err) => {
            console.log(err);
        });

});