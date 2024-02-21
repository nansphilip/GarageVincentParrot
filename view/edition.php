<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="w-100 flex-1 d-flex flex-column overflow-hidden bg-150 shadow-sm rounded-3 p-3">
    <div class="d-flex flex-row justify-content-between align-items-baseline">
        <h1><?= $title ?></h1>
        <h3><?= $userType ?></h3>
    </div>

    <!-- AJAX request fail -->
    <div class="modal ajax-fail-modal" tabindex="-1">
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

    <div class="flex-1 d-flex flex-column overflow-x-hidden overflow-y-auto">
        <div class="row g-3" data-masonry='{"percentPosition": true }'>
        <!-- <div class="row g-3"> -->

            <section id="addReview" class="col-md-6">
                <div class="bg-100 shadow-sm rounded-3 p-3">
                    <h5>Rédiger un avis</h5>
                    <div class="<?php if (!$validReview) echo "d-none" ?> my-3">
                        <div class="alert alert-success py-2 mb-0" role="alert">Avis envoyé avec succès !</div>
                    </div>
                    <form method="POST" action="index.php?p=edition#addReview">
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
                            <label for="messageReview" class="form-label">Message</label>
                            <textarea class="form-control" id="messageReview" name="message" rows="5" required></textarea>
                        </div>
                        <div class="d-flex flex-row justify-content-center">
                            <button type="submit" name="send-review" class="btn btn-primary">Envoyer</button>
                        </div>
                    </form>
                </div>
            </section>

            <section id="approveReview" class="col-md-6">
                <div class="bg-100 shadow-sm rounded-3 p-3">
                    <h5>Avis en attente</h5>
                    <div id="rowReview" class="row g-2">
                        <?php if ($reviewList != null) : ?>
                            <?php foreach ($reviewList as $review) : ?>
                                <div class="parent-element review col-12">
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
                                            <div class="d-flex gap-2">
                                                <button type="button" data-id="<?= $review->id ?>" data-action="approve" data-table="customer_review" class="ajax-button btn btn-primary p-0" style="height: 2rem; width: 2rem;"><i class="bi bi-check2"></i></button>
                                                <button type="button" data-id="<?= $review->id ?>" data-action="deny" data-table="customer_review" class="ajax-button btn btn-danger p-0" style="height: 2rem; width: 2rem;"><i class="bi bi-x-lg"></i></button>
                                                <div class="d-none alert alert-success mb-0 py-1 px-0 text-center" style="width: 4.5rem;">Accepté</div>
                                                <div class="d-none alert alert-danger mb-0 py-1 px-0 text-center" style="width: 4.5rem;">Refusé</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="col-12 d-flex justify-content-center">
                                <p class="mb-0">Aucun avis en attente</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <section id="addVehicle" class="col-md-6">
                <div class="bg-100 shadow-sm rounded-3 p-3">
                    <h5>Ajouter une voiture</h5>
                    <div class="<?php if (!$validVehicle) echo "d-none" ?> my-3">
                        <div class="alert alert-success py-2 mb-0" role="alert">Véhicule ajouté avec succès.</div>
                    </div>
                    <form method="POST" action="index.php?p=edition#addVehicle" enctype="multipart/form-data">
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label for="brand" class="form-label">Marque</label>
                                <input type="text" class="form-control" id="brand" name="brand" required>
                            </div>
                            <div class="col-6">
                                <label for="model" class="form-label">Modèle</label>
                                <input type="text" class="form-control" id="model" name="model" required>
                            </div>
                            <div class="col-4">
                                <label for="year" class="form-label">Année</label>
                                <input type="number" class="form-control" id="year" name="year" required>
                            </div>
                            <div class="col-4">
                                <label for="mileage" class="form-label">Kilométrage</label>
                                <input type="number" class="form-control" id="mileage" name="mileage" required>
                            </div>
                            <div class="col-4">
                                <label for="priceVehicle" class="form-label">Prix</label>
                                <input type="number" class="form-control" id="priceVehicle" name="price" required>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-row justify-content-between align-items-end">
                                    <label for="picture" class="form-label">Image</label>
                                    <div>
                                        <p class="mb-0 text-end">Type de fichier : <b>webp</b></p>
                                        <p class="mb-3 text-end">Format demandé : <b>840 x 700 pixels</b></p>
                                    </div>
                                </div>

                                <input type="file" class="form-control mb-2" id="picture" name="picture" required>
                                <div id="ext-invalid" class="d-none alert alert-danger py-2 mb-0" role="alert">Extension de fichier invalide.</div>
                                <div id="dim-invalid" class="d-none alert alert-danger py-2 mb-0" role="alert">Dimensions de l'image invalides.</div>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-center">
                            <button type="submit" name="addVehicle" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
                </div>
            </section>

            <section id="updateSchedule" class="<?php if ($userType == 'EMPLOYEE') echo 'd-none' ?> col-md-6">
                <div class="bg-100 shadow-sm rounded-3 p-3">
                    <h5>Modifier les horaires</h5>
                    <div class="<?php if (!$validSchedule) echo "d-none" ?> my-3">
                        <div class="alert alert-success py-2 mb-0" role="alert">Horaires mis à jour.</div>
                    </div>
                    <form class="d-flex flex-column gap-3" method="POST" action="index.php?p=edition#updateSchedule">
                        <div class="row g-3">
                            <div class="col-6">
                                <label for="monday" class="form-label">Lundi</label>
                                <input type="text" class="form-control" id="monday" name="monday" placeholder="<?= $scheduleList[0]->schedule ?>">
                            </div>
                            <div class="col-6">
                                <label for="tuesday" class="form-label">Mardi</label>
                                <input type="text" class="form-control" id="tuesday" name="tuesday" placeholder="<?= $scheduleList[1]->schedule ?>">
                            </div>
                            <div class="col-6">
                                <label for="wednesday" class="form-label">Mercredi</label>
                                <input type="text" class="form-control" id="wednesday" name="wednesday" placeholder="<?= $scheduleList[2]->schedule ?>">
                            </div>
                            <div class="col-6">
                                <label for="thursday" class="form-label">Jeudi</label>
                                <input type="text" class="form-control" id="thursday" name="thursday" placeholder="<?= $scheduleList[3]->schedule ?>">
                            </div>
                            <div class="col-6">
                                <label for="friday" class="form-label">Vendredi</label>
                                <input type="text" class="form-control" id="friday" name="friday" placeholder="<?= $scheduleList[4]->schedule ?>">
                            </div>
                            <div class="col-6">
                                <label for="saturday" class="form-label">Samedi</label>
                                <input type="text" class="form-control" id="saturday" name="saturday" placeholder="<?= $scheduleList[5]->schedule ?>">
                            </div>
                            <div class="col-6">
                                <label for="sunday" class="form-label">Dimanche</label>
                                <input type="text" class="form-control" id="sunday" name="sunday" placeholder="<?= $scheduleList[6]->schedule ?>">
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-center">
                            <button type="submit" name="updateSchedule" class="btn btn-primary">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </section>

            <section id="addService" class="<?php if ($userType == 'EMPLOYEE') echo 'd-none' ?> col-md-6">
                <div class="bg-100 shadow-sm rounded-3 p-3">
                    <h5>Ajouter des services</h5>
                    <div class="<?php if (!$validService) echo "d-none" ?> my-3">
                        <div class="alert alert-success py-2 mb-0" role="alert">Services mis à jour.</div>
                    </div>
                    <form method="POST" action="index.php?p=edition#addService">
                        <div class="row g-3">
                            <div class="col-8 mb-3">
                                <label for="title" class="form-label">Nom du service</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="priceService" class="form-label">Prix</label>
                                <input type="number" class="form-control" id="priceService" name="price" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="descriptionService" class="form-label">Description</label>
                            <textarea class="form-control" id="descriptionService" name="description" rows="2" required></textarea>
                        </div>

                        <div class="d-flex flex-row justify-content-center">
                            <button type="submit" name="addService" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
                </div>
            </section>

            <section id="deleteService" class="<?php if ($userType == 'EMPLOYEE') echo 'd-none' ?> col-md-6">
                <div class="bg-100 shadow-sm rounded-3 p-3">
                    <h5>Supprimer des services</h5>

                    <div class="d-flex flex-column gap-2 overflow-y-auto" style="max-height: 50vh;">
                        <?php foreach ($serviceList as $service) : ?>
                            <div class="parent-element bg-white rounded-3 shadow-sm p-2">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h5 class="mb-0"><?= $service->name ?></h5>
                                    <p class="fw-semibold mb-0"><?= formatNumber($service->price) ?> €</p>
                                </div>
                                <div class="d-flex gap-2 justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0"><?= $service->description ?></p>
                                    </div>
                                    <div>
                                        <button type="button" data-id="<?= $service->id ?>" data-action="delete" data-table="service" class="ajax-button btn btn-danger p-0" style="height: 2rem; width: 2rem;"><i class="bi bi-x-lg"></i></button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section id="addEmployee" class="<?php if ($userType == 'EMPLOYEE') echo 'd-none' ?> col-md-6">
                <div class="bg-100 shadow-sm rounded-3 p-3">
                    <h5>Ajouter un compte employé</h5>
                    <div class="<?php if (!$validInscription) echo "d-none" ?> my-3">
                        <div class="alert alert-success py-2 mb-0" role="alert">Utilisateur ajouté avec succès.</div>
                    </div>
                    <div class="<?php if ($alreadyUsed != 'email') echo "d-none" ?> my-3">
                        <div class="alert alert-danger py-2 mb-0" role="alert">Email déjà utilisé.</div>
                    </div>
                    <div class="<?php if ($alreadyUsed != 'username') echo "d-none" ?> my-3">
                        <div class="alert alert-danger py-2 mb-0" role="alert">Identifiant déjà utilisé.</div>
                    </div>
                    <form method="POST" action="index.php?p=edition#addEmployee">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Identifiant</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-flex flex-row justify-content-center">
                            <button type="submit" name="addEmployee" class="btn btn-primary">Créer l'utilisateur</button>
                        </div>
                    </form>

                </div>
            </section>

            <section id="deleteEmployee" class="<?php if ($userType == 'EMPLOYEE') echo 'd-none' ?> col-md-6">
                <div class="bg-100 shadow-sm rounded-3 p-3">
                    <h5>Supprimer un compte employé</h5>
                    <div id="rowReview" class="row g-2">
                        <?php if ($employeeList != null) : ?>
                            <?php foreach ($employeeList as $employee) : ?>
                                <div class="parent-element review col-12">
                                    <div class="bg-white rounded-3 shadow-sm p-2 d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="mb-0"><?= $employee->username ?></h5>
                                            <p class="mb-0"><?= $employee->email ?></p>
                                        </div>
                                        <div>
                                            <button type="button" data-id="<?= $employee->id ?>" data-action="delete" data-table="user" class="ajax-button btn btn-danger p-0" style="height: 2rem; width: 2rem;"><i class="bi bi-x-lg"></i></button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="col-12 d-flex justify-content-center">
                                <p class="mb-0">Aucun employé</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </div>
    </div>

</main>

<?php App::getTemplate("common/document-bottom"); ?>