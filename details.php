<?php
require('assets/data/data.php');
require('inc/header.php');
if (isset($_GET['id'])) {
    if (array_key_exists($_GET['id'], $data)) {


        $value = $data[$_GET['id']];
?>
        <a href="index.php" class="btn btn-secondary">Retour à la page d'accueil</a>
        <div class="choix rounded-4">
            <h3 class="text-center my-5"><?= $value['name'] ?></h3>
            <div class="px-5 mx-5 d-flex justify-content-evenly align-items-center">
                <div class="img-id ms-5">
                    <img class="mb-4 rounded-5 img" src="assets/img/<?= $value['img'] ?>.jpg" alt="">
                </div>
                <div class="info me-5">
                    <p>Téléphone : <?= $value['phone'] ?></p>
                    <p>Adresse Mail : <?= $value['email'] ?></p>
                    <p>Adresse : <?= $value['address'] ?></p>
                    <p>Code postal : <?= $value['postalZip'] ?></p>
                    <p>Pays : <?= $value['country'] ?></p>
                    <p class="horror">Etat : <?= $value['etat'] ?></p>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <a type="button" class="btn btn-danger horror" data-bs-toggle="modal" data-bs-target="#<?= $value['img'] ?>">Supprimer</a>
            </div>
        </div>

        <div class="modal" id="<?= $value['img'] ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Addministration</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex">
                        <div class="img-modal me-5">
                            <img src="assets/img/<?= $value['img'] ?>.jpg" class="img-fluid rounded-start" alt="photo d'identité de <?= $value['name'] ?>">
                        </div>
                        <p class="horror">Etes vous sûr de vouloir supprimer le profil de <?= $value['name'] ?>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-danger horror">Continuer</button>
                    </div>
                </div>
            </div>
        </div>
    <?php  } else { ?>
        <div class="horreurNotExist p-5 d-flex flex-column align-items-center justify-content-between">
            <div class="error404 text-white py-5 fs-2 mb-5">
                <h1 class="horror">Cette personne n'existe pas</h1>
            </div>
            <div class="redirect py-5">
                <a href="index.php" class="btn btn-secondary horror">Retour à la page d'accueil</a>
            </div>
        </div>
<?php }
} else {
    header('Location: 404.php');
    exit();
};








require('inc/footer.php');
