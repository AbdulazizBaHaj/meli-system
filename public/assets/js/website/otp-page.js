document.querySelector("#otpCode").addEventListener("blur", validateOtpCode);

function validateOtpCode() {
    var regex = new RegExp(/^\d{5}$/);

    const otpCode = document.querySelector("#otpCode");

    if (regex.test(otpCode.value)) {
        otpCode.classList.remove("is-invalid");
        return true;
    } else {
        otpCode.classList.add("is-invalid");
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
                if (!form.checkValidity() || !validateOtpCode()) {
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
