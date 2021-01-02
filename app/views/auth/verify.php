<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Personal CSS -->
    <link rel="stylesheet" href="<?= CSS; ?>/verify.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Verify</title>

</head>

<body>

    <?php
    if (isset($_SESSION['flash'])) {
        if ($_SESSION['flash']['type'] == 'error') {
    ?>
            <div class="flash-data" data-flash-error="<?= $_SESSION['flash']['message']; ?>"></div>
        <?php
        } else {
        ?>
            <div class="flash-data" data-flash-success="<?= $_SESSION['flash']['message']; ?>"></div>
    <?php
        }
        unset($_SESSION['flash']);
    }
    ?>


    <div class="container px-4 py-5 mx-auto">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-lg-11 my-4">
                            <h2 class="mb-5 text-center heading">Dika's Wedding</h2>
                            <form action="<?= BASEURL; ?>/auth/middleware" method="POST" id="my-form">
                                <div class="form-group"> <label class="form-control-label text-muted">Name</label> <input type="text" id="name" name="name" class="form-control" required> </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Access Code</label> <input type="text" id="code" name="code" class="form-control text-uppercase" required> </div>
                                <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color" name="submit">Verify me</button> </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card card2">
                </div>
            </div>
        </div>
        <p class="pt-5 text-center text-muted">Use desktop version for best experience.</p>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            //flash success
            var flash = $('.flash-data').data('flash-success');
            if (flash) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: flash,
                }).then((result) => {
                    if (result.value) {
                        window.location.reload();
                    }
                })
            }

            //tampil flash error
            const Flasherror = $('.flash-data').data('flash-error');

            if (Flasherror) {
                Swal.fire({
                    title: 'Oops...',
                    text: Flasherror,
                    icon: 'error'
                });
            }
        });
    </script>
</body>

</html>