<?php App::getTemplate("common/document-top"); ?>

<?php
$tplVarList = [];
$tplVarList["title"] = $title;
?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main>
    <div class="">
        <section class="bg-200 mb-2 p-2 rounded-3">
            <h2>Services proposés</h2>
            <ul class="mb-0">
                <li>Vidange d'huile</li>
                <li>Remplacement des plaquettes de frein</li>
                <li>Contrôle et réparation de la climatisation</li>
                <li>Diagnostic électronique</li>
                <li>Révision générale</li>
                <li>Changement de pneus</li>
                <li>Réparation de carrosserie</li>
                <li>Contrôle technique</li>
            </ul>
        </section>
        
        <section class="bg-200 mb-2 p-2 rounded-3">
            <h2>Annonces de voitures</h2>
            <div class="custom-grid list-unstyled">
                <div class="d-flex f-row bg-100 p-2 rounded-3">
                    <div class="overflow-hidden me-2 rounded-1" style="width: 8rem;">
                        <img class="object-fit-cover h-100 w-100" src="/static/img/voiture1.jpg" alt="Peugeot 208">
                    </div>
                    <div class="car-desc me-2" style="width: calc(100% - 14rem);">
                        <h5 class="mb-0">Peugeot 208</h5>
                        <p class="mb-0">Compacte, économe, idéale pour la ville, moteur 1.2L essence, finition Allure, équipée de l'ADAS.</p>
                    </div>
                    <div class="d-flex align-items-center" style="width: 5rem;">
                        <button class="btn btn-primary w-100">Devis</button>
                    </div>
                </div>

                <div class="d-flex f-row bg-100 p-2 rounded-3">
                    <div class="overflow-hidden me-2 rounded-1" style="width: 8rem;">
                        <img class="object-fit-cover h-100 w-100" src="/static/img/voiture2.jpg" alt="Renault Clio IV">
                    </div>
                    <div class="car-desc me-2" style="width: calc(100% - 14rem);">
                        <h5 class="mb-0">Renault Clio IV</h5>
                        <p class="mb-0">Dynamique, bleu marine, intérieur confortable, système multimédia avancé, parfaite pour les longs trajets.</p>
                    </div>
                    <div class="d-flex align-items-center" style="width: 5rem;">
                        <button class="btn btn-primary w-100">Devis</button>
                    </div>
                </div>

                <div class="d-flex f-row bg-100 p-2 rounded-3">
                    <div class="overflow-hidden me-2 rounded-1" style="width: 8rem;">
                        <img class="object-fit-cover h-100 w-100" src="/static/img/voiture3.jpg" alt="Citroën C3">
                    </div>
                    <div class="car-desc me-2" style="width: calc(100% - 14rem);">
                        <h5 class="mb-0">Citroën C3</h5>
                        <p class="mb-0">Look unique avec Airbumps, intérieur spacieux, moteur diesel efficace, faible consommation, idéale pour les familles.</p>
                    </div>
                    <div class="d-flex align-items-center" style="width: 5rem;">
                        <button class="btn btn-primary w-100">Devis</button>
                    </div>
                </div>

                <div class="d-flex f-row bg-100 p-2 rounded-3">
                    <div class="overflow-hidden me-2 rounded-1" style="width: 8rem;">
                        <img class="object-fit-cover h-100 w-100" src="/static/img/voiture4.jpg" alt="Fiat 500">
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

    <section class="bg-200 p-2 rounded-3">
        <h2>Avis client</h2>
        <ul class="custom-grid list-unstyled mb-0">
            <li class="bg-100 p-2 rounded-3">
                <h5 class="mb-0">Marc Dupont</h5>
                <p class="mb-0">Service rapide et efficace, très satisfait!</p>
            </li>
            <li class="bg-100 p-2 rounded-3">
                <h5 class="mb-0">Julie Lefebvre</h5>
                <p class="mb-0">Accueil chaleureux, conseils professionnels.</p>
            </li>
            <li class="bg-100 p-2 rounded-3">
                <h5 class="mb-0">Xavier Martin</h5>
                <p class="mb-0">Prix compétitifs, travail de qualité. Je recommande!</p>
            </li>
            <li class="bg-100 p-2 rounded-3">
                <h5 class="mb-0">Sophie Bernard</h5>
                <p class="mb-0">Réparation rapide, garage très fiable.</p>
            </li>
        </ul>
    </section>
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>