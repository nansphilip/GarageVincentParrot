<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="w-100 flex-1 d-flex flex-column overflow-auto w-100 bg-150 rounded-3 p-3">
    <h1><?= $title ?></h1>

    <div class="flex-1 d-flex flex-column justify-content-center align-items-center">
        <?php if (isset($popup) && $popup === true) : ?>
            <div class="alert alert-success" role="alert">
                Devis envoyé avec succès !
            </div>
            <a class="btn btn-primary" href="index.php">Retour à la Page d'accueil</a>
        <?php else : ?>
            <form class="bg-100 rounded-3 p-3" method="POST" action="index.php?p=quote-request">
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
        <?php endif; ?>
    </div>
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>