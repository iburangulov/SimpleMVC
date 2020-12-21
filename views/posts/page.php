<?php
include_once VIEWS_PATH . 'templates/header.php';
include_once VIEWS_PATH . 'templates/navbar.php';
?>
    <div class="content">
        <?php foreach ($result as $item) {
            ?>
                <div class="short_post">
            <div class="title"><a href="<?php echo 'blog/' .
                    $item['id']; ?>"><?php echo $item['title']; ?></a></div>
            <div class="post_content"><?php echo $item['content']; ?></div></div>
        <?php } ?>

    </div>
<?php
include_once VIEWS_PATH . 'templates/footer.php';