<?php
include_once VIEWS_PATH . 'templates/header.php';
?>
<div class="content">
        <div class="title"><?php echo $result['title']; ?></div>
        <div class="post_content"><?php echo $result['content']; ?></div>
</div>
<?php
include_once VIEWS_PATH . 'templates/footer.php';