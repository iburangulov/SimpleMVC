<?php
include_once VIEWS_PATH . 'templates/header.php';
include_once VIEWS_PATH . 'templates/navbar.php';
?>
<div class="content">
    <div class="sign">
        <form action="/signin" method="POST">
            <input type="email" name="email" placeholder="Email" id="inp">
            <input type="password" name="password" placeholder="Password" id="inp">
            <input type="submit" id="btn" value="Sign In">
        </form>
    </div>
</div>
<?php
include_once VIEWS_PATH . 'templates/footer.php';