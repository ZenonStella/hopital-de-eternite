<?php
require('assets/data/data.php');
require('inc/header.php');
if (isset($_GET['nb'])) {
    for ($i = 0; $i < $_GET['nb']; $i++) { ?>
        <div class="card mb-3" style="max-width: 340px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/<?= $data[$i]['img'] ?>.jpg" class="img-fluid rounded-start" alt="photo d'identité de <?= $data[$i]['name'] ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title"><?= $data[$i]['name'] ?></h5>
                        <div class="btns">
                            <a href="details.php?id=<?= $i ?>" class="btn btn-secondary btn-sm">+ d'infos</a>
                            <a type="button" class="btn btn-danger btn-sm horror" data-bs-toggle="modal" data-bs-target="#<?= $data[$i]['img'] ?>">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="<?= $data[$i]['img'] ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Addministration</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex">
                        <div class="img-modal me-5">
                            <img src="assets/img/<?= $data[$i]['img'] ?>.jpg" class="img-fluid rounded-start" alt="photo d'identité de <?= $data[$i]['name'] ?>">
                        </div>
                        <p class="horror">Etes vous sûr de vouloir supprimer le profil de <?= $data[$i]['name'] ?>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-danger horror">Continuer</button>
                    </div>
                </div>
            </div>
        </div>
<?php  }
} else {
    header('Location: 404.php');
    exit();
};

require('inc/footer.php');
