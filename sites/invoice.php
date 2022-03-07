<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dave's Webshop</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <div class="container">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm">Name

                    </th>
                    <th class="th-sm">Rechnungsnummer

                    </th>
                    <th class="th-sm">Datum

                    </th>
                    <th class="th-sm">Download

                    </th>


                </tr>
            </thead>
            <tbody>
                <?php foreach (returnInvoice() as $row) : ?>
                    <tr>
                        <td><?= $row[3] ?></td>
                        <td><?= $row[4] ?></td>
                        <td><?= $row[5] ?></td>
                        <td>
                            <a href="index.php/settings?dl=<?= $row[4] ?>"><i class="fi fi-rr-download"></i></a>


                        </td>
                    </tr>
                <?php endforeach; ?>
                

            </tbody>

        </table>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/chart-area-demo.js"></script>
    <script src="assets/js/chart-pie-demo.js"></script>
</body>

</html>