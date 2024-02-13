<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= App::$pageTitle ?></title>

    
    <!-- VENDORS -->
    <!-- Bootstrap 5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- PROPRIETARY -->
    <link rel="stylesheet" href="<?= App::getCss("common.css") ?>">

    <?php foreach (App::$staticFileList["css"] as $fileName) { ?>
        <link rel="stylesheet" href="<?= App::getCss($fileName) ?>">
    <?php } ?>

    <?php foreach (App::$staticFileList["js"] as $fileName) { ?>
        <script src="<?= App::getJs($fileName) ?>"></script>
    <?php } ?>

</head>

<body class="p-3">
