<?php 
$page="dashboard";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/60de209ee4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    
<div class="sidenav">
    <?php include 'nav.php'; ?>
</div>
<div class="main">
    <div class="container-fluid text-white p-3" >
        <?php include 'header.php'; ?>


    <!-- deatails related to revenue starts -->
        <div class="row">
            <div class="col-xl-3 col-sm-6 p-2 mt-3">
                <div class="card-body bg-white text-black  text-end rounded-2 p-2 d-flex shadow">
                    <div class="rounded-2 bg-dark icon p-3 text-center shadow">
                    <i class="fa-solid fa-sack-dollar text-white fs-1"></i>
                    </div>
                    <div class=" ms-auto icon-details">
                        <p class="card-text text-end">Total Revenue</p>
                        <h5 class="card-text text-end" style="margin-top:-15px">Total Revenue</h5>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 p-2  mt-3">
                <div class="card-body bg-white text-black  text-end rounded-2 p-2 d-flex shadow">
                    <div class="rounded-2 bg-danger icon p-3 text-center shadow">
                    <i class="fa-solid fa-sack-dollar text-white fs-1"></i>
                    </div>
                    <div class=" ms-auto icon-details">
                        <p class="card-text text-end">Total Revenue</p>
                        <h5 class="card-text text-end" style="margin-top:-15px">Total Revenue</h5>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 p-2  mt-3">
                <div class="card-body bg-white text-black  text-end rounded-2 p-2 d-flex shadow">
                    <div class="rounded-2 bg-success icon p-3 text-center  shadow">
                    <i class="fa-solid fa-sack-dollar text-white fs-1"></i>
                    </div>
                    <div class=" ms-auto icon-details">
                        <p class="card-text text-end">Total Revenue</p>
                        <h5 class="card-text text-end" style="margin-top:-15px">Total Revenue</h5>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 p-2  mt-3">
                <div class="card-body bg-white text-black  text-end rounded-2 p-2 d-flex shadow">
                    <div class="rounded-2 bg-warning icon p-3 text-center  shadow">
                    <i class="fa-solid fa-sack-dollar text-white fs-1"></i>
                    </div>
                    <div class=" ms-auto icon-details">
                        <p class="card-text text-end">Total Revenue</p>
                        <h5 class="card-text text-end" style="margin-top:-15px">Total Revenue</h5>
                    </div>
                </div>
            </div>  
        </div>
    <!-- deatails related to revenue ends -->

    <!-- charts starts -->
        <div class="row mt-4">
            <div class="col-xl-4 col-sm-6 p-2">
                <div class="card z-index-2 ">
                    <div class="card-header p-0 charts  mx-3 z-index-2 bg-transparent">
                         <div class="bg-danger shadow rounded-2 py-3 pe-1">
                             <div class="chart">
                                <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                            </div>
                        </div>
                    </div>
                <div class="card-body text-black">
                    <h4 class="mb-0 ">Website Views</h4>
                </div>
            </div> 
        </div>
    <!-- charts ends -->
    
</div>
    
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="./assets/js/chart.js"></script>
        <script src="./assets/js/main-charts.js"></script>
        
</body>

</html>