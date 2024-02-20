<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= App::$pageTitle ?></title>
    <link rel="shortcut icon" href="/static/img/Logo.webp" type="image/x-icon">

    <!-- VENDORS -->
    <!-- Bootstrap 5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- PROPRIETARY -->
    <link rel="stylesheet" href="<?= App::getCss("common.css") ?>">

    <?php if (isset(App::$staticFileList["css"])) {
        foreach (App::$staticFileList["css"] as $fileName) {
            echo '<link rel="stylesheet" href="' . App::getCss($fileName) . '">';
        }
    } ?>
</head>

<body class="p-4">

<h1>Error...</h1>

<?php if (ENVIRONMENT === "DEV"): ?>
    
    <p><b>Message:</b> <?= $th->getMessage(); ?></p>
    <p><b>File:</b> <?= $th->getFile(); ?></p>
    <p><b>Line:</b> <?= $th->getLine(); ?></p>
    <p><b>Trace:</b></p>
    <pre><code><?php print_r($th->getTrace()) ?></code></pre>


<?php else: ?>

    <p class="mb-0">An error happened.</p>
    <p>Please contact the administrator.</p>
    <a class="btn btn-primary" href="index.php">Retour Accueil</a>
    
<?php endif; ?>

    <!-- VENDORS -->
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Masonry plugin for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

    <!-- PROPRIETARY -->
    <?php if (isset(App::$staticFileList["js"])) {
        foreach (App::$staticFileList["js"] as $fileName) {
            echo '<script type="module" src="' . App::getJs($fileName) . '"></script>';
        }
    } ?>

</body>

</html>