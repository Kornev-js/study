<nav class = "navigation">
    <ul class="navMenu">
        <li class="navMenu__item"><a href="?tab=pages/logForm">Login</a></li>
        <li class="navMenu__item"><a href="?tab=pages/CV">Resume</a></li>
        <li class="navMenu__item"><a href="?tab=pages/indexForm">Form</a></li>
        <?php if(array_key_exists('user', $_SESSION)){ ?>
            <li class="navMenu__item"><a href="?tab=pages/regForm">Register</a></li>
            <li class="navMenu__item"><a href="?tab=pages/edit_form">Edit Form</a></li>
            <li class="navMenu__item"><a href="#">Docs</a></li>
            <li class="navMenu__item"><a href="#">Support</a></li>
            <li class="navMenu__item"><a href="#">Plans</a></li>
            <li class="navMenu__item"><a href="">Blog</a></li>
        <?php } ?>
    </ul>


</nav>
