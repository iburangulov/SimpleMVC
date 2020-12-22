<?php
include_once VIEWS_PATH . 'templates/header.php';
include_once VIEWS_PATH . 'templates/navbar.php';
?>

	<div class="row bg-info p-4 bg-light text-dark mb-1">
		<div class="col p-3">
			<p class="fs-2 text-justify text-break"><?php echo $result['title']; ?></p>
    		<p class="fs-5 text-justify text-break"><?php echo $result['content']; ?></p>
		</div>
	</div>

<?php
include_once VIEWS_PATH . 'templates/footer.php';
