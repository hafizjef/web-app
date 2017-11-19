onload = function () {
    var e1 = document.getElementById('password');
    var e2 = document.getElementById('verify-password');

    e1.oninput = verifyPassword;
    e2.oninput = verifyPassword;

    e1.onpropertychange = e1.oninput; // for IE8
    e2.onpropertychange = e2.oninput; // for IE8
}
function verifyPassword(){
    var password = document.getElementById('password');
    var vpassword = document.getElementById('verify-password');

    var status = document.getElementById('password-verify-status');

    while (status.firstChild) {
        status.removeChild(status.firstChild);
    }

    if (password.value === vpassword.value) {
        var success = document.createElement("p");
        success.setAttribute("class", "success");
        success.appendChild(document.createTextNode("Password matched!"));
        status.appendChild(success);
        return true;

    } else if (password.value.length != 0 && password.value != vpassword.value) {
        var success = document.createElement("p");
        success.setAttribute("class", "error");
        success.appendChild(document.createTextNode("Password mismatched!"));
        status.appendChild(success);
        return false;
    }

    return false;
}

function verifyBeforeSubmit() {
    var password = document.getElementById('password');
    var vpassword = document.getElementById('verify-password');

    if (password.value === vpassword.value) {
        return true;

    } else {
        password.select();
        password.focus();
        return false;
    }
}