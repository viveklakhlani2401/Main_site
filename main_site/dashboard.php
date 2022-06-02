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
        <div class="container-fluid text-white p-3">
        <?php include 'header.php'; ?>
        <!-- deatails related to revenue starts -->
        <div class="row">
            <div class="col-xl-3 col-sm-6 p-2 mt-3">
                <div class="card-body bg-white text-black  text-end rounded-2 p-2 d-flex shadow">
                    <div class="rounded-2 bg-gradient bg-dark icon p-3 text-center shadow">
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
                    <div class="rounded-2 bg-gradient bg-danger icon p-3 text-center shadow">
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
                    <div class="rounded-2 bg-gradient bg-success icon p-3 text-center  shadow">
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
                    <div class="rounded-2 bg-gradient bg-warning icon p-3 text-center  shadow">
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
                        <div class="bg-gradient bg-danger shadow rounded-2 py-3 pe-1">
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

            <div class="col-xl-4 col-sm-6 p-2">
                <div class="card z-index-2 ">
                    <div class="card-header p-0 charts  mx-3 z-index-2 bg-transparent">
                        <div class="bg-gradient bg-success shadow rounded-2 py-3 pe-1">
                            <div class="chart">
                                <canvas id="chart-line-1" class="chart-canvas" height="170"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-black">
                        <h4 class="mb-0 ">Website Views</h4>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-sm-12 mt-sm-4 mt-md-0 p-2">
                <div class="card z-index-2 ">
                    <div class="card-header p-0 charts  mx-3 z-index-2 bg-transparent">
                        <div class="bg-gradient bg-info shadow rounded-2 py-3 pe-1">
                            <div class="chart">
                                <canvas id="chart-line-2" class="chart-canvas" height="170"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-black">
                        <h4 class="mb-0 ">Website Views</h4>
                    </div>
                </div>
            </div>

        </div>
        <!-- charts ends -->

        <!-- table starts -->
        <div class="row mt-4 ">
            <div class="col-12">
              <div class="card my-4 shadow">
                <div class="card-header p-0 bg-danger shadow rounded-3 pt-4 pb-3 mx-4">
                  <div class="">
                    <h6 class="text-white text-capitalize ps-3 fs-2">Order table</h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0 table-hover">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary font-weight-bolder">Customer</th>
                          <th class="text-uppercase text-secondary font-weight-bolder">product name</th>
                          <th class="text-center text-uppercase text-secondary font-weight-bolder">Order id</th>
                          <th class="text-center text-uppercase text-secondary font-weight-bolder">status</th>
                          <th class="text-center text-uppercase text-secondary font-weight-bolder">oder date</th>
                          <th class="text-center text-uppercase text-secondary font-weight-bolder">delivery date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="align-middle">
                            <div class="d-flex">
                              <div>
                                <img src="./assets/img/user-1.jpg" class="me-2 rounded-3" height="50px" width="50px" alt="user">
                              </div>
                              <div class="d-flex flex-column">
                                <h6 class="mb-0 text-sm">Customer name</h6>
                                <p class="text-xs text-secondary mb-0">Customer Id/Email</p>
                              </div>
                            </div>
                          </td>
                         
                          <td class="align-middle">
                            <div class="d-flex">
                                <div>
                                  <img src="./assets/img/product (4).webp" height="50px" width="50px" class="me-2 rounded-3" alt="product">
                                </div>
                                <div class="d-flex flex-column">
                                  <h6 class="mb-0 text-sm">Product Name</h6>
                                  <p class="text-xs text-secondary mb-0">Product id</p>
                                </div>
                              </div>
                          </td>

                          <td  class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0">Manager</p>
                          </td>

                          <td class="align-middle text-center text-sm">
                            <span class="badge bg-success">completed</span>
                          </td>

                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                          </td>
                        </tr>
                          
                        <tr>
                            <td class="align-middle">
                              <div class="d-flex">
                                <div>
                                  <img src="./assets/img/user-1.jpg" class="me-2 rounded-3" height="50px" width="50px" alt="user">
                                </div>
                                <div class="d-flex flex-column">
                                  <h6 class="mb-0 text-sm">Customer name</h6>
                                  <p class="text-xs text-secondary mb-0">Customer Id/Email</p>
                                </div>
                              </div>
                            </td>
                           
                            <td class="align-middle">
                              <div class="d-flex">
                                  <div>
                                    <img src="./assets/img/product (4).webp" class="me-2 rounded-3" height="50px" width="50px" alt="product">
                                  </div>
                                  <div class="d-flex flex-column">
                                    <h6 class="mb-0 text-sm">Product Name</h6>
                                    <p class="text-xs text-secondary mb-0">Product id</p>
                                  </div>
                                </div>
                            </td>
  
                            <td  class="align-middle text-center">
                              <p class="text-xs font-weight-bold mb-0">Manager</p>
                            </td>
  
                            <td class="align-middle text-center text-sm">
                              <span class="badge bg-danger">Cancelled</span>
                            </td>
  
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                          </tr>

                          <tr>
                            <td class="align-middle">
                              <div class="d-flex">
                                <div>
                                  <img src="./assets/img/user-1.jpg" class="me-2 rounded-3" height="50px" width="50px" alt="user">
                                </div>
                                <div class="d-flex flex-column">
                                  <h6 class="mb-0 text-sm">Customer name</h6>
                                  <p class="text-xs text-secondary mb-0">Customer Id/Email</p>
                                </div>
                              </div>
                            </td>
                           
                            <td class="align-middle">
                              <div class="d-flex">
                                  <div>
                                    <img src="./assets/img/product (4).webp" height="50px" width="50px" class="me-2 rounded-3" alt="product">
                                  </div>
                                  <div class="d-flex flex-column">
                                    <h6 class="mb-0 text-sm">Product Name</h6>
                                    <p class="text-xs text-secondary mb-0">Product id</p>
                                  </div>
                                </div>
                            </td>
  
                            <td  class="align-middle text-center">
                              <p class="text-xs font-weight-bold mb-0">Manager</p>
                            </td>
  
                            <td class="align-middle text-center text-sm">
                              <span class="badge bg-info">In progress</span>
                            </td>
  
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                          </tr>

                          <tr>
                            <td class="align-middle">
                              <div class="d-flex">
                                <div>
                                  <img src="./assets/img/user-1.jpg" class="me-2 rounded-3" height="50px" width="50px" alt="user">
                                </div>
                                <div class="d-flex flex-column">
                                  <h6 class="mb-0 text-sm">Customer name</h6>
                                  <p class="text-xs text-secondary mb-0">Customer Id/Email</p>
                                </div>
                              </div>
                            </td>
                           
                            <td class="align-middle">
                              <div class="d-flex">
                                  <div>
                                    <img src="./assets/img/product (4).webp" height="50px" width="50px" class="me-2 rounded-3" alt="product">
                                  </div>
                                  <div class="d-flex flex-column">
                                    <h6 class="mb-0 text-sm">Product Name</h6>
                                    <p class="text-xs text-secondary mb-0">Product id</p>
                                  </div>
                                </div>
                            </td>
  
                            <td  class="align-middle text-center">
                              <p class="text-xs font-weight-bold mb-0">Manager</p>
                            </td>
  
                            <td class="align-middle text-center text-sm">
                              <span class="badge bg-warning">On hold</span>
                            </td>
  
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row justify-content-center">
                <div class="m-2 col-3 text-center d-grid">
                    <a href="orders.php" class="btn btn-outline-dark btn-lg">See More</a>
                </div>
            </div>
              </div>
            </div>
          </div>
        <!-- table ends -->

        <!-- recently added products starts -->
        
        <!-- recently added products ends -->
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