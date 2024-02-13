<?php App::getTemplate("common/document-top");?>

<?php
$tplVarList = [];
$tplVarList["title"] = $title;
?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main>
    <h1><?= $title ?></h1>
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>