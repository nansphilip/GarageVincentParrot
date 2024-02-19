<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="w-100 flex-1 d-flex flex-column overflow-auto gap-3 rounded-3">
    <section class="flex-1 d-flex flex-column overflow-hidden p-2 bg-100 rounded-3" style="min-height: 25vh">
        <h2>Services proposés</h2>

        <ul class="flex-1 overflow-y-auto mb-1 pe-2">
            <?php foreach ($serviceList as $service) : ?>
                <li>
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h5 class="mb-0"><?= $service->name ?></h5>
                        <p class="fw-semibold mb-0"><?= floor($service->price) ?> €</p>
                    </div>
                    <p><?= $service->description ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="p-2 bg-100 rounded-3">
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
                    <div class="h-100 card border border-0">
                        <img class="card-img-top" src="/static/img/vehicle/<?= $vehicleList[$i]->imagePath ?>" alt="Photo <?= $vehicleList[$i]->brand . " " . $vehicleList[$i]->model ?>">
                        <div class="card-body p-2 d-flex flex-column justify-content-between">
                            <h5 class="card-title"><?= $vehicleList[$i]->brand . " " . $vehicleList[$i]->model ?></h5>
                            <ul class="card-text list-unstyled mb-1">
                                <li><?= $vehicleList[$i]->entryYear ?></li>
                                <li><?= $vehicleList[$i]->mileage ?> km</li>
                            </ul>
                            <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
                                <p class="fs-5 fw-semibold mb-0"><?= $vehicleList[$i]->price ?> €</p>
                                <a href="index.php?p=quote-request&id=<?= $vehicleList[$i]->id ?>" class="btn btn-primary stretched-link">Devis</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </section>

    <section class="p-2 bg-100 rounded-3">
        <div class="d-flex justify-content-between mb-2">
            <h2 class="mb-0">Avis client</h2>
            <div class="d-flex gap-2">
                <a class="btn btn-primary" href="index.php?p=review#">Déposer un avis</a>
                <a class="btn btn-secondary" href="index.php?p=review">Lire les avis</a>
            </div>
        </div>
        <div class="row g-2">
            <?php for ($i = 0; $i <= 3; $i++) : ?>
                <div class="col-md-6 col-xl-3">
                    <div class="h-100 bg-white rounded-3 p-2">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h5 class="mb-0"><?= $reviewList[$i]->fullName ?></h5>
                            <h5 class="mb-0 d-flex flex-row align-items-center" style="gap: 2px;">
                                <?php for ($e = 0; $e < (5 - $reviewList[$i]->rating); $e++) : ?>
                                    <svg height="1.1rem" width="1.1rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.94 47.94">
                                        <path style="fill: none; stroke: var(--bs-gray-500); stroke-width:3;" d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757  c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042  c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685  c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528  c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956  C22.602,0.567,25.338,0.567,26.285,2.486z" />
                                    </svg>
                                <?php endfor; ?>
                                <?php for ($e = 0; $e < $reviewList[$i]->rating; $e++) : ?>
                                    <svg height="1.1rem" width="1.1rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.94 47.94">
                                        <path style="fill: var(--bs-gray-500); stroke: var(--bs-gray-500); stroke-width:3;" d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757  c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042  c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685  c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528  c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956  C22.602,0.567,25.338,0.567,26.285,2.486z" />
                                    </svg>
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

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>