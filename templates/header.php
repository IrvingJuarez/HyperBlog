<header>
    <h2>Hyper Blog</h2>

    <nav>
        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="GET">
            <input class="search-field" type="text" name="search" placeholder="Search...">
            <i class="fa fa-search" onclick="document.querySelector('.header_submit').click()">
                <input type="submit" class="header_submit">
            </i>
        </form>
        <ul>
            <a href="#"><i class="fa fa-github fa-lg"></i></a>
            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
            <a href="#"><i class="fa fa-envelope fa-lg"></i></a>
        </ul>
    </nav>
</header>