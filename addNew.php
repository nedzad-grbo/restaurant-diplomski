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

  <h1 class='text-center text-primary'>Add new</h1>

  <form class="main_form">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <input class="form-control" placeholder="Name" type="text" name="name" id="name" />
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <textarea class="textarea" placeholder="Description" type="text" name="description" id="description"></textarea>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <input class="form-control" placeholder="Price" type="number" name="price" id="price" />
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <input class="form-control" placeholder="Image" type="text" name="image" id="image" />
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <button type="button" class="send" onclick="addNew()">Send</button>
        </div>
      </div>
    </div>
  </form>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="./js/toastr.js"></script>
  <script src="./js/addNew.js"></script>
</body>

</html>