<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="w-100 flex-1 d-flex flex-column overflow-hidden bg-150 shadow-sm rounded-3 gap-3 p-3">

    <div class="d-flex flex-row justify-content-between align-items-center">
        <h1 class="mb-0"><?= $title ?></h1>
        <button type="button" id="reset-btn" class="btn btn-secondary">Réinitialiser les filtres</button>
    </div>

    <form id="filter-form" class="row g-2">
        <div class="col-6 col-md-3">
            <select class="w-100 form-select" name="brand" id="brand">
                <option value="" selected>Marque</option>
                <?php foreach ($brandList as $brand) : ?>
                    <option value="<?= $brand ?>"><?= $brand ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-6 col-md-3">
            <select class="w-100 form-select" name="model" id="model">
                <option value="" selected>Modèle</option>
                <?php foreach ($modelList as $model) : ?>
                    <option value="<?= $model ?>"><?= $model ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-12 col-md-6">
            <div class="w-100 input-group">
                <span class="input-group-text">Kilométrage</span>
                <input type="number" class="form-control" name="mileage-min" id="mileage-min" step="1000" min="<?= $mileageRange['min'] ?>" max="<?= $mileageRange['max'] ?>" placeholder="<?= $mileageRange['min'] ?>">
                <span class="input-group-text">à</span>
                <input type="number" class="form-control" name="mileage-max" id="mileage-max" step="1000" min="<?= $mileageRange['min'] ?>" max="<?= $mileageRange['max'] ?>" placeholder="<?= $mileageRange['max'] ?>">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="w-100 input-group">
                <span class="input-group-text">Année</span>
                <input type="number" class="form-control" name="year-min" id="year-min" step="1" min="<?= $yearRange['min'] ?>" max="<?= $yearRange['max'] ?>" placeholder="<?= $yearRange['min'] ?>">
                <span class="input-group-text">à</span>
                <input type="number" class="form-control" name="year-max" id="year-max" step="1" min="<?= $yearRange['min'] ?>" max="<?= $yearRange['max'] ?>" placeholder="<?= $yearRange['max'] ?>">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="w-100 input-group">
                <span class="input-group-text">Prix</span>
                <input type="number" class="form-control" name="price-min" id="price-min" step="1000" min="<?= $priceRange['min'] ?>" max="<?= $priceRange['max'] ?>" placeholder="<?= $priceRange['min'] ?>">
                <span class="input-group-text">à</span>
                <input type="number" class="form-control" name="price-max" id="price-max" step="1000" min="<?= $priceRange['min'] ?>" max="<?= $priceRange['max'] ?>" placeholder="<?= $priceRange['max'] ?>">
            </div>
        </div>
    </form>

    <div class="flex-1 overflow-x-hidden overflow-y-auto">
        <div id="insert-ajax" class="row g-3">
            
            <!-- Insert Placeholder before AJAX request -->
            <!-- AJAX request success -->

        </div>

        <!-- AJAX request fail -->
        <div class="modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Une erreur est survenue</h5>
                    </div>
                    <div class="modal-body">
                        <p>Impossible de charger les données : veuillez contacter un administrateur ou réessayer plus tard.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php App::getTemplate("component/footer", $tplVarList); ?>

<script>
    // Transfer PHP variables to JavaScript
    const brandModelList = <?= json_encode($brandModelList); ?>;
    sessionStorage.setItem('brandModelList', JSON.stringify(brandModelList));
</script>

<?php App::getTemplate("common/document-bottom"); ?>