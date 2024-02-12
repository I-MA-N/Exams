const inputs = document.querySelectorAll("input");
const form = document.querySelector("form");
const btn = document.getElementById("btn");
const errElem = document.getElementById("error");

btn.addEventListener("click", () => {
    let validated = false;
    for (let i = 1; i < inputs.length - 1; i++) {
        if (inputs[i].value != "") {
            validated = true;
            break;
        }  
    }

    if (validated) {
        form.submit();
    } else {
        errElem.innerHTML = "Please fill at least 1 field!";
    }
})