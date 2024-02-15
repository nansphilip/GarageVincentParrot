<header class="container-fluid mb-2 mx-0" style="height: 50px;">
    <div class="h-100 row gap-2">
        <a class="h-100 col-auto d-flex flex-row align-items-center gap-2 bg-150 rounded-3 link-dark link-underline-opacity-0" href="index.php">
            <img class="object-fit-cover" src="/static/img/Logo.webp" alt="Logo" style="height: 1.8rem">
            <h2 class="fs-3 mb-0">Ultra Motor</h2>
        </a>
        <nav class="h-100 col d-none d-md-flex flex-row align-items-center justify-content-end gap-3 bg-150 rounded-3">
            <a class="link-dark link-underline-opacity-0 link-underline-opacity-100-hover <?= $page == "home" ? "fw-bold" : "" ?>" href="index.php">Accueil</a>
            <a class="link-dark link-underline-opacity-0 link-underline-opacity-100-hover <?= $page == "vehicle-detail" ? "fw-bold" : "" ?>" href="index.php?p=vehicle-detail">Véhicules d'occasion</a>
            <a class="link-dark link-underline-opacity-0 link-underline-opacity-100-hover <?= $page == "review" ? "fw-bold" : "" ?>" href="index.php?p=review">Avis clients</a>
            <?php if ($connected == true) : ?>
                <a class="link-dark link-underline-opacity-0 link-underline-opacity-100-hover <?= $page == "edition" ? "fw-bold" : "" ?>" href="index.php?p=edition">Édition</a>
            <?php else : ?>
                <a class="link-dark link-underline-opacity-0 link-underline-opacity-100-hover <?= $page == "quote-request" ? "fw-bold" : "" ?>" href="index.php?p=quote-request">Demander un devis</a>
            <?php endif ?>
        </nav>
        <nav class="h-100 col dropdown d-md-none d-flex align-items-center justify-content-end bg-150 rounded-3">
            <button id="menu" class="btn dropdown-toggle rounded-3" style="background-color: transparent; border: none;" type="button" data-bs-toggle="dropdown" aria-expended="false">
                <svg style="fill: gray; height: 2rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                    <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                </svg>
            </button>
            <style>#menu::after { display: none; }</style>
            <ul class="dropdown-menu">
                <a class="dropdown-item link-dark link-underline-opacity-0 <?= $page == "home" ? "fw-bold" : "" ?>" href="index.php">Accueil</a>
                <a class="dropdown-item link-dark link-underline-opacity-0 <?= $page == "vehicle-detail" ? "fw-bold" : "" ?>" href="index.php?p=vehicle-detail">Véhicules d'occasion</a>
                <a class="dropdown-item link-dark link-underline-opacity-0 <?= $page == "review" ? "fw-bold" : "" ?>" href="index.php?p=review">Avis clients</a>
                <?php if ($connected == true) : ?>
                    <a class="dropdown-item link-dark link-underline-opacity-0 <?= $page == "edition" ? "fw-bold" : "" ?>" href="index.php?p=edition">Édition</a>
                <?php else : ?>
                    <a class="dropdown-item link-dark link-underline-opacity-0 <?= $page == "quote-request" ? "fw-bold" : "" ?>" href="index.php?p=quote-request">Demander un devis</a>
                <?php endif ?>
            </ul>
        </nav>
    </div>
</header>