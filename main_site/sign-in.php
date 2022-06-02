<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid position-absolute top-0 start-0 " style="background-image:url(./assets/img/landscape.jpg);height:100vh;">
        <!-- sign-in starts -->
        <div class="row justify-content-center my-auto" style="margin-top:20vh !important"> 
            <div class="col-xl-4 col-md-6 col-sm-9 col-xs-12">
                <div class="card my-4 shadow">
                    <div class="card-header p-0 bg-danger shadow rounded-5 pt-4 pb-3 mx-4" style="top:-50px">
                        <div class="text-center">
                            <h6 class="text-white text-capitalize p-4 fs-2">sign in</h6>
                        </div>
                    </div>
                    <div class="card-body px-5 pb-2" style="top:-30px; position: relative;">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput " placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                          </div>
                          <div class="form-check form-switch mb-4">
                            <input class="form-check-input" type="checkbox" role="switch" id="remember-me" />
                            <label class="form-check-label" for="remember-me">remember me</label>
                          </div>
                          <div class="d-grid mb-3">
                            <button class="btn btn-gradient btn-outline-danger shadow btn-lg" type="button">Sign in</button>
                          </div>
                          <div class="text-center pt-0 px-lg-2 px-1 ">
                            <p class="mb-2 text-sm mx-auto">
                              Want to become a member?
                              <a href="sign-up.php" class="text-danger text-gradient font-weight-bold">Sign up</a>
                            </p>
                          </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- sign-in ends -->
    </div>
</body>

</html>