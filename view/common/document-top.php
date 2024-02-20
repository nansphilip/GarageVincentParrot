<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= App::$pageTitle ?></title>
    <meta name="description" content="<?= App::$pageDescription ?>">
    <link rel="shortcut icon" href="/static/img/Logo.webp" type="image/x-icon">


    <!-- VENDORS -->
    <!-- Bootstrap 5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons 1.11.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!-- PROPRIETARY -->
    <link rel="stylesheet" href="<?= App::getCss("common.css") ?>">

    <?php if (isset(App::$staticFileList["css"])) {
        foreach (App::$staticFileList["css"] as $fileName) {
            echo '<link rel="stylesheet" href="' . App::getCss($fileName) . '">';
        }
    } ?>

</head>

<body class="d-flex flex-column row-gap-3 justify-content-center align-items-center p-4">