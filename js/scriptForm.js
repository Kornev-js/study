"use strict"

// const form = document.getElementById('form');
//
// function retrieveFormValue(event) {
//     event.preventDefault();
//
//     const name = form.querySelector('[name = "name"]');
//     const email = form.querySelector('[email = "email"]');
//     const password = form.querySelector([password = "password"]);
//     const values = {
//         name: name.value
//         email: email.value
//         password: password.value
//
//     }
//
//     console.log('v1', values);
// }
//
//
// form.addEventListener('submit', retrieveFormValue);
const isCheckBoxOrRadio = type => ['checkbox', 'radio'].includes(type);

let form = document.getElementById('form');

function recieveFormValues(event) {
    event.preventDefault();

    const fields = document.querySelectorAll('input, select, textarea');
    const values = {};

    fields.forEach(field => {
        const {name, value, type, checked} = field;



        values[name] = isCheckBoxOrRadio(type) ? checked : value;


    })

    console.log(values);
    for (let valuesKey in values) {
        document.querySelector('.innerHtml').innerHTML = valuesKey;
    }

    // let innerHtml = innerHtml.innerHTML;
    // innerHtml.innerHTML (values);
}


form.addEventListener('submit', recieveFormValues);


//validation

// checkPwd = function() {
//     let str = document.getElementById('password').value;
//     if (str.length < 6) {
//         alert("too_short");
//         return("too_short");
//     } else if (str.length > 50) {
//         alert("too_long");
//         return("too_long");
//     } else if (str.search(/\d/) == -1) {
//         alert("no_num");
//         return("no_num");
//     } else if (str.search(/[a-zA-Z]/) == -1) {
//         alert("no_letter");
//         return("no_letter");
//     } else if (str.search(/[^a-zA-Z0-9\!\@\#\$\%\^\&\*\(\)\_\+\.\,\;\:]/) != -1) {
//         alert("bad_char");
//         return("bad_char");
//     }
//     alert("oukey!!");
//     return("ok");
// }




























