<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="index.php">
                    <img src="assets/img/logo.webp" alt="logo du site" width="50" height="44" class="d-inline-block align-text-top rounded">
                    L'hôpital de <span class="horror">l'eternité</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav text-center">
                        <a class="nav-link text-white" href="choise-nb.php?nb=5">Afficher 5 <span class="horror">pacients</span></a>
                        <a class="nav-link text-white" href="choise-nb.php?nb=10">Afficher 10 <span class="horror">pacients</span></a>
                        <a class="nav-link text-white" href="choise-nb.php?nb=15">Afficher 15 <span class="horror">pacients</span></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container mt-5 d-flex flex-wrap justify-content-evenly">