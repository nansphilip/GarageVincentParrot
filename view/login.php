<?php App::getTemplate("common/document-top");?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main style="height: calc(100vh - 100px - 3rem);">
    <h1><?= $title ?></h1>
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>