<div class="form">
    <form action="../functionality/login.php" method="POST">
        <h1>Login Form</h1>
        <div class="form__item">
            <label for="formName" class="formLabel validation">Login or Email</label>
            <input id="formName"  type="email" name="email" class="form__input-name " placeholder="Login">
        </div>
        <div class="form__item">
            <label for="formPass" class="formLabel">Password</label>
            <input id="formPass"  type="password" name="password" class="form__input-name validation" placeholder="******">
        </div>
        <div id="error"></div>
        <a href="#" class="reminder">Forgot Password?</a>
        <button type="submit" class="loginButton">Log In</button>
        <p class="regLink">Not a member? <a href="?tab=pages/regForm">Signup now</a></p>

    </form>
</div>
<script src="../js/logFormValidation.js"></script>
<script type="text/javascript">
$(document).ready(function(){
        $('.regLink a').click(function(e){
            e.preventDefault();
            var urlPart = $(this).attr('href');
            $.ajax({
                type: "GET",
                url: 'index.php' + urlPart,
                cache: false,
                success: function (msg) {
                    $('#phpContent').html(msg);
                }
            })
        })
    }
)   
</script>
