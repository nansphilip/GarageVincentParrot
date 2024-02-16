<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="d-flex flex-column gap-2">
    <section class="p-2 bg-100 rounded-3">
        <h2>Services proposés</h2>
        <ul class="overflow-y-auto mb-1 pe-2" style="height: 40vh;">
            <?php foreach ($serviceList as $service) : ?>
                <li>
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h5 class="mb-0"><?= $service->name ?></h5>
                        <p class="mb-0"><?= $service->price ?> €</p>
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
        <div class="container-fluid">
            <div class="row">
                <?php for ($i = 0; $i <= 3; $i++) : ?>
                    <div class="col-6 col-lg-3 px-0 card">
                        <img class="card-img-top" src="/static/img/vehicle/<?= $vehicleList[$i]->imagePath ?>" alt="Photo <?= $vehicleList[$i]->brand . " " . $vehicleList[$i]->model ?>">
                        <div class="card-body p-2 d-flex flex-column justify-content-between">
                            <h5 class="card-title"><?= $vehicleList[$i]->brand . " " . $vehicleList[$i]->model ?></h5>
                            <ul class="card-text list-unstyled mb-1">
                                <li><?= $vehicleList[$i]->entryYear ?></li>
                                <li><?= $vehicleList[$i]->mileage ?> km</li>
                            </ul>
                            <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
                                <p class="fs-5 fw-semibold mb-0"><?= $vehicleList[$i]->price ?> €</p>
                                <a href="index.php?p=quote-request&id=<?= $vehicleList[$i]->id ?>" class="btn btn-primary">Devis</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
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
        <div class="container-fluid mx-0">
            <div class="row">
                <?php for ($i = 0; $i <= 3; $i++) : ?>
                    <div class="col-md-6 col-lg-3 bg-white rounded-3 p-2">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h5 class="mb-0"><?= $reviewList[$i]->fullName ?></h5>
                            <h5 class="mb-0 d-flex flex-row align-items-center"><?= $reviewList[$i]->rating ?><svg style="height: 1.3rem; fill: var(--bs-tertiary-color);" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                    <path d="m354-247 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-80l65-281L80-550l288-25 112-265 112 265 288 25-218 189 65 281-247-149L233-80Zm247-350Z" />
                                </svg></h5>
                        </div>
                        <p class="mb-0"><?= $reviewList[$i]->review ?></p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>