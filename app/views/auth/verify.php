<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            width: 300px;
            /* margin-left: auto; */
            transform: translate(0, 200px);
            padding: 10px;
            background-color: #fff;
            box-shadow: 2px 2px 2px #acacac;
            border-radius: 5px;
        }

        .form-control {
            text-transform: uppercase;
        }

        .container h2 {
            font-family: 'Lobster', cursive;
            font-size: 40px;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 15px;
        }

        /* Desktop */
        @media (min-width: 992px) {
            .container {
                width: 400px;
            }
        }
    </style>
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

    <div class="container">
        <h2>Dika's Wedding</h2>
        <form action="<?= BASEURL; ?>/auth/middleware" method="POST" id="my-form" class="my-form">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-dark text-white" id="validatedInputGroupPrepend">Access Code</span>
                </div>
                <input type="text" name="code" class="form-control" aria-describedby="validatedInputGroupPrepend" required>
                <input type="submit" name="submit" value="Verify" class="btn btn-block btn-dark mt-2">
            </div>
            <?php
            if (isset($_SESSION['failed'])) {
            ?>
                <div class="invalid-feedback text-center">
                    Wrong Code!
                </div>
            <?php
                unset($_SESSION['failed']);
            } ?>
        </form>
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