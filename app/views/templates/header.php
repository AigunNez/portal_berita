<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>Portal Berita</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicons ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/font-awesome.min.css">
    
    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/bootstrap.min.css">
    
    <!-- ==== Bar Rating Plugin ==== -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/fontawesome-stars-o.min.css">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/style.css">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/responsive-style.css">

    <!-- ==== Theme Color Stylesheet ==== -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/colors/theme-color-1.css" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/custom.css">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
    <!-- Preloader End -->
    <div class="wrapper">

    <!-- Header Section Start -->
        <header class="header--section header--style-4">

            <!-- Header Navbar Start -->
            <div class="header--navbar navbar bd--color-1 bg--color-0" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Header Logo Start -->
                        <div class="header--logo text-center">
                            <h1 class="h1">
                                <a href="<?= BASEURL ?>" class="btn-link">
                                    <img src="<?= BASEURL ?>/assets/img/logo.png" alt="Logo" style='width:65%'>
                                    <span class="hidden">Logo</span>
                                </a>
                            </h1>
                        </div>
                        <!-- Header Logo End -->
                    </div>

                    <!-- Header Search Form Start -->
                    <form action="#" class="header--search-form float--right" data-form="validate">
                        <input type="search" name="search" placeholder="Search..." class="header--search-control form-control" required>

                        <button type="submit" class="header--search-btn btn"><i class="header--search-icon fa fa-search"></i></button>
                    </form>
                    <!-- Header Search Form End -->

                    <div id="headerNav" class="navbar-collapse collapse float--right">
                        <!-- Header Menu Links Start -->
                        <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                            <?php

                            foreach ($data as $indeks => $row) {
                                if (array_key_exists('data_sub_header', $row)){
                                    ?>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $row['nama_kategori'] ?><i class="fa flm fa-angle-down"></i></a>

                                        <ul class="dropdown-menu">
                                            <?php
                                            $data_sub = $row['data_sub_header'];
                                            foreach ($data_sub as $indek => $subrow){
                                                ?>
                                                <li><a href="<?= BASEURL . "/kategori/" . strtolower($row['nama_kategori']) ?>"><?= $subrow['nama_kategori'] ?></a></li>
                                                <?php
                                            }

                                            ?>
                                        </ul>
                                    </li>
                                    <?php
                                } else {
                                    ?>
                                    <li><a href="<?= BASEURL . "/kategori/" . strtolower($row['nama_kategori']) ?>"><?= $row['nama_kategori'] ?></a></li>
                                    <?php
                                }
                            }

                            ?>
                            
                        </ul>
                        <!-- Header Menu Links End -->
                    </div>
                </div>
            </div>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->