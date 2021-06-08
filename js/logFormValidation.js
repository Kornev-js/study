$(document).ready( function (e) {
    $('form').submit(function(event) {
        event.preventDefault();
        let email = $('#formName').val();
        let password = $('#formPass').val();
        console.log(email, password)

        if ((email === "")&& (password === "")) {
            $("#error").text('all fields must be filled');
            return false
        }
        let data = JSON.stringify({'email': email, 'password': password});
        $.ajax({
            url: '/?action=login',
            type: 'POST',
            data: data,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            response: 'json',
            success: function(data) {
                setTimeout(function(){
                    window.location.href = '../index.php';
                }, 2000);
                console.log(data)
                $('#error').text('Done');

            },
            error: function(errMsg) {
                console.error(errMsg)
                $('#error').text('Done');
            }

        })



    })
    })