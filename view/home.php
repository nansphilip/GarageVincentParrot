<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="container-fluid">
    <div class="row gap-2">
        <section class="col-lg-6 p-2 bg-150 rounded-3">
            <h2>Services proposés</h2>
            <ul class="overflow-y-scroll mb-1 pe-2" style="height: 40vh;">

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
            <div class="container-fluid overflow-y-scroll ">
                <div class="row mb-0" style="height: 40vh;">

                    <?php foreach ($vehicleList as $vehicle) : ?>
                        <div class="col-md-6 col-lg-4 col-xl-3 px-0 card">
                            <img class="card-img-top" src="/static/img/vehicle/<?= $vehicle->imagePath ?>" alt="Photo <?= $vehicle->brand . " " . $vehicle->model ?>">
                            <div class="card-body p-2 d-flex flex-column justify-content-between">
                                <h5 class="card-title"><?= $vehicle->brand . " " . $vehicle->model ?></h5>
                                <ul class="card-text list-unstyled mb-1">
                                    <li><?= $vehicle->entryYear ?></li>
                                    <li><?= $vehicle->mileage ?> km</li>
                                </ul>
                                <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
                                    <p class="fs-5 fw-semibold mb-0"><?= $vehicle->price ?> €</p>
                                    <button href="" class="btn btn-primary">Devis</button>
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
                <button class="btn btn-primary" type="button">Ajouter un avis</button>
            </div>
            <ul class="">

                <?php ?>

            </ul>
        </section>
    </div>
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>