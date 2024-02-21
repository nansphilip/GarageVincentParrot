<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="w-100 flex-1 d-flex flex-column overflow-auto w-100 bg-150 shadow-sm rounded-3 px-3 py-2">
    <h1><?= $title ?></h1>
    
    <div class="flex-1 d-flex flex-column justify-content-center align-items-center">
        <form class="bg-100 shadow-sm rounded-3 p-3" method="POST" action="index.php?p=login" style="min-width: 30%">
            <div class="mb-3">
                <label for="username" class="form-label">Identifiant</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="<?php if (!$connectionFailed) echo "d-none" ?>">
                <div class="alert alert-danger py-2" role="alert">Identifiant ou mot de passe incorrect(s).</div>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <button type="submit" name="login" class="btn btn-primary">Se connecter</button>
            </div>
        </form>
    </div>
</main>

<?php App::getTemplate("component/footer", $tplVarList); ?>

<?php App::getTemplate("common/document-bottom"); ?>