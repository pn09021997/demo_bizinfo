<?php
include_once("./config.php");
include_once("./public/models/db.php");
include_once("./public/models/carts.php");


$cart = new Cart;
$getAll = $cart::getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Bizinfo</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>

<body>

    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.php" style="text-decoration: none;">Bizinfo</a>

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.php">Yavin</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link" href="#details">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#newBusiness">New Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#featuredBusiness">Featured Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blogs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Drop</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="article.php">Article Details</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="./sample-page/fashion-sample-page/index.html">Fashion</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="./sample-page/education-sample-page/index.html">Education</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="./sample-page/foods-sample-page/index.html">Foods</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./search-page/index.html"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="#contact">Contact us</a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <input type="text" class="my-5"/>
        <img class="decoration-star" src="images/decoration-star.svg" alt="alternative">
        <img class="decoration-star-2" src="images/decoration-star.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-5">
                    <div class="text-container">
                        <h1 class="h1-large">Bizinfo</h1>
                        <p class="p-large">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eligendi
                            dolores quam omnis inventore necessitatibus corporis ea perferendis, architecto corrupti
                            facilis. Quis perspiciatis quasi facere autem ullam dolor voluptate assumenda.</p>
                        <a class="btn-solid-lg" href="#introduction">More details</a>
                        <a class="btn-outline-lg" href="#contact">Contact us</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/header.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Statistics -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Counter -->
                    <div class="counter-container">
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="231" data-purecounter-duration="3" class="purecounter">1</div>
                            <div class="counter-info">Happy Customers</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="385" data-purecounter-duration="1.5" class="purecounter">1</div>
                            <div class="counter-info">Issues Solved</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="159" data-purecounter-duration="3" class="purecounter">1</div>
                            <div class="counter-info">Good Reviews</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="128" data-purecounter-duration="3" class="purecounter">1</div>
                            <div class="counter-info">Case Studies</div>
                        </div> <!-- end of counter-cell -->
                    </div> <!-- end of counter-container -->
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->


    <!-- Introduction -->
    <div id="introduction" class="basic-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <h2>Bizinfo Introduce</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil et quae maiores illum labore
                        minus, officiis architecto cupiditate itaque nobis natus excepturi illo alias asperiores!
                        Excepturi blanditiis porro velit recusandae.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of introduction -->


    <!-- Details 1 -->
    <div id="details" class="basic-2">
        <img class="decoration-star" src="images/decoration-star.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-1.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="text-container">
                        <h2>Our Target</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="d-flex">
                                <i class="fas fa-square"></i>
                                <div class="flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsam maiores commodi veritatis nisi aut magnam quisquam, blanditiis suscipit, dignissimos tempora laboriosam, eum repellat? Corporis delectus vel tenetur maxime sint.</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-square"></i>
                                <div class="flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsam maiores commodi veritatis nisi aut magnam quisquam, blanditiis suscipit, dignissimos tempora laboriosam, eum repellat? Corporis delectus vel tenetur maxime sint.</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-square"></i>
                                <div class="flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsam maiores commodi veritatis nisi aut magnam quisquam, blanditiis suscipit, dignissimos tempora laboriosam, eum repellat? Corporis delectus vel tenetur maxime sint.</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->


    <!-- Services -->
    <div id="services" class="cards-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>Services that we offer</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dicta vel rerum, sapiente neque magnam sequi praesentium, perspiciatis, sit labore adipisci enim explicabo dolor assumenda delectus suscipit similique magni rem.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="d-flex">
                                <i class="fas fa-square"></i>
                                <div class="flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-square"></i>
                                <div class="flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-square"></i>
                                <div class="flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="card-container">

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <span class="fas fa-rocket"></span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Service 1</h5>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <span class="far fa-clock"></span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Service 12</h5>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <span class="far fa-comments"></span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Service 3</h5>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <span class="fas fa-tools"></span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Service 4</h5>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <span class="fas fa-chart-pie"></span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Service 5</h5>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <span class="far fa-chart-bar"></span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Service 6</h5>
                            </div>
                        </div>
                        <!-- end of card -->

                    </div> <!-- end of container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->



    <!-- New Business -->
    <div id="newBusiness" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">New Business</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    <div class="card">
                        <img class="img-fluid" src="https://source.unsplash.com/500x300/?business" alt="alternative">
                        <div class="card-body">
                            <h5 class="card-title">
                                New Business 1
                            </h5>
                            <p class="card-text card-area">
                            <div class="row">
                                <div class="col-md-6"> <i class="fas fa-location-dot"></i> Area ... </div>
                                <div class="col-md-6 text-end"> 123546 </div>
                            </div>
                            </p>
                            <p class="card-text">
                                <i class="fas fa-user"></i> Phuong Nguyen
                            </p>
                            <p class="card-text"> Address ... </p>
                            <a class="blue no-line" href="article.php">Read more</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="img-fluid" src="https://source.unsplash.com/500x300/?business" alt="alternative">
                        <div class="card-body">
                            <h5 class="card-title">
                                New Business 2
                            </h5>
                            <p class="card-text card-area">
                            <div class="row">
                                <div class="col-md-6"> <i class="fas fa-location-dot"></i> Area ... </div>
                                <div class="col-md-6 text-end"> 123546 </div>
                            </div>
                            </p>
                            <p class="card-text">
                                <i class="fas fa-user"></i> Phuong Nguyen
                            </p>
                            <p class="card-text"> Address ... </p>
                            <a class="blue no-line" href="article.php">Read more</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="img-fluid" src="https://source.unsplash.com/500x300/?business" alt="alternative">
                        <div class="card-body">
                            <h5 class="card-title">
                                New Business 3
                            </h5>
                            <p class="card-text card-area">
                            <div class="row">
                                <div class="col-md-6"> <i class="fas fa-location-dot"></i> Area ... </div>
                                <div class="col-md-6 text-end"> 123546 </div>
                            </div>
                            </p>
                            <p class="card-text">
                                <i class="fas fa-user"></i> Phuong Nguyen
                            </p>
                            <p class="card-text"> Address ... </p>
                            <a class="blue no-line" href="article.php">Read more</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="img-fluid" src="https://source.unsplash.com/500x300/?business" alt="alternative">
                        <div class="card-body">
                            <h5 class="card-title">
                                New Business 4
                            </h5>
                            <p class="card-text card-area">
                            <div class="row">
                                <div class="col-md-6"> <i class="fas fa-location-dot"></i> Area ... </div>
                                <div class="col-md-6 text-end"> 123546 </div>
                            </div>
                            </p>
                            <p class="card-text">
                                <i class="fas fa-user"></i> Phuong Nguyen
                            </p>
                            <p class="card-text"> Address ... </p>
                            <a class="blue no-line" href="article.php">Read more</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="img-fluid" src="https://source.unsplash.com/500x300/?business" alt="alternative">
                        <div class="card-body">
                            <h5 class="card-title">
                                New Business 5
                            </h5>
                            <p class="card-text card-area">
                            <div class="row">
                                <div class="col-md-6"> <i class="fas fa-location-dot"></i> Area ... </div>
                                <div class="col-md-6 text-end"> 123546 </div>
                            </div>
                            </p>
                            <p class="card-text">
                                <i class="fas fa-user"></i> Phuong Nguyen
                            </p>
                            <p class="card-text"> Address ... </p>
                            <a class="blue no-line" href="article.php">Read more</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="img-fluid" src="https://source.unsplash.com/500x300/?business" alt="alternative">
                        <div class="card-body">
                            <h5 class="card-title">
                                New Business 6
                            </h5>
                            <p class="card-text card-area">
                            <div class="row">
                                <div class="col-md-6"> <i class="fas fa-location-dot"></i> Area ... </div>
                                <div class="col-md-6 text-end"> 123546 </div>
                            </div>
                            </p>
                            <p class="card-text">
                                <i class="fas fa-user"></i> Phuong Nguyen
                            </p>
                            <p class="card-text"> Address ... </p>
                            <a class="blue no-line" href="article.php">Read more</a>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of new business -->


    <!-- Invitation -->
    <div class="basic-4 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Our team of highly skilled designers and interior construction workers can deliver above your
                        level of expections</h4>
                    <a class="btn-solid-lg" href="#contact">Get quote</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of invitation -->


    <!-- Featured Business -->
    <div id="featuredBusiness" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Featured Business</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    <div class="card">
                        <img class="img-fluid" src="https://source.unsplash.com/500x300/?business" alt="alternative">
                        <div class="card-body">
                            <h5 class="card-title">
                                Featured Business 1
                            </h5>
                            <p class="card-text card-area">
                            <div class="row">
                                <div class="col-md-6"> <i class="fas fa-location-dot"></i> Area ... </div>
                                <div class="col-md-6 text-end"> 123546 </div>
                            </div>
                            </p>
                            <p class="card-text">
                                <i class="fas fa-user"></i> Phuong Nguyen
                            </p>
                            <p class="card-text"> Address ... </p>
                            <a class="blue no-line" href="article.php">Read more</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="img-fluid" src="https://source.unsplash.com/500x300/?business" alt="alternative">
                        <div class="card-body">
                            <h5 class="card-title">
                                Featured Business 2
                            </h5>
                            <p class="card-text card-area">
                            <div class="row">
                                <div class="col-md-6"> <i class="fas fa-location-dot"></i> Area ... </div>
                                <div class="col-md-6 text-end"> 123546 </div>
                            </div>
                            </p>
                            <p class="card-text">
                                <i class="fas fa-user"></i> Phuong Nguyen
                            </p>
                            <p class="card-text"> Address ... </p>
                            <a class="blue no-line" href="article.php">Read more</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="img-fluid" src="https://source.unsplash.com/500x300/?business" alt="alternative">
                        <div class="card-body">
                            <h5 class="card-title">
                                Featured Business 3
                            </h5>
                            <p class="card-text card-area">
                            <div class="row">
                                <div class="col-md-6"> <i class="fas fa-location-dot"></i> Area ... </div>
                                <div class="col-md-6 text-end"> 123546 </div>
                            </div>
                            </p>
                            <p class="card-text">
                                <i class="fas fa-user"></i> Phuong Nguyen
                            </p>
                            <p class="card-text"> Address ... </p>
                            <a class="blue no-line" href="article.php">Read more</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="img-fluid" src="https://source.unsplash.com/500x300/?business" alt="alternative">
                        <div class="card-body">
                            <h5 class="card-title">
                                Featured Business 4
                            </h5>
                            <p class="card-text card-area">
                            <div class="row">
                                <div class="col-md-6"> <i class="fas fa-location-dot"></i> Area ... </div>
                                <div class="col-md-6 text-end"> 123546 </div>
                            </div>
                            </p>
                            <p class="card-text">
                                <i class="fas fa-user"></i> Phuong Nguyen
                            </p>
                            <p class="card-text"> Address ... </p>
                            <a class="blue no-line" href="article.php">Read more</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="img-fluid" src="https://source.unsplash.com/500x300/?business" alt="alternative">
                        <div class="card-body">
                            <h5 class="card-title">
                                Featured Business 5
                            </h5>
                            <p class="card-text card-area">
                            <div class="row">
                                <div class="col-md-6"> <i class="fas fa-location-dot"></i> Area ... </div>
                                <div class="col-md-6 text-end"> 123546 </div>
                            </div>
                            </p>
                            <p class="card-text">
                                <i class="fas fa-user"></i> Phuong Nguyen
                            </p>
                            <p class="card-text"> Address ... </p>
                            <a class="blue no-line" href="article.php">Read more</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="img-fluid" src="https://source.unsplash.com/500x300/?business" alt="alternative">
                        <div class="card-body">
                            <h5 class="card-title">
                                Featured Business 6
                            </h5>
                            <p class="card-text card-area">
                            <div class="row">
                                <div class="col-md-6"> <i class="fas fa-location-dot"></i> Area ... </div>
                                <div class="col-md-6 text-end"> 123546 </div>
                            </div>
                            </p>
                            <p class="card-text">
                                <i class="fas fa-user"></i> Phuong Nguyen
                            </p>
                            <p class="card-text"> Address ... </p>
                            <a class="blue no-line" href="article.php">Read more</a>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of featured business -->


    <!-- Our Blog -->
    <div class="container">
        <div id="blog" class="our-blogs my-5">
            <div class="container-fluid">
                <div class="our-blogs-header text-center mb-5">
                    <h1 class="title">Our Blogs</h1>
                    <p class="desc">Find a bright ideal to suit your taste with our great selection of suspension, wall,
                        floor and table lights.</p>
                </div>

                <div class="blog-item mobile-hidden">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="blog-item-content">
                                <div class="blog-item-header">
                                    <img src="https://cdn.shopify.com/s/files/1/0076/1708/5530/articles/blog11_1728x.jpg?v=1609344075" style="height: 415px; width: 420px;" alt="" class="img-fluid">
                                    <h4 class="title my-3">
                                        Blog 1
                                    </h4>
                                </div>
                                <div class="blog-item-body">
                                    <p><span><a href="#">Business 1</a></span> / <span>February 9,
                                            2020</span></p>
                                    <hr style="width: 90px;" class="mt-5 mb-4">
                                    <p>The first thing you need to do is sit down and set your goals. Diana...<a class="blue no-line" href="article.php">Read more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-item-content">
                                <div class="blog-item-header">
                                    <img src="https://cdn.shopify.com/s/files/1/0076/1708/5530/articles/b8_900x.jpg?v=1608651515" style="height: 415px; width: 420px;" alt="" class="img-fluid">
                                    <h4 class="title my-3">
                                        Blog 2
                                    </h4>
                                </div>
                                <div class="blog-item-body">
                                    <p><span><a href="#">Business 2 </a></span> / <span>February 9,
                                            2020</span></p>
                                    <hr style="width: 90px;" class="mt-5 mb-4">
                                    <p>Even though most of Utah has fully opened up – we’ve been having fun doing...<a class="blue no-line" href="article.php">Read more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-item-content">
                                <div class="blog-item-header">
                                    <img src="https://cdn.shopify.com/s/files/1/0076/1708/5530/articles/b5_900x.jpg?v=1608651517" style="height: 415px; width: 420px;" alt="" class="img-fluid">
                                    <h4 class="title my-3">
                                        Blog 3
                                    </h4>
                                </div>
                                <div class="blog-item-body">
                                    <p><span><a href="#">Business 3</a></span> / <span>February 9,
                                            2020</span></p>
                                    <hr style="width: 90px;" class="mt-5 mb-4">
                                    <p>Hey guys! I wanted to share the ‘Best of’ multiple categories from the Nordstrom
                                        Sale,...<a class="blue no-line" href="article.php">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of our blog -->

    <!-- Contact -->
    <div id="contact" class="form-1">
        <img class="decoration-star" src="images/decoration-star.svg" alt="alternative">
        <img class="decoration-star-2" src="images/decoration-star.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/contact.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Contact us for a quote using the following form</h2>

                        <!-- Contact Form -->
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control-input" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control-textarea" placeholder="Message" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">Submit</button>
                            </div>
                        </form>
                        <!-- end of contact form -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of contact -->

    <!-- Footer -->
    <div class="footer bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>About Website</h6>
                        <p class="p-small">He oppose at thrown desire of no. Announcing impression unaffected day his
                            are unreserved indulgence. Him hard find read are you</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Links</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li>Important: <a href="terms.php">Terms & Conditions</a>, <a href="privacy.php">Privacy
                                    Policy</a></li>
                            <li>Useful: <a href="#">Colorpicker</a>, <a href="#">Icon Library</a>, <a href="#">Illustrations</a></li>
                            <li>Menu: <a href="#header">Home</a>, <a href="#details">Details</a>, <a href="#services">Services</a>, <a href="#contact">Contact</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small">We would love to hear from you <a href="mailto:contact@site.com"><strong>pn09021997@gmail.com</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#your-link">Phuong Nguyen</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->

            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Distributed By <a href="https://themewagon.com/">Themewagon</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>