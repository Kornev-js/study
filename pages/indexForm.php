<div class="form" >
    <form action="#" id="form" class="form__body" method="POST">
        <div class="form__item">
            <label for="formName" class="formLabel">Name*</label>
            <input id="formName"  type="text" name="name" class="form__input " placeholder="John Doe">
            <small>Error</small>
        </div>
        <div class="form__item">
            <label for="formEmail" class="formLabel">Email*</label>
            <input id="formEmail"  type="email" name="email" class="form__input " placeholder="example@mail.com">
            <small>Error</small>
        </div>
        <div class="form__item">
            <label for="formPassword" class="formLabel">Password*</label>
            <input id="formPassword"  type="password" name="password" class="form__input " placeholder="******">
            <small>Error</small>
        </div>
        <div class="form__item"></div>
        <div class="form__title">Gender</div>
        <div class="options">
            <div class="options__item">
                <input id="formMale" value="male" checked type="radio" name="male" class="options__input">
                <label for="formMale" class="options__label">Male</label>
            </div>
            <div class="options__item">
                <input id="formFemale" type="radio" value="female" name="male" class="options__input">
                <label for="formFemale" class="options__label">Female</label>
            </div>
        </div>
        <div class="form__item">
            <label for="formbirthdate" class="formLabel">Birthdate</label>
            <input id="formbirthdate" type="date" name="birthdate" class="form__input">
            <small>Error</small>
        </div>

        <div class="contactsBlock">
<!--            <div class="form__item">-->
<!--                <div class="form__label contacts">Contacts</div>-->
<!--                <select name="contact" class="select" ;>-->
<!--                    <option value="1" >Fb</option>-->
<!--                    <option value="2">Twitch</option>-->
<!--                    <option value="3" selected>Vk</option>-->
<!--                    <option value="4">Telega</option>-->
<!--                    <option value="5">Other</option>-->
<!--                </select>-->
<!---->
<!--            <div class="form__item-contact">-->
<!--                <label for="socialName" class="formLabel"></label>-->
<!--                <input id="socialName" type="text" name="name" class="form__input">-->
<!--            </div>-->
<!--            <button type="reset" class="contactButton">Delete</button>-->
<!--            </div>-->
            <div class="noContactInputs">
            <button type="button"  id="addButton">Add New</button>
                <button type="reset" id="resetButton">Reset</button>
        </div>
        </div>


        <div class="form__item">
            <div class="form__label photo">Photo</div>
            <div class="file">
                <div class="file__item">
                    <input type="file" name="image" class="file__input " accept=".jpg, .gif, .png">
                </div>
            </div>
        </div>
        <div class="form__item">
            <label for="formHobbies" class="formLabel">Hobbies</label>
            <textarea name="hobbies" id="formHobbies" class="" placeholder="Swimming"></textarea>
            <small>Error</small>
        </div>
        <div class="form__item">
            <label for="formWords" class="formLabel">Some words</label>
            <textarea name="some words" id="formWords" class=""></textarea>
            <small>Error</small>
        </div>
        <div class="form__item">
            <div class="checkbox">
                <input id="formAgreement" required checked type="checkbox" name="agreement12334" class="checkbox__input _req">
                <label for="formAgreement" class="checkbox__label">Agreement</label>
            </div>
        </div>
        <button type="reset" class="form__resetButton">Update Profile</button>
        <button type="submit" class="form__button">Next</button>


    </form>


</div>
<div class="innerHtml"></div>
<script src="../js/validation.js"></script>
<!--<script src="scriptForm.js"></script>-->

