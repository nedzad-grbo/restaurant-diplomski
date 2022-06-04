<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
  <title>Admin</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="grbo" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- style css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- responsive-->
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- awesome fontfamily -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="./css/toastr.css" rel="stylesheet" />
</head>

<body>

  <?php
  if (isset($_SESSION['email'])) {
    header("Location: http://localhost/restaurant-diplomski/admin.php");
    exit();
  } else {
    echo '<section id="login" class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-success">ADMIN LOGIN</h1>
          </div>
          <div class="col-6 mx-auto">
            <form class="form my-5">
              <div class="form-group my-2">
                <label for="adminEmail" class="text-white" >EMAIL </label
                >
                <input
                  type="email"
                  class="form-control my-3"
                  id="adminEmail"
                  aria-describedby="emailHelp"
                  placeholder=" EMAIL"
                  style="border: 1px solid #ced4da;"
                />
              </div>
              <div class="form-group my-2">
                <label for="adminPassword" class="text-white">Password</label>
                <input
                  type="password"
                  class="form-control my-3"
                  id="adminPassword"
                  placeholder="*****"
                  style="border: 1px solid #ced4da;"
                />
              </div>
             
                <button
                  type="button"
                  class="btn btn-warning text-white btn-block my-3"
                  onclick="admin_login()"
                >
                  LOGIN
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>';
  }
  ?>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="./js/toastr.js"></script>

  <script src="./js/admin_login.js"></script>
</body>

</html>