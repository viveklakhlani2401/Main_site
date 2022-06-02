<?php 
$page="orders";
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
         <!-- table starts -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header px-3 bg-danger shadow rounded-3 pt-4 pb-3 mx-4 d-flex justify-content-between">
                        <div>
                            <h6 class="text-white text-capitalize fs-2">Order table</h6>
                        </div>
                        <div class="align-items-right">
                        <div class="input-group px-5">
                            <label class="input-group-text bg-white border-white" for="filter">filter</label>
                            <select class="rounded-end border border-top-2 border-bottom-2 border-end-2 border-white" id="filter">
                              <option selected>Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                    </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 table-hover">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary font-weight-bolder">Customer</th>
                                    <th class="text-uppercase text-secondary font-weight-bolder">product name</th>
                                    <th class="text-center text-uppercase text-secondary font-weight-bolder">Order
                                        id</th>
                                    <th class="text-center text-uppercase text-secondary font-weight-bolder">status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary font-weight-bolder">oder
                                        date</th>
                                    <th class="text-center text-uppercase text-secondary font-weight-bolder">
                                        delivery date
                                    </th>
                                    <th class="text-secondary"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex">
                                            <div>
                                                <img src="./assets/img/user-1.jpg" class="me-2 rounded-3" height="50px"
                                                    width="50px" alt="user">
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
                                                <img src="./assets/img/product (4).webp" class="me-2 rounded-3"
                                                    height="50px" width="50px" alt="product">
                                            </div>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-0 text-sm">Product Name</h6>
                                                <p class="text-xs text-secondary mb-0">Product id</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="align-middle text-center">
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

                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex">
                                            <div>
                                                <img src="./assets/img/user-1.jpg" class="me-2 rounded-3" height="50px"
                                                    width="50px" alt="user">
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
                                                <img src="./assets/img/product (4).webp" class="me-2 rounded-3"
                                                    height="50px" width="50px" alt="product">
                                            </div>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-0 text-sm">Product Name</h6>
                                                <p class="text-xs text-secondary mb-0">Product id</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="align-middle text-center">
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

                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex">
                                            <div>
                                                <img src="./assets/img/user-1.jpg" class="me-2 rounded-3" height="50px"
                                                    width="50px" alt="user">
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
                                                <img src="./assets/img/product (4).webp" class="me-2 rounded-3"
                                                    height="50px" width="50px" alt="product">
                                            </div>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-0 text-sm">Product Name</h6>
                                                <p class="text-xs text-secondary mb-0">Product id</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="align-middle text-center">
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

                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex">
                                            <div>
                                                <img src="./assets/img/user-1.jpg" class="me-2 rounded-3" height="50px"
                                                    width="50px" alt="user">
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
                                                <img src="./assets/img/product (4).webp" class="me-2 rounded-3"
                                                    height="50px" width="50px" alt="product">
                                            </div>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-0 text-sm">Product Name</h6>
                                                <p class="text-xs text-secondary mb-0">Product id</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="align-middle text-center">
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

                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>  
    <!-- table ends -->
</div>
        


    
    
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