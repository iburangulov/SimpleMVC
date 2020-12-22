<?php
include_once VIEWS_PATH . 'templates/header.php';
include_once VIEWS_PATH . 'templates/navbar.php';
?>

    <div class="container d-flex flex-row justify-content-center">

        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="/blog/page/<?php echo $prevPage; ?>">
                    <?php echo $prevPage; ?></a></li>
            <li class="page-item"><a class="page-link" href="/blog/page/<?php echo $currentPage; ?>">
                    <?php echo $currentPage; ?></a></li>
            <li class="page-item"><a class="page-link" href="/blog/page/<?php echo $nextPage; ?>">
                    <?php echo $nextPage; ?></a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>

<?php foreach ($result as $item) {
    ?>

    <div class="row bg-info p-4 bg-light text-dark mb-1">
        <div class="col">

            <p class="fs-2 text-justify text-break">
                <a class="nav-link" href="<?php echo '/blog/'
                    . $item['id']; ?>"><?php echo $item['title']; ?></a>
            </p>
            <p class="fs-5 text-justify text-break">
                <?php echo substr($item['content'], 0, 100); ?>
            </p>

        </div>
    </div>


<?php } ?>


<?php
include_once VIEWS_PATH . 'templates/footer.php';
