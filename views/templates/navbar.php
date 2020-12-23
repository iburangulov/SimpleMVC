<nav class="navbar navbar-expand-lg navbar-light bg-primary fs-4 bg-gradient fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand fs-3 text-light" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link text-light" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/contacts">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/about">About</a>
                </li>
                <?php
                if (\home\middlewares\Auth::isType('admin')) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/admin">Admin</a>
                    </li>
                    <?php
                }
                if (\home\middlewares\Auth::check()) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/signout">Sign out</a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/signin">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/signup">Sign Up</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Not works" aria-label="Search">
                <button class="btn btn-primary btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>