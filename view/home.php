<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="container-fluid">
    <div class="row gap-2">
        <section class="col-lg-6 p-2 bg-150 rounded-3">
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

        <section class="col p-2 bg-200 rounded-3">
            <h2>Véhicules d'occasion</h2>
            <div class="container-fluid overflow-y-auto">
                <div class="row pe-2" style="height: 40vh;">

                    <?php foreach ($vehicleList as $vehicle) : ?>
                        <div class="col-6 col-md-4 col-lg-6 col-xl-4 px-0 card">
                            <img class="card-img-top" src="/static/img/vehicle/<?= $vehicle->imagePath ?>" alt="Photo <?= $vehicle->brand . " " . $vehicle->model ?>">
                            <div class="card-body p-2 d-flex flex-column justify-content-between">
                                <h5 class="card-title"><?= $vehicle->brand . " " . $vehicle->model ?></h5>
                                <ul class="card-text list-unstyled mb-1">
                                    <li><?= $vehicle->entryYear ?></li>
                                    <li><?= $vehicle->mileage ?> km</li>
                                </ul>
                                <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
                                    <p class="fs-5 fw-semibold mb-0"><?= $vehicle->price ?> €</p>
                                    <button href="" class="btn btn-primary stretched-link">Devis</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
            <!-- <a class="btn btn-secondary" href="index.php?p=vehicle-detail">Voir les annonces</a> -->
        </section>

        <section class="col-12 p-2 bg-250 rounded-3">
            <div class="d-flex justify-content-between">
                <h2>Avis client</h2>
                <button class="btn btn-primary mb-2" type="button">Ajouter un avis</button>
            </div>
            <div class="container-fluid overflow-y-auto mx-0" style="height: 37.2vh;">
                <div class="row pe-2">

                    <?php foreach ($reviewList as $review) : ?>
                        <div class="col-md-6 col-lg-4 bg-white rounded-3 p-2">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h5 class="mb-0"><?= $review->fullName ?></h5>
                                <h5 class="mb-0 d-flex flex-row align-items-center"><?= $review->rating ?><svg style="height: 1.3rem; fill: var(--bs-tertiary-color);" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="m354-247 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-80l65-281L80-550l288-25 112-265 112 265 288 25-218 189 65 281-247-149L233-80Zm247-350Z"/></svg></h5>
                            </div>
                            <p class="mb-0"><?= $review->review ?></p>
                        </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </section>
    </div>
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>