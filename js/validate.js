function validateForm() {
    var x, y, z, i, valid = true;
    x = document.getElementById("enquiryForm");
    y = x.querySelectorAll(".field-req");
    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            y[i].className += " empty-field";
            valid = false;
            if (y[i].nextElementSibling == null) {
                var node = document.createElement("P");
                node.classList = "error-msg";
                var textnode = document.createTextNode("This is Required.");
                node.appendChild(textnode);
                y[i].parentElement.appendChild(node);
            }
        } else {
            y[i].classList.remove('empty-field');
            if (y[i].nextElementSibling) {
                y[i].nextElementSibling.remove();
            }
        }
    }
    var email = document.getElementById('email');
    var telephone = document.getElementById('telephone');
    if (!validateEmail(email.value)) {
        valid = false;
        email.className += " empty-field";
        if (email.nextElementSibling == null) {
            var node = document.createElement("P");
            node.classList = "error-msg";
            var textnode = document.createTextNode("Email address is invalid.");
            node.appendChild(textnode);
            email.parentElement.appendChild(node);
        }
    } else {
        email.classList.remove('empty-field');
        if (email.nextElementSibling) {
            email.nextElementSibling.remove();
        }
    }
    if (!validatePhone(telephone.value)) {
        valid = false;
        telephone.className += " empty-field";
        if (telephone.nextElementSibling == null) {
            var node = document.createElement("P");
            node.classList = "error-msg";
            var textnode = document.createTextNode("Enter Valid Phone Number");
            node.appendChild(textnode);
            telephone.parentElement.appendChild(node);
        }
    } else {
        telephone.classList.remove('empty-field');
        if (telephone.nextElementSibling) {
            telephone.nextElementSibling.remove();
        }
    }

    return valid;
}

function validateEmail(email) {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (reg.test(email) == false) {
        return false;
    }
    return true;
}

function validatePhone(inputtxt) {
    var numbers = /^[0-9]+$/;
    if (inputtxt.match(numbers)) {
        return true;
    } else {
        return false;
    }
}