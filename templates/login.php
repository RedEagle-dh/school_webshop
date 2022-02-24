<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/Webshop/">
    <title>Dave's Webshop</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon"
          href="https://lh3.googleusercontent.com/jUoaTIlBn5ibfQcND2n5OMD6Z7xoqNj-ShHlFR6QuLffLXD5pS8V2eNg1rGlrsRrnDkoQ28O8UHzqzBQKAGY4l1CS2NQSq2SkRScK6FOjl82jppyohK-">

</head>
<body>
<?php
include 'templates\navbar.php';

?>

<br><br><br><br>
<section class="loginF" id="loginForm">
    <form action="index.php/login" method="POST">
        <div class="card">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <?php if($hasError):?>

                <form class="form-floating mb-3">
                    <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com" name="emailadress">
                    <label for="floatingInputInvalid">Invalid input</label>
                </form>
                <?php endif; ?>
                <?php if(!$hasError):?>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$emailadress?>" name="emailadress">
                    <label for="floatingInput">Email address</label>
                </div>
                <?php endif; ?>

                <?php if(!$hasError):?>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" value="<?=$password?>" name="password">
                    <label for="floatingPassword">Password</label>
                </div>
                <?php endif; ?>
                <?php if($hasError):?>

                <form class="form-floating mb-3">
                    <input type="password" class="form-control is-invalid" id="floatingInputInvalid" placeholder="password" value="<?=$password?>" name="password">
                    <label for="floatingInputInvalid">Invalid input</label>
                </form>
                <?php endif; ?>
            </div>
            <div class="card-footer">
                <button class="btn btn-success" type="submit">Login</button>
                
            </div>
            

        </div>


    </form>
    <form method="get" action="index.php/register" >
                    <button class="btn btn-success" type="submit">Register</button>
                </form>


</section>


<script src="assets/js/bootstrap.bundle.js">

</script>
</body>
</html>
