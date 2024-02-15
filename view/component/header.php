<?php $connected; ?>

<header class="container-fluid mb-2">
    <div class="row gap-2">
        <div class="col-auto px-0" style="height: 50px;">
            <a class="h-100 col-auto gap-2 px-3 py-2 link-dark link-underline link-underline-opacity-0 bg-300 rounded-3 d-flex align-items-center" href="index.php">
                <img class="h-100 object-fit-cover" src="/static/img/Logo.webp" alt="Logo">
                <h1 class="fs-3 mb-0">Ultra Motor</h1>
            </a>
        </div>
        <div class="col px-0">
            <!-- FULL SCREEN NAV -->
            <nav class="d-md-flex d-none align-items-center justify-content-end gap-3 px-3 py-2 h-100 bg-300 rounded-3">
                <a class="<?php if ($page == "home") echo "fw-semibold"; ?> link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="index.php">Accueil</a>
                <a class="<?php if ($page == "vehicle-detail") echo "fw-semibold"; ?> link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="index.php?p=vehicle-detail">Véhicules d'occasion</a>
                <a class="<?php if ($page == "review") echo "fw-semibold"; ?> link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="index.php?p=review">Avis clients</a>

                <?php if ($connected == true) : ?>
                    <a class="<?php if ($page == "edition") echo "fw-semibold"; ?> link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="index.php?p=edition">Édition</a>
                <?php else : ?>
                    <a class="<?php if ($page == "quote-request") echo "fw-semibold"; ?> link-dark link-underline link-underline-opacity-0 link-underline-opacity-100-hover" href="index.php?p=quote-request">Demander un devis</a>
                <?php endif ?>
                <!-- <a href="index.php?p=error">Error</a> -->
            </nav>
            <!-- FULL SCREEN NAV -->
            <div class="d-md-none d-block">
                <button>...</button>
                <nav class="position-absolute">
                    <a href="">coucou</a>
                </nav>
            </div>
        </div>
    </div>
</header>