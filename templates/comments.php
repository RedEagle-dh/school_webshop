<style>
    .card-no-border .card {
        border: 0px;
        border-radius: 4px;
        -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05)
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem
    }

    .comment-widgets .comment-row:hover {
        background: rgba(0, 0, 0, 0.02);
        cursor: pointer
    }

    .comment-widgets .comment-row {
        border-bottom: 1px solid rgba(120, 130, 140, 0.13);
        padding: 15px
    }

    .comment-text:hover {
        visibility: hidden
    }

    .comment-text:hover {
        visibility: visible
    }

    .label {
        padding: 3px 10px;
        line-height: 13px;
        color: #ffffff;
        font-weight: 400;
        border-radius: 4px;
        font-size: 75%
    }

    .round img {
        border-radius: 100%
    }

    .label-info {
        background-color: #1976d2
    }

    .label-success {
        background-color: green
    }

    .label-danger {
        background-color: #ef5350
    }

    .label-warning {
        background-color: #ffc107;
        vertical-align: middle;
    }

    .action-icons a {
        padding-left: 7px;
        vertical-align: middle;
        color: #99abb4
    }

    .action-icons a:hover {
        color: #1976d2
    }

    .mt-100 {
        margin-top: 100px
    }

    .mb-100 {
        margin-bottom: 100px
    }

    .goingblack {
        color: #000000
    }

    .pb {
        padding: 2px;
    }
</style>


    <br>
    <h3 class="card-subtitle goingdark">Kundenbewertungen</h3>
    <br>

<?php foreach ($comments as $c) :
    
    $isVerified = getVerification($c[5], $row[4]);
    $ratingstarscount = getRating($c[6]);

    
    $date = $c[4];
    $datee = new DateTime($date);
    $datum = $datee->format('F d, Y');
?>

<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <div class="comment-widgets m-b-20">
        <div class="d-flex flex-row comment-row">
            <div class="p-2"><span class="round"><i class="fi fi-rr-user goingdark fa-2x"></i></span></div>
            <div class="comment-text w-100">
                <h5 class="goingdark"><?= $c[2] ?> <?= $c[3] ?></h5>
                <div class="comment-footer goingdark"> <span class="date"><?= $datum ?></span>
                <?php if ($isVerified) { ?>
                    <span class="label label-success">Verifizierter Kauf</span>

                    <?php } ?>
                    
                </div>
                <p class="m-b-5 m-t-10 goingdark"><?= $c[0] ?></p>
                <?php 
                    switch($ratingstarscount) {
                        case 1:
                            echo '<span class="label label-warning goingblack fa-lg"> <i class="fi fi-rr-star fa-lg"></i> </span>';
                            break;
                        case 2:
                            echo '<span class="label label-warning goingblack fa-lg"> <i class="fi fi-rr-star fa-lg">&nbsp</i><i class="fi fi-rr-star fa-lg"></i> </span>';
                            
                            break;
                        case 3:
                            echo '<span class="label label-warning goingblack fa-lg"> <i class="fi fi-rr-star fa-lg"></i><i class="fi fi-rr-star fa-lg"></i><i class="fi fi-rr-star fa-lg"></i> </span>';
                            
                            break;
                        case 4:
                            echo '<span class="label label-warning goingblack fa-lg"> <i class="fi fi-rr-star fa-lg"></i><i class="fi fi-rr-star fa-lg"></i><i class="fi fi-rr-star fa-lg"></i><i class="fi fi-rr-star fa-lg"></i> </span>';
                            
                            break;
                        case 5:
                            echo '<span class="label label-warning goingblack fa-lg"> 
                            <i class="fi fi-rr-star fa-lg"></i>
                            <i class="fi fi-rr-star fa-lg"></i>
                            <i class="fi fi-rr-star fa-lg"></i>
                            <i class="fi fi-rr-star fa-lg"></i>
                            <i class="fi fi-rr-star fa-lg"></i> </span>';
                            
                            break;
                    }
                
                ?>
            </div>
        </div>
    </div>


<?php endforeach; ?>