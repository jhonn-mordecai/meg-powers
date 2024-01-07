<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meg Powers</title>

    <meta property="og:title" content="Meg Powers" />
    <meta property="og:description" content="The costume design and artistic work of Meg Powers." />
    <meta property="og:url" content="URL" />
    <meta property="og:image" content="<?= $BASE_URL; ?>/img/alice-home.jpg" />

    <link rel="icon" type="image/png" href="<?= $BASE_URL; ?>/favicon.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="<?= $BASE_URL; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= $BASE_URL; ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?= $BASE_URL; ?>/css/styles.css">
</head>
<body>
    <noscript>
        <h1 style="text-align:center;padding-top:100px;font-family:sans-serif;line-height:1.5;">You must enable Javascript on your browser to view this site!</h1>
        <style>
            header, main, footer {display:none;}
        </style>
    </noscript>
    <header>

        <section class="logo">
            <a href="<?= $BASE_URL; ?>" title="Meg Powers">
                <img src="<?= $BASE_URL; ?>/img/logo-vector.svg" alt="">
            </a>
        </section>

        <nav>
            <div class="nav-container">
                <div class="toggle-hidden">
                    <a href="" class="menu-toggle" title="Open Menu" aria-expanded="false" role="button">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" title="Costume Design" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="sr-only">Costume Design</span>
                            <span class="icon-costume-dsn"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li class="dropdown-item dropdown-head">Productions</li>
                            <li><a class="dropdown-item" href="<?= $BASE_URL; ?>/costume-design/alice" title="Alice production photos">Alice</a></li>
                            <li><a class="dropdown-item" href="<?= $BASE_URL; ?>/costume-design/cabaret" title="Cabaret production photos">Cabaret</a></li>
                            <li><a class="dropdown-item" href="<?= $BASE_URL; ?>/costume-design/lightning-thief" title="The Lightning Thief production photos">The Lightning Thief</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Constellations</a></li>
                            <li><a class="dropdown-item" href="#">Gods of the Mountains</a></li> -->
                            <li><a class="dropdown-item" href="<?= $BASE_URL; ?>/costume-design/twelfth-night" title="Twelfth Night production photos">Twelfth Night</a></li>
                            <!-- <li><hr class="dropdown-divider"></li> -->
                            <li class="dropdown-item dropdown-head">Theoretical</li>
                            <li><a class="dropdown-item" href="<?= $BASE_URL; ?>/costume-design/pinocchio" title="The Adventures of Pinocchio sketches">The Adventures of Pinocchio</a></li>
                            <li><a class="dropdown-item" href="<?= $BASE_URL; ?>/costume-design/airline-highway" title="Airline Highway sketches">Airline Highway</a></li>
                            <li><a class="dropdown-item" href="<?= $BASE_URL; ?>/costume-design/one-flea-spare" title="One Flea Spare sketches">One Flea Spare</a></li>
                            <li><a class="dropdown-item" href="<?= $BASE_URL; ?>/costume-design/peer-gynt" title="Peer Gynt sketches">Peer Gynt</a></li>
                            <li><a class="dropdown-item" href="<?= $BASE_URL; ?>/costume-design/sun-is-sinking-in-the-west" title="The Sun is Sinking in the West sketches">The Sun is Sinking in the West</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= $BASE_URL; ?>/illustration" class="nav-link" title="Illustration">
                            <span class="sr-only">Illustration</span>
                            <span class="icon-illustration"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $BASE_URL; ?>/craftwork" class="nav-link" title="Craftwork">
                            <span class="sr-only">Craftwork</span>
                            <span class="icon-craftwork"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://eyeballjellomold.bigcartel.com/" class="nav-link" title="Go Eyeball Jello Mold shop" target="_blank">
                            <span class="sr-only">Shop</span>
                            <span class="icon-shop"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>