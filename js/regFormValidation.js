$(document).ready( function (e) {
$('form').submit(function(event) {
    event.preventDefault();
 let name = $('#formName').val();
    let surname = $('#formSurname').val();
    let email = $('#formEmail').val();
    let password = $('#formPassword').val();
    let confirmPass = $('#formConfPassword').val();

    if((name === "")||(surname === "")|| (email === "") || (password === "") || (confirmPass === "")) {
        $("#error").text('all fields must be filled');
        return false;
    } else if (password !== confirmPass) {
        $("#error").text("passwords do not match")
        return false;
    }else {
        // $("#error").text("You are registered");
        $.ajax({
            url: '/?action=registration',
            type: 'POST',
            data: {'name': name, 'lastName': surname, 'email':email, 'password': password, 'confirmPass': confirmPass},
            dataType: 'json',
            success: function(data) {
                console.log(data)
                $('#error').text('Done');
            }

        })
    }





})

    })
