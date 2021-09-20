/**
 * contact page map
 * adds full-width map to the contact page
 * set coordinates in .setView and set
 * marker coordinates in the marker
*/ 
var mymap = L.map('map').setView([52.62147927683726, 1.2805286164869416], 14);
mymap.scrollWheelZoom.disable();

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiYmVhcm1vZGUiLCJhIjoiY2t0MnA2emN4MGduazMwcjFmeGJ6ZHF0NiJ9.OCgVfAjoOIVrwZSjDxhxMA'
}).addTo(mymap);

var marker = L.marker([52.62147927683726, 1.2805286164869416]).addTo(mymap);

marker.bindPopup("<b>Baker's Dozen</b><br>107 Gloucester Street<br>Norwich, Norfolk<br>NR2 2DY").openPopup();


// client-side validation section
const nameField = document.getElementById("name");
const phoneField = document.getElementById("phone");
const emailField = document.getElementById("email");
const subjectField = document.getElementById("subject");
const messageField = document.getElementById("message");
const gdprCheck = document.getElementById("gdpr-checkbox");
const gdprSpan = document.getElementById("gdpr-span");
const submitBtn = document.getElementById("submit");
const contactTextDiv = document.getElementById("contact-text");
const formDiv = document.getElementById("form-container");
const form = document.getElementById("contact");

// track the current phone value, only allow certain characters
let currentPhoneValue = phoneField.value || '';
//track the cursor position
const selection = {};
phoneField.addEventListener('input', function(e) {

    
    const allowedChars = /^[0-9\s\+\(\)]*$/;
    const target = e.target;

    if (allowedChars.test(target.value)) {
        currentPhoneValue = target.value;
    } else {
        // if user enters a disallowed character
        // restore the value and selection
        target.value = currentPhoneValue;
        target.setSelectionRange(
            selection.selectionStart,
            selection.selectionEnd
        );
    }
});

// close the message box 
if (document.getElementById("form-message")) {
    let closeMessage = document.getElementById("close-message");
    let messageDiv = document.getElementById("form-message");
    closeMessage.addEventListener("click", function(e) {
        messageDiv.remove();
    });
}

// function to create the error message div & text
function addErrorMessage(errorArray) {
    const errDiv = document.createElement("div");
    const errCont = document.createElement("p");
    const errMsg = document.createTextNode(`Please complete the following fields: ${errorArray.join(", ")}`);
    const errClose = document.createElement("button");
    const errCloseBtn = document.createElement("i")

    errDiv.setAttribute('id', 'form-message');
    errDiv.setAttribute('class', 'form-message error');
    errClose.setAttribute('id', 'close-message');
    errClose.setAttribute('class', 'close-message');
    errCloseBtn.setAttribute('class', 'fas fa-times')

    errDiv.appendChild(errCont);
    errDiv.appendChild(errClose);
    errClose.appendChild(errCloseBtn);
    errCont.appendChild(errMsg);

    formDiv.insertBefore(errDiv, form);
}

function clientValidate() {
    let errorArray = [];
    const emailRegex =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const phoneRegex = /^(((\(\+44\)\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/;

    // creates an array of all the field values
    let fieldArray = {
        "name": nameField,
        "phone": phoneField,
        "email": emailField,
        "subject": subjectField,
        "message": messageField,
        "privacy policy checkbox": gdprCheck
    };

    // loops through the fields and adds errors to the errorArray
    // also adds the error class to the input field for 3 seconds

    for (const [field, value] of Object.entries(fieldArray)) {
        if (field == "name" && !value.value) {
            errorArray.push(field);
            nameField.classList.add("error");
            setTimeout(function() {
                nameField.classList.remove("error");
            }, 3000);
        }
        if (field == "phone" && !phoneRegex.test(value.value)) {
            errorArray.push(field);
            phoneField.classList.add("error");
            setTimeout(function() {
                phoneField.classList.remove("error");
            }, 3000);
        }
        if (field == "email" && !emailRegex.test(value.value)) {
            errorArray.push(field);
            emailField.classList.add("error");
            setTimeout(function() {
                emailField.classList.remove("error");
            }, 3000);
        }
        if (field == "subject" && !value.value) {
            errorArray.push(field);
            subjectField.classList.add("error");
            setTimeout(function() {
                subjectField.classList.remove("error");
            }, 3000);
        }
        if (field == "message" && !value.value) {
            errorArray.push(field);
            messageField.classList.add("error")
            setTimeout(function() {
                messageField.classList.remove("error");
            }, 3000);
        }
        if (field == "privacy policy checkbox" && !value.checked) {
            errorArray.push(field);
            gdprSpan.classList.add("error");
            setTimeout(function() {
                gdprSpan.classList.remove("error");
            }, 3000);
        }
    }

    if (errorArray.length > 0) {
        // removes any existing message before adding a new one
        if (document.getElementById("form-message")) {
            document.getElementById("form-message").remove();
        }

        // adds a new error message using the error array
        addErrorMessage(errorArray);
        


        // allows the message to be closed, auto-closes after 10s
        let closeMessage = document.getElementById("close-message");
        let messageDiv = document.getElementById("form-message");
        closeMessage.addEventListener("click", function(e) {
            messageDiv.remove();
        });
        setTimeout(function(){
            messageDiv.remove();
        }, 10000);
        setTimeout(function() {window.location = (""+window.location).replace(/#[A-Za-z0-9_-]*$/,'')+"#form-message"}, 1);
        return false;
    } else {
        return true;
    }
}

// event listener for the button, 
submitBtn.addEventListener('click', function(e) {
    if (!clientValidate()) {
        e.preventDefault();
    }
});