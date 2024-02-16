<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="bg-150 rounded-3 p-2">
    <h1><?= $title ?></h1>
    <div class="d-flex gap-2 justify-content-between mb-2">
        <?php foreach ($vehicleBrandModelList as $brand => $model) : ?>
            <div class="d-none brandModelMatch">
                <span class="brand"><?= $brand ?></span>
                <span class="model"><?= $model ?></span>
            </div>
        <?php endforeach; ?>
        <select name="brand" id="brand" class="form-select" style="width: 10rem;">
            <option selected>Marque</option>
            <?php foreach ($vehicleBrandList as $brand) : ?>
                <option><?= $brand ?></option>
            <?php endforeach; ?>
        </select>
        <select name="model" id="model" class="form-select" style="width: 10rem;">
            <option selected>Modèle</option>
            <?php foreach ($vehicleModelList as $model) : ?>
                <option><?= $model ?></option>
            <?php endforeach; ?>
        </select>
        <div class="input-group">
            <span class="input-group-text">Kilométrage</span>
            <input type="number" class="form-control" step="1000" min="<?= $vehicleMileageRange['min'] ?>" max="<?= $vehicleMileageRange['max'] ?>" name="mileageMin" placeholder="<?= $vehicleMileageRange['min'] ?>">
            <span class="input-group-text">à</span>
            <input type="number" class="form-control" step="1000" min="<?= $vehicleMileageRange['min'] ?>" max="<?= $vehicleMileageRange['max'] ?>" name="mileageMax" placeholder="<?= $vehicleMileageRange['max'] ?>">
        </div>
        <div class="input-group">
            <span class="input-group-text">Année</span>
            <input type="number" class="form-control" step="1" min="<?= $vehicleYearRange['min'] ?>" max="<?= $vehicleYearRange['max'] ?>" name="yearMin" placeholder="<?= $vehicleYearRange['min'] ?>">
            <span class="input-group-text">à</span>
            <input type="number" class="form-control" step="1" min="<?= $vehicleYearRange['min'] ?>" max="<?= $vehicleYearRange['max'] ?>" name="yearMax" placeholder="<?= $vehicleYearRange['max'] ?>">
        </div>
        <div class="input-group">
            <span class="input-group-text">Prix</span>
            <input type="number" class="form-control" step="1000" min="<?= $vehiclePriceRange['min'] ?>" max="<?= $vehiclePriceRange['max'] ?>" name="priceMin" placeholder="<?= $vehiclePriceRange['min'] ?>">
            <span class="input-group-text">à</span>
            <input type="number" class="form-control" step="1000" min="<?= $vehiclePriceRange['min'] ?>" max="<?= $vehiclePriceRange['max'] ?>" name="priceMax" placeholder="<?= $vehiclePriceRange['max'] ?>">
        </div>
    </div>

    <div class="container-fluid mx-0">
        <div class="row">
            <?php foreach ($vehicleList as $vehicle) : ?>
                <div class="col-6 col-lg-3 px-0 card">
                    <img class="card-img-top" src="/static/img/vehicle/<?= $vehicle->imagePath ?>" alt="Photo <?= $vehicle->brand . " " . $vehicle->model ?>">
                    <div class="card-body p-2 d-flex flex-column justify-content-between">
                        <h5 class="card-title"><?= $vehicle->brand . " " . $vehicle->model ?></h5>
                        <ul class="card-text list-unstyled mb-1">
                            <li><?= $vehicle->entryYear ?></li>
                            <li><?= $vehicle->mileage ?> km</li>
                        </ul>
                        <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
                            <p class="fs-5 fw-semibold mb-0"><?= $vehicle->price ?> €</p>
                            <a href="index.php?p=quote-request&id=<?= $vehicle->id ?>" class="btn btn-primary">Devis</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>