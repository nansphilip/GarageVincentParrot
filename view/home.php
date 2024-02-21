<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="w-100 flex-1 d-flex flex-column overflow-auto gap-3 rounded-3">
    <section class="flex-1 d-flex flex-column overflow-hidden p-3 bg-150 shadow-sm rounded-3" style="min-height: 25vh">
        <h2>Services proposés</h2>

        <ul class="flex-1 overflow-y-auto mb-1 pe-2">
            <?php foreach ($serviceList as $service) : ?>
                <li>
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h5 class="mb-0"><?= $service->name ?></h5>
                        <p class="fw-semibold mb-0"><?= formatNumber($service->price) ?> €</p>
                    </div>
                    <p><?= $service->description ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="p-3 bg-150 shadow-sm rounded-3">
        <div class="d-flex justify-content-between mb-2">
            <h2 class="mb-0">Véhicules d'occasion</h2>
            <div class="d-flex gap-2">
                <a class="btn btn-primary" href="index.php?p=quote-request">Demander un devis</a>
                <a class="btn btn-secondary" href="index.php?p=vehicle-detail">Voir les annonces</a>
            </div>
        </div>
        <div class="row g-2">
            <?php for ($i = 0; $i <= 5; $i++) : ?>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="h-100 card shadow-sm border border-0">
                        <img class="card-img-top" src="/static/img/vehicle/<?= $vehicleList[$i]->imagePath ?>" alt="Photo <?= $vehicleList[$i]->brand . " " . $vehicleList[$i]->model ?>">
                        <div class="card-body p-2 d-flex flex-column justify-content-between">
                            <h5 class="card-title"><?= $vehicleList[$i]->brand . " " . $vehicleList[$i]->model ?></h5>
                            <ul class="card-text list-unstyled mb-1">
                                <li><?= $vehicleList[$i]->entryYear ?></li>
                                <li><?= formatNumber($vehicleList[$i]->mileage) ?> km</li>
                            </ul>
                            <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
                                <p class="fs-5 fw-semibold mb-0"><?= formatNumber($vehicleList[$i]->price) ?> €</p>
                                <a href="index.php?p=quote-request&vehicle=<?= $vehicleList[$i]->id ?>" class="btn btn-primary stretched-link">Devis</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </section>

    <section class="p-3 bg-150 shadow-sm rounded-3">
        <div class="d-flex justify-content-between mb-2">
            <h2 class="mb-0">Avis client</h2>
            <div class="d-flex gap-2">
                <a class="btn btn-primary" href="index.php?p=review&show=true">Déposer un avis</a>
                <a class="btn btn-secondary" href="index.php?p=review">Lire les avis</a>
            </div>
        </div>
        <div class="row g-2">
            <?php for ($i = 0; $i <= 3; $i++) : ?>
                <div class="col-md-6 col-xl-3">
                    <div class="bg-white shadow-sm rounded-3 p-2">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h5 class="mb-0"><?= $reviewList[$i]->fullName ?></h5>
                            <h5 class="mb-0 d-flex flex-row align-items-center" style="gap: 2px;">
                                <?php for ($e = 0; $e < $reviewList[$i]->rating; $e++) : ?>
                                    <i class="bi bi-star-fill" style="color: var(--bs-gray)"></i>
                                <?php endfor; ?>
                                <?php for ($e = 0; $e < (5 - $reviewList[$i]->rating); $e++) : ?>
                                    <i class="bi bi-star" style="color: var(--bs-gray)"></i>
                                <?php endfor; ?>
                            </h5>
                        </div>
                        <p class="mb-0"><?= $reviewList[$i]->review ?></p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </section>
</main>

<?php App::getTemplate("component/footer", $tplVarList); ?>

<?php App::getTemplate("common/document-bottom"); ?>