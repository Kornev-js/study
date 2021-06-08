let form = document.getElementById('form');
let username = document.getElementById('formName');
let email = document.getElementById('formEmail');

let password = document.getElementById('formPassword');
let birthdate= document.getElementById('formbirthdate');
let hobbies = document.getElementById('formHobbies');
let words = document.getElementById('formWords');
let today = new Date();
form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();

});

function checkInputs() {

    let usernameValue = username.value
    console.log(usernameValue)
    let emailValue = email.value.trim();
    let paswordValue = password.value.trim();
    let birthdateValue = birthdate.value
    let hobbiesValue = hobbies.value
    let wordsValue = words.value

    if (usernameValue === '') {
        setErrorFor(username, 'Username cannot be blank')
    }else if (!isLatin(usernameValue)) {
        setErrorFor(username, 'Must contain only Latin letters');
    }else {
        setSuccessFor(username);
    }


    if(emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Not a valid email');
    } else {
        setSuccessFor(email);
    }
    if(paswordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
    }else if(paswordValue < 6) {
        setErrorFor(password, 'Password must be 6char at least');
    }else if(!isPassContains(paswordValue)) {
        setErrorFor(password, 'Must contains numbers and letters');
    }
    else {
        setSuccessFor(password);
    }
    let b = new Date(birthdate.value);
    console.log(today.getFullYear(), b.getFullYear())// дебаггинг
    if((today.getFullYear() - 150) > b.getFullYear())
    {
        setErrorFor(birthdate,"Invalid date of birth");
    } else if (today.getFullYear()===(b.getFullYear())&&
        today.getMonth()===(b.getMonth())&&
        today.getDate()===(b.getDate()) ){
        setErrorFor(birthdate,"Wrong date of birth");
    }   else  {
        setSuccessFor(birthdate);
    }

 }

 function setErrorFor(input, message) {
    console.log(input, message)

    let formControl = input.parentElement;
    console.log(formControl);
    let small = formControl.querySelector('small')
     small.innerText = message;
     formControl.className = 'form__item error';




 }

 function setSuccessFor(input, message) {
    let formControl = input.parentElement;
    // let scsMsg = formControl.querySelector('small');
     formControl.className = 'form__item success';
 }

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isLatin(username) {
    return /[a-zA-Z]/.test(username);
}
function isPassContains(password) {
    return /^[0-9a-zA-Z]+$/.test(password);
}

//INSERTING NEW FIELDS!!!

let mainInputsDiv = document.querySelector('.noContactInputs');
console.log(mainInputsDiv);
function addItems() {

    let br = document.createElement('br');

    let select  = document.createElement('select');
    select.setAttribute('id', 'select');

    let option1 = document.createElement('option')
    option1.value = 'inst';
    option1.textContent = 'Inst';
    let option2 = document.createElement('option')
    option2.value = 'fb';
    option2.textContent = 'Fb';
    let option3 = document.createElement('option')
    option3.value = 'other';
    option3.textContent = 'Other';

    select.appendChild(option1);
    select.appendChild(option2);
    select.appendChild(option3);

    let input1 = document.createElement('input');
    input1.setAttribute('id', 'input1')
    input1.name = 'dynamicInput';
    input1.style.visibility = 'hidden';
    let input2 = document.createElement('input');
    input2.name = 'staticInput';

    input2.setAttribute('id', 'input2')


    mainInputsDiv.insertBefore(input1, mainInputsDiv.firstChild);
    mainInputsDiv.insertBefore(input2, mainInputsDiv.firstChild);//сюда засовываем селект + 2 input text.
    mainInputsDiv.insertBefore(select, mainInputsDiv.firstChild);
    // 1 input style visibility hidden
    // 2 input text
    // if select === 'other'
    // select.value === 'other'
    select.addEventListener('change', function (event) {

        if (select.value === 'other'){
            input1.style.visibility = 'visible';
        }

    })



}

function removeItems(){
let removeSelect = document.getElementById('select');
removeSelect.remove();
let removeInput1 = document.getElementById('input1');
removeInput1.remove();
    let removeInput2 = document.getElementById('input2');
    removeInput2.remove();

}
let addBtn = document.getElementById('addButton');
let resetBtn = document.getElementById('resetButton')

addBtn.onclick = addItems;
resetBtn.onclick = removeItems;


