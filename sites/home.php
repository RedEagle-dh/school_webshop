<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dave's Webshop</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="icon" href="https://lh3.googleusercontent.com/jUoaTIlBn5ibfQcND2n5OMD6Z7xoqNj-ShHlFR6QuLffLXD5pS8V2eNg1rGlrsRrnDkoQ28O8UHzqzBQKAGY4l1CS2NQSq2SkRScK6FOjl82jppyohK-">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body data-menu="vertical-menu" class="vertical-layout vertical-menu content-right-sidebar menu-expanded">


    <?php
    include 'templates\navbar.php';

    ?>

    <br><br><br>
    <section class="container" id="products">


        <div class="row">
            <?php if (!empty($products)) {
                foreach ($products as $product) : ?>
                    <div class="col-3">
                        <?php include 'templates\card.php' ?>
                        <br>
                    </div>
                <?php endforeach;
            } else { ?>
                <div class="my-5 pt-5 text-muted text-center text-small">
                    <h1 class="mb-1 goingdark">Scheint, als gäbe es hier noch nicht viel...</h1>

                </div>
            <?php } ?>
        </div>


    </section>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
            <i class="fi fi-rr-add rounded me-2"></i>
                <strong class="me-auto">Produkt hinzugefügt!</strong>
                <small>Jetzt gerade</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toastbody">
                
            </div>
        </div>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1 goingdark">&copy; 2022 Dave's Webshop GmbH</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="index.php/impressum">Impressum</a></li>
            <li class="list-inline-item"><a href="index.php/tos">AGB</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>

    <script src="assets/js/bootstrap.bundle.js">



    </script>
    <script src="assets\js\main.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script>
        function sendReq(id, userid, bool) {
            var ajax = new XMLHttpRequest();

            ajax.open("GET", "templates/ajax.php?addtocartid=" + id + "&userid=" + userid + "&loggedin=" + bool, true);
            ajax.send();

            ajax.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    if (this.response.includes("redtologin")) {
                        location.href = "/Webshop/index.php/login";
                    } else {
                        var resp = this.response.trim();
                        const responsee = resp.split("*");
                        document.getElementById("warenkorbanzahl").textContent = "Warenkorb (" + responsee[0] + ")";

                        var toastLiveExample = document.getElementById('liveToast')
                        document.getElementById("toastbody").textContent = "Sie haben " + responsee[1] + " erfolgreich zum Warenkorb hinzugefügt"

                        var toast = new bootstrap.Toast(toastLiveExample)

                        toast.show()

                    }


                }
            }
        }
    </script>


</body>

</html>