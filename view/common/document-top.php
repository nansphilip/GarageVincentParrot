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

    <?php
    if (isset(App::$staticFileList["css"])) {
        foreach (App::$staticFileList["css"] as $fileName) {
            echo '<link rel="stylesheet" href="' . App::getCss($fileName) . '">';
        }
    }
    if (isset(App::$staticFileList["js"])) {
        foreach (App::$staticFileList["js"] as $fileName) {
            echo '<script src="' . App::getJs($fileName) . '"></script>';
        }
    } ?>

</head>

<body class="p-3">