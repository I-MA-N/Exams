const form = document.querySelector("form");
const inputs = document.querySelectorAll("input");

form.addEventListener("submit", (e) => {
    e.preventDefault();

    let validated = true;
    for (let i = 0; i < inputs.length - 1; i++) {
        if (inputs[i].value == "") {
            validated = false;
        }
    }

    if (validated) {
        form.submit();
    } else {
        alert('Please fill all the fillds!');
    }
})