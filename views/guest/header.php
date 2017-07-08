<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Movie</title>
    <base href="<?php echo url(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Menu boczne-->
    <link rel="stylesheet" href="./assets/movie-template/styles/pushmenu.css">
    <!--Styl modyfikujący wygląd -->
    <link rel="stylesheet" type="text/css" href="./assets/movie-template/styles/slick.css"/>
    <link rel="stylesheet" href="./assets/movie-template/styles/style.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
</head>
<body class="normal">

<nav class="navbar fixed-top navbar-toggleable-md bg-inverse">
    <div class="site-menu">
        <ul>
            <li><a><i id="open" class="fa fa-2x fa-bars" aria-hidden="true"></i></a></li>
            <li><a class="navbar-brand mx-3" href="home"><i class="fa fa-bullseye"></i>Movie</a></li>
        </ul>
    </div>
</nav>

<div id="pm_menu" class="pm_close">

    <figure class="figure my-2">
        <img src="./upload/avatar/default.png" class="figure-img img-fluid rounded-circle"
             alt="A generic square placeholder image with rounded corners in a figure.">
        <figcaption class="figure-caption">
            <a href="join" class="btn btn-outline-primary">Dołącz Do Nas</a>
        </figcaption>
    </figure>

    <div class="menu-container">
        <ul class="menu__list">
            <li class="menu__item menu__item_active"><a class="menu_link" href="#">Home</a></li>
            <hr class="my-1"/>
            <li class="menu__item"><a href="#">Repertuar</a></li>
            <hr class="my-1"/>
            <li class="menu__item"><a href="#">Kontakt</a></li>
            <hr class="my-1"/>
        </ul>
    </div>


</div>