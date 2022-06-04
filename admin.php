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
  <h1 class='text-center text-primary'>Menu</h1>
  <?php
  if (isset($_SESSION['email'])) {
    require './php/connect.php';

    $sql = "SELECT * FROM menu";
    $result = $dbc->query($sql);

    $count = $result->num_rows;
    if ($count > 0) {
      echo '<table class="table"> <thead> <tr> <th scope="col"> Name </th> <th scope="col"> Description </th> <th scope="col"> Image </th> <th scope="col"> Price </th> <th scope="col"> Actions </th> </thead> <tbody>';
      while ($row = $result->fetch_assoc()) {
        echo '<tr> <td>' . $row['name'] . '</td> <td>' . $row['description'] . '</td> <td> <img src=" data:image/jpeg;base64,' . base64_encode($row["image"]) . '" alt="' . $row['name'] . '" width="100px" height="100px" /> </td> <td>' . $row['price'] . '$</td> <td> <button class="btn btn-primary">Edit</button> <button class="btn btn-danger">Delete</button> </td>  </tr>';
      }
      echo '</tbody> </table>';
    } else {
      echo '<p>No results</p>';
    }
  } else {
    header("Location: http://localhost/restaurant-diplomski/adminLogin.php");
    exit();
  }
  ?>

  <h1 class='text-center text-primary'>Reservations</h1>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="./js/toastr.js"></script>
</body>

</html>