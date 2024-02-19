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