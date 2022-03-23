<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2 darkcard row-border-light">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Earnings (Monthly)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 goingdark"><?= getMonthlyEarnings(getActualMonth()) ?>€</div>
                    </div>
                    <div class="col-auto">
                        <i class="fi fi-br-euro fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2 darkcard row-border-light">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Earnings (All Time)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 goingdark"><?= getAlltimeEarnings() ?>€</div>
                    </div>
                    <div class="col-auto">

                        <i class="fi fi-br-bank fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2 darkcard row-border-light">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kunden
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 goingdark"><?= getUserCount() ?></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fi fi-sr-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2 darkcard row-border-light">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Anzahl Produkte im Sortiment</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 goingdark"><?= getProductCount() - getProductCountSoldOut() ?> (<?= getProductCount() ?> insg.)</div>
                    </div>
                    <div class="col-auto">
                        <i class="fi fi-sr-shopping-cart-add fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>