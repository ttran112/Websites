//validating the form


let form = document.getElementById("guestBookForm");
form.onsubmit = validate;

//Make all error messages invisible
function clearErrors() {
    let errors = document.getElementsByClassName("text-danger");
    for(let i = 0; i < errors.length; i++) {
        errors[i].classList.add("d-none");
    }
}

function validate() {
    //clearErrors();
    //isValid = true;
        clearErrors();
        isValid = true;
        if(document.getElementById("addMe").checked) {
            validateFirstName();
            console.log(isValid);
            validateLastName();
            console.log(isValid);
            //checkPhone();
            console.log(isValid);
            reason();
            linkedIn();
            console.log(isValid);
            checkEmail();
            console.log(isValid);
            return isValid;
        }
        else {
            validateFirstName();
            console.log(isValid);
            validateLastName();
            console.log(isValid);
            //checkPhone();
            console.log(isValid);
            reason();
            linkedIn();
            console.log(isValid);
            return isValid;
        }
}

//set isValid for true for validation
let isValid = true;

//Validate first name
function validateFirstName(){
    let first = document.getElementById("fname").value;
    if(first == "") {
        let errFName = document.getElementById("err-fname");
        errFName.classList.remove("d-none");
        isValid = false;
    }
    return isValid;
}

//validate last name
function validateLastName(){
    let last = document.getElementById("lname").value;
    if(last == "") {
        let errLName = document.getElementById("err-lname");
        errLName.classList.remove("d-none");
        isValid = false;
    }
    return isValid;
}
//validate phone
/*function checkPhone() {
    let phone = document.getElementById("phone").value;
    //let phoneFormat = new RegExp(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im);
    let phoneFormat = new RegExp(/^\d{10}$/);
    if (!phone.match(phoneFormat)) {

        let errPhone = document.getElementById("err-phone");
        if (phone == "") {

        } else {
            errPhone.innerText = "Please enter a valid phone number";
        }
        errPhone.classList.remove("d-none");
        isValid = false;
    }
    return isValid;
}*/

//Validate reason

//document.getElementById("reason").addEventListener("click",reason);
function reason() {
    let reason = document.getElementById("reason").value;
    let otherReason = document.getElementById("other");
    if (reason === "none") {
        let errReason = document.getElementById("err-reason");
        errReason.classList.remove("d-none");
        //otherReason.classList.add("d-none");
        isValid = false; //Stay on the page
    }

    else {
        if (reason === "Other") {
            otherReason.classList.remove("d-none");
        }
    }
    return isValid;
}

document.getElementById("reason").addEventListener("click",otherReason);


function otherReason() {
    let choice = document.getElementById("reason").value;
    let otherChoice = document.getElementById("other");
    if (choice === "Other" ) {
        otherChoice.classList.remove("d-none");
    }
    else {
        otherChoice.classList.add("d-none");
    }
}
//checkLinked
function linkedIn() {
    let linked = document.getElementById("LinkedIn").value;
    let url = new RegExp(/^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]/im);
    //let url = new RegExp(/^(http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]/im);

    let errLinkedin = document.getElementById("err-LinkedIn");
    if (linked =="") {
        //isValid = true;
    }
    else {
        if (!linked.match(url)){
            errLinkedin.classList.remove("d-none");
            isValid = false;
        }

    }
}



function check() {
    //let isTrue = true;
    let hidden = document.getElementById("hidden");
    if (document.getElementById("addMe").checked) {
        hidden.classList.remove("d-none");
        isValid = false;
    } else {
        hidden.classList.add("d-none");
        //isValid = true;
    }
}
    //Validating email
    function checkEmail(){
    let email = document.getElementById("email").value;
    let mailFormat = new RegExp('^([a-zA-Z0-9_\\-\\.]+)@([a-zA-Z0-9_\\-\\.]+)\\.([a-zA-Z]{2,5})$');
    if (!email.match(mailFormat)) {
        let erremail = document.getElementById("err-email");
        if (email === "") {
        } else {
            erremail.innerText = "Please enter a valid email";
        }
        erremail.classList.remove('d-none');
        isValid = false;
    }

    return isValid;
}

