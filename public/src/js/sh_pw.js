const sh = document.getElementById("shpw");
const pw = document.getElementById("password");
const show = document.getElementById("show");
const hide = document.getElementById("hide");
sh.addEventListener("click", function () {
    if (pw.type === "password") {
        pw.type = "text";
        show.style.display = "inline-block";
        hide.style.display = "none";
    } else {
        pw.type = "password";
        show.style.display = "none";
        hide.style.display = "inline-block";
    }
});

const shConfirmation = document.getElementById("shpw_confirmation");
const pwConfirmation = document.getElementById("password-confirm");
const showConfirmation = document.getElementById("show_confirmation");
const hideConfirmation = document.getElementById("hide_confirmation");
shConfirmation.addEventListener("click", function () {
    if (pwConfirmation.type === "password") {
        pwConfirmation.type = "text";
        showConfirmation.style.display = "inline-block";
        hideConfirmation.style.display = "none";
    } else {
        pwConfirmation.type = "password";
        showConfirmation.style.display = "none";
        hideConfirmation.style.display = "inline-block";
    }
});
