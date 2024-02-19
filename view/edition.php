<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="w-100 bg-100 p-2 rounded-3" style="min-height: calc(100vh - 100px - 4rem);">
    <div class="d-flex flex-row justify-content-between align-items-baseline">
        <h1><?= $title ?></h1>
        <h2><?= $userType ?></h2>
    </div>
    
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>