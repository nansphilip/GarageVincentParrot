    <!-- VENDORS -->
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- PROPRIETARY -->
    <?php if (isset(App::$staticFileList["js"])) {
        foreach (App::$staticFileList["js"] as $fileName) {
            echo '<script type="module" src="' . App::getJs($fileName) . '"></script>';
        }
    } ?>

</body>

</html>