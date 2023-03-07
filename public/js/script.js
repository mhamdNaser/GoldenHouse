// Regular Expression For --REGISTER--
let pattern = "^[a-zA-Z ]*$";
let regPass =
    "^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])([a-zA-Z0-9@$!%*?&]{12,32}$)";
let regPass1 =
    "^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])([a-zA-Z0-9@$!%*?&]{8,12}$)";
let regPass2 = "^(?=.*[a-z])([a-zA-Z0-9]{8})";
let regmail = "^[a-z A-Z 0-9 _ .]+@([a-z]+).([a-z]{2,3})$";
let regphone = "^([0-9]{10})$";

let fname = document.getElementById("fname");
let lname = document.getElementById("lname");
let mail = document.getElementById("email");
let phone = document.getElementById("phone");
let pass = document.getElementById("password");
let repass = document.getElementById("conf-password");
let btnsubmit = document.getElementById("submit");

checkfname = () => {
    if (fname.value.match(pattern)) {
        document.getElementById("fnerror").innerHTML = "&thinsp;";
    } else {
        document.getElementById("fnerror").innerHTML =
            "Please Use Letters Only";
    }
};

checklname = () => {
    if (lname.value.match(pattern)) {
        document.getElementById("lnerror").innerHTML = "&thinsp;";
    } else {
        document.getElementById("lnerror").innerHTML =
            "Please Use Letters Only";
    }
};

checkemail = () => {
    if (mail.value.match(regmail)) {
        document.getElementById("mailerror").innerHTML = "&thinsp;";
    } else {
        document.getElementById("mailerror").innerHTML =
            "Your E-mail Not Correct";
    }
};

checkphone = () => {
    if (phone.value.match(regphone)) {
        document.getElementById("phonerror").innerHTML = "&thinsp;";
    } else {
        document.getElementById("phonerror").innerHTML =
            "Only 10 Number Please";
    }
};

checkpass = () => {
    if (pass.value.match(regPass)) {
        document.getElementById("passerror").innerHTML = "password is strong";
        document.getElementById("passerror").style.color = "green";
    } else if (pass.value.match(regPass1)) {
        document.getElementById("passerror").innerHTML = "password is medium";
        document.getElementById("passerror").style.color = "#FFBF31";
    } else {
        document.getElementById("passerror").innerHTML = "password is poor";
        document.getElementById("passerror").style.color = "red";
    }
};

recheckpass = () => {
    if (pass.value === repass.value) {
        btnsubmit.removeAttribute("disabled");
    } else {
        btnsubmit.getAttribute("disabled");
    }
};

function toggleForm() {
    var form = document.getElementById("pioForm");
    var button = document.getElementById("myButton");

    if (form.style.display === "none") {
        form.style.display = "block";
        button.innerHTML = "Hide Form";
    } else {
        form.style.display = "none";
        button.innerHTML = "Show Form";
    }
}


// review 