document.addEventListener("click", function (event) {
    // If the target of the event is not inside '.navbar-collapse'
    if (!event.target.closest(".navbar-collapse")) {
        // Collapse all '.navbar-collapse' elements
        var navbarCollapses = document.querySelectorAll(".navbar-collapse");
        navbarCollapses.forEach(function (navbarCollapse) {
            navbarCollapse.classList.remove("show");
        });
    }
});

var header = document.getElementById("progFilter");
var btns = header.getElementsByClassName("prog-filter");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active-filter");
        if (current.length > 0) {
            current[0].className = current[0].className.replace(
                " active-filter",
                ""
            );
        }
        this.className += " active-filter";
    });
}
// filter section
filterSelection("all");
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("card-filter");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("progFilter");
var btns = btnContainer.getElementsByClassName("prog-filter");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active-filter");
        current[0].className = current[0].className.replace(" active-filter", "");
        this.className += " active-filter";
    });
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("dropdownProgFilter");
var btns = btnContainer.getElementsByClassName("dropdown-menu-item");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active-filter");
        current[0].className = current[0].className.replace(" active-filter", "");
        this.className += " active-filter";
    });
}
