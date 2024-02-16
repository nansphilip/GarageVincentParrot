<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="container-fluid bg-150 rounded-3 px-3 py-2" style="height: calc(100vh - 100px - 4rem);">
    <h1><?= $title ?></h1>
    
    <div class="row h-100 justify-content-center align-items-center">
        <form class="col-xl-4 col-lg-6 col-md-8 col-sm-12 bg-100 rounded-3 p-3" method="POST" action="index.php?p=quote-request">
        <div class="d-flex gap-3 w-100">
            <div class="w-50 mb-3">
                <label for="lastName" class="form-label">Nom</label>
                <input type="text" class="form-control" id="lastName" name="lastName">
            </div>
            <div class="w-50 mb-3">
                <label for="firstName" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="firstName" name="firstName">
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="01 23 45 67 89">
        </div>

        <div class="<?= $vehicle ? "" : "d-none" ?> mb-3">
            <label for="vehicle" class="form-label">Véhicule</label>
            <input class="form-control" type="text" id="vehicle" name="vehicle" value="<?= $vehicle ? $vehicle['brand'] . " " . $vehicle['model'] . " (" . $vehicle['entry_year'] . ") - " . $vehicle['price'] . " €" : "" ?>" disabled readonly>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5"></textarea>
        </div>

        <div class="d-flex flex-row justify-content-center">
            <button type="submit" name="quote-request" class="btn btn-primary">Envoyer</button>
        </div>
        </form>
    </div>
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>