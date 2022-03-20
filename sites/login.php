<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/Webshop/">
    <title>Dave's Webshop | Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="icon" href="https://lh3.googleusercontent.com/jUoaTIlBn5ibfQcND2n5OMD6Z7xoqNj-ShHlFR6QuLffLXD5pS8V2eNg1rGlrsRrnDkoQ28O8UHzqzBQKAGY4l1CS2NQSq2SkRScK6FOjl82jppyohK-">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <?php
    include 'templates\navbar.php';

    ?>

    <br><br><br><br>
    <section class="loginF" id="loginForm">
        <form action="index.php/login" method="POST">
            <div class="card darkcard">
                <div class="card-header goingdark">
                    Login
                </div>
                <div class="card-body">
                    <?php if ($hasError) : ?>

                        <form class="form-floating mb-3">
                            <input type="email" class="form-control is-invalid goingdark searchbar" id="floatingInputInvalid" value="<?= $emailadress ?>" name="emailadress">
                            <label for="floatingInputInvalid" class="goingdark">
                                <nobr>Invalid input</nobr>
                            </label>
                        </form>
                    <?php endif; ?>
                    <?php if (!$hasError) : ?>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control goingdark searchbar" id="floatingInput" placeholder="name@example.com" value="<?= $emailadress ?>" name="emailadress">
                            <label for="floatingInput" class="goingdark">
                                <nobr>Email address</nobr>
                            </label>
                        </div>
                    <?php endif; ?>

                    <?php if (!$hasError) : ?>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control goingdark searchbar" id="floatingPassword" placeholder="Password" value="<?= $password ?>" name="password">
                            <label for="floatingPassword" class="goingdark">
                                <nobr>Password</nobr>
                            </label>
                        </div>
                    <?php endif; ?>
                    <?php if ($hasError) : ?>
                        <br>
                        <form class="form-floating mb-3">
                            <input type="password" class="form-control is-invalid goingdark searchbar" id="floatingInputInvalidd" placeholder="password" value="<?= $password ?>" name="password">
                            <label for="floatingInputInvalidd" class="goingdark">
                                <nobr>Invalid input</nobr>
                            </label>
                        </form>
                    <?php endif; ?>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success" type="submit">Login</button>
                    

                </div>



            </div>


        </form>
        <form method="get" action="index.php/register">
            <button class="btn btn-success" type="submit">Registrieren</button>
        </form>


    </section>


    <script src="assets/js/bootstrap.bundle.js">



    </script>
    <script src="assets\js\main.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 Dave's Webshop GmbH</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="index.php/impressum">Impressum</a></li>
        <li class="list-inline-item"><a href="index.php/tos">AGB</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
</footer>

</html>