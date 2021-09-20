"use strict";

function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

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
marker.bindPopup("<b>Baker's Dozen</b><br>107 Gloucester Street<br>Norwich, Norfolk<br>NR2 2DY").openPopup(); // client-side validation section

var nameField = document.getElementById("name");
var phoneField = document.getElementById("phone");
var emailField = document.getElementById("email");
var subjectField = document.getElementById("subject");
var messageField = document.getElementById("message");
var gdprCheck = document.getElementById("gdpr-checkbox");
var gdprSpan = document.getElementById("gdpr-span");
var submitBtn = document.getElementById("submit");
var contactTextDiv = document.getElementById("contact-text");
var formDiv = document.getElementById("form-container");
var form = document.getElementById("contact"); // track the current phone value, only allow certain characters

var currentPhoneValue = phoneField.value || ''; //track the cursor position

var selection = {};
phoneField.addEventListener('input', function (e) {
  var allowedChars = /^[0-9\s\+\(\)]*$/;
  var target = e.target;

  if (allowedChars.test(target.value)) {
    currentPhoneValue = target.value;
  } else {
    // if user enters a disallowed character
    // restore the value and selection
    target.value = currentPhoneValue;
    target.setSelectionRange(selection.selectionStart, selection.selectionEnd);
  }
}); // close the message box 

if (document.getElementById("form-message")) {
  var closeMessage = document.getElementById("close-message");
  var messageDiv = document.getElementById("form-message");
  closeMessage.addEventListener("click", function (e) {
    messageDiv.remove();
  });
} // function to create the error message div & text


function addErrorMessage(errorArray) {
  var errDiv = document.createElement("div");
  var errCont = document.createElement("p");
  var errMsg = document.createTextNode("Please complete the following fields: ".concat(errorArray.join(", ")));
  var errClose = document.createElement("button");
  var errCloseBtn = document.createElement("i");
  errDiv.setAttribute('id', 'form-message');
  errDiv.setAttribute('class', 'form-message error');
  errClose.setAttribute('id', 'close-message');
  errClose.setAttribute('class', 'close-message');
  errCloseBtn.setAttribute('class', 'fas fa-times');
  errDiv.appendChild(errCont);
  errDiv.appendChild(errClose);
  errClose.appendChild(errCloseBtn);
  errCont.appendChild(errMsg);
  formDiv.insertBefore(errDiv, form);
}

function clientValidate() {
  var errorArray = [];
  var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var phoneRegex = /^(((\(\+44\)\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/; // creates an array of all the field values

  var fieldArray = {
    "name": nameField,
    "phone": phoneField,
    "email": emailField,
    "subject": subjectField,
    "message": messageField,
    "privacy policy checkbox": gdprCheck
  }; // loops through the fields and adds errors to the errorArray
  // also adds the error class to the input field for 3 seconds

  for (var _i = 0, _Object$entries = Object.entries(fieldArray); _i < _Object$entries.length; _i++) {
    var _Object$entries$_i = _slicedToArray(_Object$entries[_i], 2),
        field = _Object$entries$_i[0],
        value = _Object$entries$_i[1];

    if (field == "name" && !value.value) {
      errorArray.push(field);
      nameField.classList.add("error");
      setTimeout(function () {
        nameField.classList.remove("error");
      }, 3000);
    }

    if (field == "phone" && !phoneRegex.test(value.value)) {
      errorArray.push(field);
      phoneField.classList.add("error");
      setTimeout(function () {
        phoneField.classList.remove("error");
      }, 3000);
    }

    if (field == "email" && !emailRegex.test(value.value)) {
      errorArray.push(field);
      emailField.classList.add("error");
      setTimeout(function () {
        emailField.classList.remove("error");
      }, 3000);
    }

    if (field == "subject" && !value.value) {
      errorArray.push(field);
      subjectField.classList.add("error");
      setTimeout(function () {
        subjectField.classList.remove("error");
      }, 3000);
    }

    if (field == "message" && !value.value) {
      errorArray.push(field);
      messageField.classList.add("error");
      setTimeout(function () {
        messageField.classList.remove("error");
      }, 3000);
    }

    if (field == "privacy policy checkbox" && !value.checked) {
      errorArray.push(field);
      gdprSpan.classList.add("error");
      setTimeout(function () {
        gdprSpan.classList.remove("error");
      }, 3000);
    }
  }

  if (errorArray.length > 0) {
    // removes any existing message before adding a new one
    if (document.getElementById("form-message")) {
      document.getElementById("form-message").remove();
    } // adds a new error message using the error array


    addErrorMessage(errorArray); // allows the message to be closed, auto-closes after 10s

    var _closeMessage = document.getElementById("close-message");

    var _messageDiv = document.getElementById("form-message");

    _closeMessage.addEventListener("click", function (e) {
      _messageDiv.remove();
    });

    setTimeout(function () {
      _messageDiv.remove();
    }, 10000);
    setTimeout(function () {
      window.location = ("" + window.location).replace(/#[A-Za-z0-9_-]*$/, '') + "#form-message";
    }, 1);
    return false;
  } else {
    return true;
  }
} // event listener for the button, 


submitBtn.addEventListener('click', function (e) {
  if (!clientValidate()) {
    e.preventDefault();
  }
});