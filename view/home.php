<?php App::getTemplate("common/document-top"); ?>

<?php
$tplVarList = [];
$tplVarList["page"] = $page;
$tplVarList["connected"] = $connected;
?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main>
    <div>
        <section class="bg-150 mb-2 p-2 rounded-3">
            <h2>Services proposés</h2>
            <ul class="folding-container overflow-hidden mb-0">
                <?php foreach ($serviceList as $service) : ?>
                    <li>
                        <div class="d-flex f-row justify-content-between align-items-baseline">
                            <h5><?= $service->name ?></h5>
                            <p><?= $service->price ?> €</p>
                        </div>
                        <p><?= $service->description ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="d-flex justify-content-center"><button class="unfold-button btn btn-secondary" type="button" onclick="unfold()">Voir plus</button></div>
            <div class="d-flex justify-content-center d-none"><button class="fold-button btn btn-secondary" type="button" onclick="fold()">Voir moins</button></div>
        </section>

        <section class="bg-150 mb-2 p-2 rounded-3">
            <h2>Annonces de voitures</h2>
            <div class="custom-grid list-unstyled">
                <div class="d-flex f-row bg-200 p-2 rounded-3">
                    <div class="overflow-hidden me-2 rounded-1" style="width: 8rem;">
                        <img class="object-fit-cover h-100 w-100" src="/static/img/voiture1.webp" alt="Peugeot 208">
                    </div>
                    <div class="car-desc me-2" style="width: calc(100% - 14rem);">
                        <h5 class="mb-0">Peugeot 208</h5>
                        <p class="mb-0">Compacte, économe, idéale pour la ville, moteur 1.2L essence, finition Allure, équipée de l'ADAS.</p>
                    </div>
                    <div class="d-flex align-items-center" style="width: 5rem;">
                        <button class="btn btn-primary w-100">Devis</button>
                    </div>
                </div>

                <div class="d-flex f-row bg-200 p-2 rounded-3">
                    <div class="overflow-hidden me-2 rounded-1" style="width: 8rem;">
                        <img class="object-fit-cover h-100 w-100" src="/static/img/voiture2.webp" alt="Renault Clio IV">
                    </div>
                    <div class="car-desc me-2" style="width: calc(100% - 14rem);">
                        <h5 class="mb-0">Renault Clio IV</h5>
                        <p class="mb-0">Dynamique, bleu marine, intérieur confortable, système multimédia avancé, parfaite pour les longs trajets.</p>
                    </div>
                    <div class="d-flex align-items-center" style="width: 5rem;">
                        <button class="btn btn-primary w-100">Devis</button>
                    </div>
                </div>

                <div class="d-flex f-row bg-200 p-2 rounded-3">
                    <div class="overflow-hidden me-2 rounded-1" style="width: 8rem;">
                        <img class="object-fit-cover h-100 w-100" src="/static/img/voiture3.webp" alt="Citroën C3">
                    </div>
                    <div class="car-desc me-2" style="width: calc(100% - 14rem);">
                        <h5 class="mb-0">Citroën C3</h5>
                        <p class="mb-0">Look unique avec Airbumps, intérieur spacieux, moteur diesel efficace, faible consommation, idéale pour les familles.</p>
                    </div>
                    <div class="d-flex align-items-center" style="width: 5rem;">
                        <button class="btn btn-primary w-100">Devis</button>
                    </div>
                </div>

                <div class="d-flex f-row bg-200 p-2 rounded-3">
                    <div class="overflow-hidden me-2 rounded-1" style="width: 8rem;">
                        <img class="object-fit-cover h-100 w-100" src="/static/img/voiture4.webp" alt="Fiat 500">
                    </div>
                    <div class="car-desc me-2" style="width: calc(100% - 14rem);">
                        <h5 class="mb-0">Fiat 500</h5>
                        <p class="mb-0">Icône du design italien, compacte et élégante, moteur 1.0L hybride, édition Lounge, toit panoramique.</p>
                    </div>
                    <div class="d-flex align-items-center" style="width: 5rem;">
                        <button class="btn btn-primary w-100">Devis</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="bg-150 p-2 rounded-3">
        <h2>Avis client</h2>
        <ul class="custom-grid list-unstyled mb-0">
            <li class="bg-200 p-2 rounded-3">
                <h5 class="mb-0">Marc Dupont</h5>
                <p class="mb-0">Service rapide et efficace, très satisfait!</p>
            </li>
            <li class="bg-200 p-2 rounded-3">
                <h5 class="mb-0">Julie Lefebvre</h5>
                <p class="mb-0">Accueil chaleureux, conseils professionnels.</p>
            </li>
            <li class="bg-200 p-2 rounded-3">
                <h5 class="mb-0">Xavier Martin</h5>
                <p class="mb-0">Prix compétitifs, travail de qualité. Je recommande!</p>
            </li>
            <li class="bg-200 p-2 rounded-3">
                <h5 class="mb-0">Sophie Bernard</h5>
                <p class="mb-0">Réparation rapide, garage très fiable.</p>
            </li>
        </ul>
    </section>
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>