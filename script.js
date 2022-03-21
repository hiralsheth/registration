document.addEventListener("DOMContentLoaded", function () {
    var elements = document.getElementsByTagName("input");
    var errorText = document.getElementById("error-text");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function (e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                errorText.style.display = 'initial';
                e.target.setCustomValidity("This field cannot be left blank");
            }
        };
        elements[i].oninput = function (e) {
            e.target.setCustomValidity("");
        };
    }
})