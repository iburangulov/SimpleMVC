<?php
include_once VIEWS_PATH . 'templates/header.php';
include_once VIEWS_PATH . 'templates/navbar.php';
?>
<div class="content">
        <div class="sign">
            <form action="/signup" method="POST">
                <input type="text" name="name" id="inp" placeholder="Name">
                <input type="email" name="email" id="inp" placeholder="Email">
                <input type="password" name="password" id="inp" placeholder="Password">
                <input type="password" name="password_confirmation" id="inp"
                       placeholder="Confirm password">
                <input type="submit" id="btn" value="Sign up">
            </form>
        </div>
</div>

<?php
include_once VIEWS_PATH . 'templates/footer.php';