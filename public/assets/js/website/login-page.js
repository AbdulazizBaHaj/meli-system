document
    .querySelector("#phoneNum")
    .addEventListener("blur", validatePhoneNumber);

function validatePhoneNumber() {
    var regex = new RegExp(
        /^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/
    );

    const phoneNum = document.querySelector("#phoneNum");

    if (regex.test(phoneNum.value)) {
        phoneNum.classList.remove("is-invalid");
        return true;
    } else {
        phoneNum.classList.add("is-invalid");
        return false;
    }
}

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    "use strict";

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll(".needs-validation");

    // Loop over them and prevent submission
    Array.from(forms).forEach((form) => {
        form.addEventListener(
            "submit",
            (event) => {
                if (!form.checkValidity() || !validatePhoneNumber()) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    form.classList.add("was-validated");
                }
            },
            false
        );
    });
})();
