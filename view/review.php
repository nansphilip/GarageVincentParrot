<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="bg-150 rounded-3 p-2" style="min-height: calc(100vh - 100px - 4rem);">
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
                        <h5 class="mb-0 d-flex flex-row align-items-center" style="gap: 2px;">
                        <?php for ($i = 0; $i < (5 - $review->rating); $i++) : ?>
                            <svg height="1.1rem" width="1.1rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.94 47.94">
                                <path style="fill: none; stroke: var(--bs-gray-500); stroke-width:3;" d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757  c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042  c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685  c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528  c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956  C22.602,0.567,25.338,0.567,26.285,2.486z" />
                            </svg>
                        <?php endfor; ?>
                        <?php for ($i = 0; $i < $review->rating; $i++) : ?>
                            <svg height="1.1rem" width="1.1rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.94 47.94">
                                <path style="fill: var(--bs-gray-500); stroke: var(--bs-gray-500); stroke-width:3;" d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757  c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042  c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685  c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528  c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956  C22.602,0.567,25.338,0.567,26.285,2.486z" />
                            </svg>
                            <?php endfor; ?>
                        </h5>
                    </div>
                    <p class="mb-0"><?= $review->review ?></p>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>