<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php">Bootstrap PHP </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if($nomPage=="about"){?>active<?php } ?>" href="about.php">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($nomPage=="portfolio"){?>active<?php } ?>" href="portfolio.php">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($nomPage=="boucle"){?>active<?php } ?>" href="boucle.php">Boucle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($nomPage=="users"){?>active<?php } ?>" href="#">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($nomPage=="contact"){?>active<?php } ?>" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
</nav>