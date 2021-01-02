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
            <h2 class="text-center mb-5 text-head" data-aos="fade-right" data-aos-duration="2000"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-badge" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v11.755S4 12 8 12s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                    <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM6 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5z" />
                </svg>&nbsp;Profiles</h2>
            <div class="row justify-content-center">
                <div class="col-lg-5 mb-3" data-aos="fade-right" data-aos-duration="2000">
                    <div class="row">
                        <div class="col">
                            <img class="photos float-left" src="../public/assets/images/profile1.jpg" alt="">
                            <section class="section-text d-flex flex-column" style="height: 300px;">
                                <h3 class="text-left">Anak Agung Ngurah Prihandhika</h3>
                                <p class="text-left text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                <a href="#" class="btn btn-info btn-read">Read more <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg></a>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-3" data-aos="fade-left" data-aos-duration="2000">
                    <div class="row">
                        <div class="col">
                            <img class="photos float-left" src="../public/assets/images/profile2.jpg" alt="">
                            <section class="section-text d-flex flex-column" style="height: 300px;">
                                <h3 class="text-left">Gusti Ayu Putu Dika Desiyani</h3>
                                <p class="text-left text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                <a href="#" class="btn btn-info btn-read">Read more <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg></a>
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
            <h2 class="text-center mb-5 text-dark text-head" data-aos-duration="2000" data-aos="zoom-in"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10z" />
                    <path d="M10.648 8.646a.5.5 0 0 1 .577-.093l1.777 1.947V14h-12v-1l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z" />
                    <path fill-rule="evenodd" d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z" />
                </svg>&nbsp;Gallery</h2>
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
            <h2 class="text-center mb-5 text-head"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar2-event-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z" />
                    <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z" />
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
                    <rect width="2" height="2" x="11" y="7" rx=".5" />
                </svg>&nbsp;Our Party</h2>

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
            <h2 class="mb-5 text-center text-head"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>&nbsp;Our Wedding Location</h2>
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