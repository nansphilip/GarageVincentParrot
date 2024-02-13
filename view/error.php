<?php App::getTemplate("common/document-top"); ?>

<h1>Error...</h1>

<?php if (ENVIRONMENT === "DEV"): ?>
    
    <p>Message: <?= $th->getMessage(); ?></p>
    <p>File: <?= $th->getFile(); ?></p>
    <p>Line: <?= $th->getLine(); ?></p>
    <p>Trace:</p>
    <pre><code><?php print_r($th->getTrace()) ?></code></pre>

<?php else: ?>

    <p>An error happened...</p>
    <p>Please contact the administrator.</p>
    
<?php endif; ?>

<?php App::getTemplate("common/document-bottom"); ?>