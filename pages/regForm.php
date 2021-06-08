<div class="form">
    <form action="../functionality/registration.php" class="form__body" method="post">
        <div class="title">
       <div class="line"><hr size="4"></div>
        <h1 class="formName">Register</h1>
            <div class="line"><hr size="4"></div>

        </div>
        <p>Create your account.It's free and only takes a minute</p>
        <div class="name">
        <div class="form__item">
            <label for="formName" class="formLabel"></label>
            <input id="formName"  type="text" name="lastName" class="form__input-name " placeholder="First Name" >
        </div>
        <div class="form__item">
            <label for="formSurname" class="formLabel"></label>
            <input id="formSurname"  type="text" name="firstName" class="form__input-name " placeholder="Last Name" >
        </div>
        </div>
        <div class="form__item">
            <label for="formEmail" class="formLabel"></label>
            <input id="formEmail"  type="email" name="email" class="form__input " placeholder="Email" >
<!--            <input id="formEmail"  type="text" name="email" class="form__input " placeholder="Email" >-->
        </div>
        <div class="form__item">
            <label for="formPassword" class="formLabel"></label>
            <input id="formPassword"  type="password" name="password" class="form__input " placeholder="Password" >
        </div>
        <div class="form__item">
            <label for="formConfPassword" class="formLabel"></label>
            <input id="formConfPassword"  type="password" name="confirmPass" class="form__input " placeholder="Confirm Password"   >
        </div>
        <div class="form__item">
            <div class="checkbox">
                <input id="formAgreement"   type="checkbox" name="agreement" class="checkbox__input ">
                <label for="formAgreement" class="checkbox__label">I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a> </label>
            </div>
        </div>
        <button type="submit" class="form__button">Register Now</button>
        <div id="error"></div>
    </form>
    <p class="Registered">Already have an account? <a href="?tab=pages/logForm">Sign in</a> </p>
<!--   --><?php //if ($_SESSION['message']) {
//       echo '<p class = "msg">' . $_SESSION['message'] . ' </p>';
//   }
//   unset($_SESSION['message']);
//   ?>

</div>

<script src="../js/regFormValidation.js"></script>
<script type="text/javascript">
$(document).ready(function(){
        $('.Registered a').click(function(e){
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
