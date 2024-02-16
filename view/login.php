<?php App::getTemplate("common/document-top"); ?>

<?php App::getTemplate("component/header", $tplVarList); ?>

<main class="container-fluid bg-150 rounded-3 px-3 py-2" style="height: calc(100vh - 100px - 4rem);">
    <h1><?= $title ?></h1>
    
    <div class="row h-100 justify-content-center align-items-center">
        <form class="col-xl-4 col-lg-6 col-md-8 col-sm-12 bg-100 rounded-3 p-3" method="POST" action="index.php?p=login">
            <div class="mb-3">
                <label for="username" class="form-label">Identifiant</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="<?php if (!$connectionFailed) echo "d-none" ?>">
                <p>Identifiant ou mot de passe incorrect(s).</p>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <button type="submit" name="login" class="btn btn-primary">Se connecter</button>
            </div>
        </form>
    </div>
</main>

<?php App::getTemplate("component/footer"); ?>

<?php App::getTemplate("common/document-bottom"); ?>