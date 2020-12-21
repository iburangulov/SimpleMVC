<div class="navbar">
    <a href="<?php echo '/' ?>">Home</a>
    <a href="<?php echo '/blog'; ?>">Blog</a>
    <a href="<?php echo '/contacts'; ?>">Contacts</a>
    <a href="<?php echo '/about'; ?>">About</a>

    <?php
    if (isset($_SESSION['auth']) AND $_SESSION['auth']) {
        ?>
        <a href="<?php echo '/signout'; ?>">Sign Out</a>
    <?php
    } else {
        ?>
        <a href="<?php echo '/signin'; ?>">Sign In</a>
        <a href="<?php echo '/signup'; ?>">Sign Up</a>
    <?php
    }

    ?>


</div>
