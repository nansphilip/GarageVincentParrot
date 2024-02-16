<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="bg-150 rounded-3 p-2">
    <div class="d-flex justify-content-between">
        <h1><?= $title ?></h1>
        <button class="btn btn-primary mb-2" type="button">Déposer un avis</button>
    </div>

    <div class="container-fluid mx-0">
        <div class="row">

            <?php foreach ($reviewList as $review) : ?>
                <div class="col-md-6 col-lg-4 bg-white rounded-3 p-2">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h5 class="mb-0"><?= $review->fullName ?></h5>
                        <h5 class="mb-0 d-flex flex-row align-items-center"><?= $review->rating ?><svg style="height: 1.3rem; fill: var(--bs-tertiary-color);" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path d="m354-247 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-80l65-281L80-550l288-25 112-265 112 265 288 25-218 189 65 281-247-149L233-80Zm247-350Z" />
                            </svg></h5>
                    </div>
                    <p class="mb-0"><?= $review->review ?></p>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>