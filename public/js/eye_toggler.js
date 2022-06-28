function toggler() {
    let icon = document.querySelector('#pwd');
    if (icon.classList.contains('fa-eye')) {
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else if (icon.classList.contains('fa-eye-slash')) {
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
}

function myFunction(x) {
    toggler();
    let y = document.getElementById("password");
    if (y.type === "text") {
        y.type = "password";
    } else {
        y.type = "text";
    }
}
