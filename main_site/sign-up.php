
<?php
include 'connection.php';
    if(isset($_POST['sign-up']))
    {
       $s_Name=$_POST['s_Name'];
       $s_username=$_POST['s_username'];
       $s_email=$_POST['s_email'];
       $s_gender=$_POST['s_gender'];
       $s_DOB=$_POST['s_DOB'];
       $s_password=$_POST['s_password'];
       $s_Phone=$_POST['s_Phone'];
       $s_CompName=$_POST['s_CompName'];
       $s_GST=$_POST['s_GST'];
       $s_cat=$_POST['s_cat'];
       $s_address=$_POST['s_address'];
       $s_state=$_POST['s_state'];
       $s_city=$_POST['s_city'];
       $s_zip=$_POST['s_zip'];
      
    //   $sql="select * from `seller_details` where `username`='$user' and `password`='$pass'";
    $sql="INSERT INTO `seller_details`(`seller_id`, `name`, `Username`, `email`, `pass`, `gender`, `dob`, `tel_no`, `company_name`, `gst_no`, `category`, `address`, `city`, `state`, `pin_code`) VALUES (1,'$s_Name','$s_username','$s_email','$s_password','$s_gender','$s_DOB','$s_Phone','$s_CompName','$s_GST','$s_cat','$s_address','$s_city','$s_state','$s_zip')";

    $result=mysqli_query($db_enter,$sql);


    // if($rows)
    // {
    //   echo "success";
    //   header('location:sign-in.php');
    // }
    // else{
    //   echo 'error';
    //   header('location:dashboard.php');
    // }
    }

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

    <script>
        function chk_name() {
            var pattern = /[a-zA-z]$/;
            if (!pattern.test(s_Name.value)) {
                err_s_name.style.color = "red";
                err_s_name.innerHTML = "*Enter a vaild Name";
                s_Name.focus();
                return;
            }
            else
                err_s_name.style.color = "green";
                err_s_name.innerHTML = "good";
                s_username.focus();
        }
    </script>
</head>


<body>

    <div class="container-fluid position-absolute top-0 start-0 pt-5 overflow-hidden"
        style="background-image:url(./assets/img/landscape.jpg);">
        <!-- sign-in starts -->
        <div class="row justify-content-center my-auto">
            <div class="col-10">
                <div class="card my-4 shadow">
                    <div class="card-header p-0 bg-danger shadow rounded-5 pt-4 pb-3 mx-4" style="top:-50px">
                        <div class="text-center">
                            <h6 class="text-white text-capitalize p-2 fs-2">login</h6>
                        </div>
                    </div>
                    <div class="card-body px-5 pb-2 ">
                        <form method="post">
                            <div class="row mb-3">
                                <div class="col-md-6 p-3">
                                    <div class="row g-3 ">
                                        <legend>Personal info</legend>
                                        <div class="col-sm-6">
                                            <label for="s_Name" class="form-label">First name</label>
                                            <input type="text" class="form-control" name="s_Name" id="s_Name"
                                                placeholder="Jhon" onblur='chk_name();'>
                                            <p id="err_s_name"></p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="s_username" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text">@</span>
                                                <input type="text" class="form-control" name="s_username"
                                                    id="s_username" placeholder="Username" required="">
                                                <div class="invalid-feedback">
                                                    Your username is required.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="s_email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="s_email" name="s_email"
                                                placeholder="you@example.com">
                                            <div class="invalid-feedback">
                                                Please enter a valid email address for shipping updates.
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label for="s_gender" class="form-label">Gender</label>
                                            <div class="d-flex">
                                                <div class="form-check">
                                                    <input class="form-check-input" value="male" type="radio"
                                                        name="s_gender" id="s_Male">
                                                    <label class="form-check-label" for="Male">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="form-check ms-3">
                                                    <input class="form-check-input" type="radio" value="female"
                                                        name="s_gender" id="s_Female" checked>
                                                    <label class="form-check-label" for="Female">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="s_DOB" class="form-label">DOB</label>
                                            <input type="date" class="form-control" id="s_DOB" name="s_DOB">
                                            <div class="invalid-feedback">
                                                Select a valid date of birth
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label for="s_password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="s_password"
                                                name="s_password" placeholder="Enter Password" required="">
                                            <div class="invalid-feedback">
                                                Please enter a Password.
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label for="re-password" class="form-label">Comfirm Password</label>
                                            <input type="password" class="form-control" id="re-password"
                                                placeholder="Confirm Password" required="">
                                            <div class="invalid-feedback">
                                                Please Confirm Password.
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for="s_Phone" class="form-label">Contact No.</label>
                                            <input type="tel" class="form-control" id="s_Phone" name="s_Phone"
                                                placeholder="704 44 60888">
                                            <div class="invalid-feedback">
                                                Enter a valid number
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col md-6 mt-5 mt-md-0 p-3">
                                    <div class="row g-3">
                                        <legend>Company info</legend>
                                        <div class="col-sm-6">
                                            <label for="s_CompName" class="form-label">Company name</label>
                                            <input type="text" class="form-control" id="s_CompName" name="s_CompName"
                                                placeholder="" value="" required="">
                                            <div class="invalid-feedback">
                                                Valid Company name is required.
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="GST" class="form-label">GST Number</label>
                                            <input type="text" class="form-control" id="s_GST" name="s_GST"
                                                placeholder="" value="" required="">
                                            <div class="invalid-feedback">
                                                Valid GST Number is required.
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for="Cat" class="form-label">Select Categories</label>
                                            <input class="form-check-input" type="checkbox" value="1" name="s_cat"
                                                id="s_cat" checked>1
                                            <input class="form-check-input" type="checkbox" value="2" name="s_cat">1
                                        </div>

                                        <div class="col-12">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="s_address" name="s_address"
                                                placeholder="1234 Main St" required="">
                                            <div class="invalid-feedback">
                                                Please enter your shipping address.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="s_country" class="form-label">State</label>
                                            <select class="form-select" id="s_state" name="s_state" required="">
                                                <option value="">Choose...</option>
                                                <option>United States</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid country.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="s_state" class="form-label">City</label>
                                            <select class="form-select" id="s_city" name="s_city" required="">
                                                <option value="">Choose...</option>
                                                <option>California</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="s_zip" class="form-label">Zip</label>
                                            <input type="text" class="form-control" name="s_zip" id="s_zip"
                                                placeholder="" required="">
                                            <div class="invalid-feedback">
                                                Zip code required.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 ">
                                    <div class="d-grid mt-5 mx-auto col-4 ">
                                        <input class="btn btn-gradient btn-outline-danger shadow btn-lg" name='sign-up'
                                            type="submit" value="submit">
                                    </div>
                                    <div class="text-center pt-0 px-lg-2 px-1 mt-3">
                                        <p class="mb-2 text-sm mx-auto">
                                            Already a member?
                                            <a href="sign-in.php"
                                                class="text-danger text-gradient font-weight-bold">Sign up</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- sign-in ends -->
    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./assets/js/chart.js"></script>
    <script src="./assets/js/main-charts.js"></script>

</body>

</html>