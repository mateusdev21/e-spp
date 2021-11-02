<nav class="navbar navbar-light bg-light">
    <a href=""><i class="fas fa-bars mr-4 ml-2"></i></a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item" aria-current="page">Dashboard</li>
            <?php
            if (isset($page)) {
                echo '<li class="breadcrumb-item" aria-current="page">' . $page . '</li>';
            };
            ?>
            </li>
        </ol>
    </nav>
</nav>