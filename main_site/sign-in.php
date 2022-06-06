<?php
include 'connection.php';

    if(isset($_POST['sign-in']))
    {
       $Name=$_POST['s_username'];
       $Password=$_POST['s_password'];
      
      
      $sql="select * from `seller_details` where `Username`='$Name' and `pass`='$Password'";

      $result=mysqli_query($db_enter,$sql);

      if(!$result)
      die("query failed".mysqli_error());

      $rows=mysqli_num_rows($result);

      if($rows)
      {
        echo "success";
        header('location:dashboard.php');
      }
      else{
        echo 'error';
        header('location:sign-in.php');
      }
    }

    ?>
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
                            <h6 class="text-white text-capitalize p-2 fs-2">sign in</h6>
                        </div>
                    </div>
                    <div class="card-body px-5 pb-2" style="top:-30px; position: relative;">
                    <form method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="s_username" id="s_username" placeholder="name@example.com">
                            <label for="floatingInput">Username</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="s_password" id="s_password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                          </div>
                          <div class="form-check form-switch mb-4">
                            <input class="form-check-input" type="checkbox" role="switch" name="remember-me" />
                            <label class="form-check-label" for="remember-me">remember me</label>
                          </div>
                          <div class="d-grid mb-3">
                            <input class="btn btn-gradient btn-outline-danger shadow btn-lg" name="sign-in" type="submit" value="Sign in">
                          </div>
                          <div class="text-center pt-0 px-lg-2 px-1 ">
                            <p class="mb-2 text-sm mx-auto">
                              Want to become a member?
                              <a href="sign-up.php" class="text-danger text-gradient font-weight-bold">Sign up</a>
                            </p>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>

        <!-- sign-in ends -->
    </div>
    
    
</body>

</html>