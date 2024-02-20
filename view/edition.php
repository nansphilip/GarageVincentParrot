<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="w-100 flex-1 d-flex flex-column overflow-hidden bg-150 shadow-sm rounded-3 p-3">
    <div class="d-flex flex-row justify-content-between align-items-baseline">
        <h1><?= $title ?></h1>
        <h3><?= $userType ?></h3>
    </div>

    <div class="flex-1 d-flex flex-column overflow-x-hidden overflow-y-auto">
        <div class="row g-3" data-masonry='{"percentPosition": true }'>
            <section class="col-md-6">
                <form class="bg-100 rounded-3 p-3" method="POST" action="index.php?p=edition">
                    <h5>Rédiger un avis</h5>
                    <div class="<?php if (!$sendConfirmation) echo "d-none" ?>">
                        <div class="alert alert-success py-2 mb-0" role="alert">Avis envoyé avec succès !</div>
                    </div>
                    <div class="row g-3">
                        <div class="col-lg">
                            <label for="firstName" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                        </div>
                        <div class="col-lg">
                            <label for="lastName" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                        </div>
                        <div class="col-lg d-flex flex-column justify-content-start align-items-start gap-2 mb-3">
                            <p class="mb-0">Note</p>
                            <div id="radio-rating" class="btn-group bg-white border">
                                <input type="radio" class="btn-check" name="rating" id="star-1" value="1" required>
                                <label class="btn border border-0" for="star-1"><i class="bi bi-star" style="color: var(--bs-gray)"></i></label>
                                <input type="radio" class="btn-check" name="rating" id="star-2" value="2">
                                <label class="btn border border-0" for="star-2"><i class="bi bi-star" style="color: var(--bs-gray)"></i></label>
                                <input type="radio" class="btn-check" name="rating" id="star-3" value="3">
                                <label class="btn border border-0" for="star-3"><i class="bi bi-star" style="color: var(--bs-gray)"></i></label>
                                <input type="radio" class="btn-check" name="rating" id="star-4" value="4">
                                <label class="btn border border-0" for="star-4"><i class="bi bi-star" style="color: var(--bs-gray)"></i></label>
                                <input type="radio" class="btn-check" name="rating" id="star-5" value="5">
                                <label class="btn border border-0" for="star-5"><i class="bi bi-star" style="color: var(--bs-gray)"></i></label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <div class="d-flex flex-row justify-content-center">
                        <button type="submit" name="send-review" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            </section>

            <section class="col-md-6">
                <div class="bg-100 rounded-3 p-3">
                    <h5>Avis en attente</h5>
                    <div class="row g-2" data-masonry='{"percentPosition": true }'>
                        <?php foreach ($reviewList as $review) : ?>
                            <div class="col-12">
                                <div class="bg-white rounded-3 shadow-sm p-2">
                                    <div class="d-flex justify-content-between align-items-baseline mb-1">
                                        <h5 class="mb-0"><?= $review->fullName ?></h5>
                                        <h5 class="mb-0 d-flex flex-row align-items-center" style="gap: 2px;">
                                            <?php for ($i = 0; $i < $review->rating; $i++) : ?>
                                                <i class="bi bi-star-fill" style="color: var(--bs-gray)"></i>
                                            <?php endfor; ?>
                                            <?php for ($i = 0; $i < (5 - $review->rating); $i++) : ?>
                                                <i class="bi bi-star" style="color: var(--bs-gray)"></i>
                                            <?php endfor; ?>
                                        </h5>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-between align-items-center">
                                        <p class="mb-0"><?= $review->review ?></p>
                                        <div class="d-flex gap-1">
                                            <button type="button" data-id="<?= $review->id ?>" class="approve-button btn btn-primary p-0" style="height: 2rem; width: 2rem;"><i class="bi bi-check2"></i></button>
                                            <button type="button" data-id="<?= $review->id ?>" class="deny-button btn btn-danger p-0" style="height: 2rem; width: 2rem;"><i class="bi bi-x-lg"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
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
            </section>

            <section class="col-md-6">
                <div class="bg-100 shadow-sm rounded-3 p-3">
                </div>
            </section>

            <section class="col-md-6">
                <div class="bg-100 shadow-sm rounded-3 p-3">
                </div>
            </section>
        </div>
    </div>

</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>