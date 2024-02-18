<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="bg-150 rounded-3 p-2" style="min-height: calc(100vh - 100px - 4rem);">
    <h1><?= $title ?></h1>

    <form id="filters" class="d-flex gap-2 justify-content-between mb-2">
        <select name="brand" id="brand" class="form-select" style="width: 10rem;">
            <option value="" selected>Marque</option>
            <!-- AJAX Insert -->
        </select>
        <select name="model" id="model" class="form-select" style="width: 10rem;">
            <option value="" selected>Modèle</option>
            <!-- AJAX Insert -->
        </select>
        <div class="input-group">
            <span class="input-group-text">Kilométrage</span>
            <input type="number" class="form-control" name="mileage-min" id="mileage-min" step="1000">
            <span class="input-group-text">à</span>
            <input type="number" class="form-control" name="mileage-max" id="mileage-max" step="1000">
        </div>
        <div class="input-group">
            <span class="input-group-text">Année</span>
            <input type="number" class="form-control" name="year-min" id="year-min" step="1">
            <span class="input-group-text">à</span>
            <input type="number" class="form-control" name="year-max" id="year-max" step="1">
        </div>
        <div class="input-group">
            <span class="input-group-text">Prix</span>
            <input type="number" class="form-control" name="price-min" id="price-min" step="1000">
            <span class="input-group-text">à</span>
            <input type="number" class="form-control" name="price-max" id="price-max" step="1000">
        </div>
    </form>

    <div class="container-fluid mx-0">
        <div id="insert-ajax" class="row">

            <!-- AJAX Insert -->

        </div>
    </div>
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>