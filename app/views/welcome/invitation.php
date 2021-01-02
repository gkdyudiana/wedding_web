<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Personal CSS -->
    <link rel="stylesheet" href="<?= CSS; ?>/invitation.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Welcome, <?= $_SESSION['auth']['visitor']; ?></title>
</head>

<body>

    <!-- Start Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" data-aos="fade-right" data-aos-duration="2000" href="#">Dika's Wedding</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" data-aos="fade-left" data-aos-duration="3000">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" id="home" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="gallery" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="party" href="#">Party</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="location" href="#">Location</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASEURL; ?>/auth/logout" class="btn btn-block btn-danger rounded-pill">SIGN OUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar -->


    <!-- Start Jumbotron -->

    <div class="jumbotron">
        <img src="../public/assets/images/text-design.png" alt="" data-aos="fade-up" data-aos-duration="3000">
    </div>

    <!-- End Jumbotron -->

    <!-- Start Profile -->

    <section id="section-profile">
        <div class="container mb-5 mt-5">
            <h2 class="text-center mb-5 text-head" data-aos="fade-right" data-aos-duration="2000">Profiles</h2>
            <div class="row justify-content-center">
                <div class="col-lg-5 mb-3" data-aos="fade-right" data-aos-duration="2000">
                    <div class="row">
                        <div class="col">
                            <img class="photos float-left" src="../public/assets/images/profile1.jpg" alt="">
                            <section class="section-text d-flex flex-column">
                                <h3 class="text-left">Anak Agung Ngurah Prihandhika</h3>
                                <p class="text-left text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-3" data-aos="fade-left" data-aos-duration="2000">
                    <div class="row">
                        <div class="col">
                            <img class="photos float-left" src="../public/assets/images/profile2.jpg" alt="">
                            <section class="section-text d-flex flex-column">
                                <h3 class="text-left">Gusti Ayu Putu Dika Desiyani</h3>
                                <p class="text-left text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Profile -->

    <!-- Start Galery -->

    <section id="section-gallery">
        <div class="container bg-light text-center pt-5">
            <h2 class="text-center mb-5 text-dark text-head" data-aos-duration="2000" data-aos="zoom-in">Gallery</h2>
            <div class="row align-items-center">
                <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-duration="2000">
                    <img src="../public/assets/images/image1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-duration="2000">
                    <img src="../public/assets/images/image2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-duration="2000">
                    <img src="../public/assets/images/image3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-duration="2000">
                    <img src="../public/assets/images/image4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-duration="2000">
                    <img src="../public/assets/images/image5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-duration="2000">
                    <img src="../public/assets/images/image6.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- End Galery -->

    <!-- Start Party -->

    <section id="section-party">
        <div class="container mt-5" data-aos="fade-down" data-aos-duration="2000">
            <h2 class="text-center mb-5 text-head">Our Party</h2>
            <div class="card-wrapper bg-light text-center">
                <h1 class="pt-4 pb-3 card-name">Anak Agung Ngurah Prihandhika <br> & <br> <span class="sub-card-name">Gusti Ayu Putu Dika Desiyani</span></h1>
                <p>Are getting married , Come away with us to celebrate.</p>
                <p class="text-danger"><strong>14 January 2021, 13:00 - 20:00 WITA</strong></p>
                <div class="row justify-content-center">
                    <div class="col-lg-2">
                        <h2 id="days" class="timer"></h2>
                    </div>
                    <div class="col-lg-2">
                        <h2 id="hours" class="timer"></h2>
                    </div>
                    <div class="col-lg-2">
                        <h2 id="minutes" class="timer"></h2>
                    </div>
                    <div class="col-lg-2">
                        <h2 id="seconds" class="timer"></h2>
                    </div>
                </div>
                <p id="finish" class="text-danger"></p>
            </div>
        </div>
    </section>


    <!-- End Party -->

    <!-- Start Location -->

    <section id="section-location">
        <div class="container mt-5 mb-5" data-aos="fade-up" data-aos-duration="2000">
            <h2 class="mb-5 text-center text-head">Our Wedding Location</h2>
            <div class="row justify-content-center">
                <div class="col-lg">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d293.1608745571641!2d115.20758194769324!3d-8.66424563641277!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240bc6dee7cf5%3A0x6d840ab93d175570!2sBanjar%20Tegal%20Agung!5e0!3m2!1sid!2sid!4v1607235760371!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- End Location -->

    <!-- Start Footer -->
    <div class="container text-center mb-5">
        <footer class="text-secondary">
            Copyright &copy; 2020 All rights reserved by Dichan.
        </footer>
    </div>
    <!-- End Footer -->

    <!-- Scroll -->
    <div class="scroll-top">
        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-up-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-10.646.354a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 6.207V11a.5.5 0 0 1-1 0V6.207L5.354 8.354z" />
        </svg>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="<?= JS; ?>/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>