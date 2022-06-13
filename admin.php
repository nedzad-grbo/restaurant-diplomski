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
  if (isset($_SESSION['email']) && $_SESSION['email'] == 'admin@gmail.com') {
    require './php/connect.php';
    echo '<div class="text-right px-3">
    <a href="logout.php" class="btn btn-warning my-3">Logout</a>
  </div>
<h1 class="text-center text-primary
  ">Menu</h1>
  <div class="col-12 text-center">
    <a href="addNew.php">
      <button class="btn btn-primary my-3">Add NEW</button>
    </a>
  </div>';

    $sql = "SELECT * FROM menu";
    $result = $dbc->query($sql);

    $count = $result->num_rows;
    if ($count > 0) {
      echo '<table class="table"> <thead> <tr> <th scope="col"> Name </th> <th scope="col"> Description </th> <th scope="col"> Image </th> <th scope="col"> Price </th> <th scope="col"> Actions </th> </thead> <tbody>';
      while ($row = $result->fetch_assoc()) {
        echo '
        <tr> 
 <form action = "php/deleteRecipe.php?idnum=' . $row["ID"] . '" method = "POST"> <input type="text" value="' . $row["ID"] . '"  name="idnum' . $row["ID"] . '" id="' . $row["ID"] . '" hidden >
         <td>' . $row['name'] . '</td> <td>' . $row['description'] . '</td> <td> <img src="' . $row['image'] . '" alt="' . $row['name'] . '" height="150" width="150"/> </td> <td>' . $row['price'] . '$</td> <td>' . /* <button type="button" class="btn btn-primary">Edit</button> */ ' <button class="btn btn-danger" type="submit" >Delete</button> </td> </form> </tr>';
      }
      echo '</tbody> </table>';

      echo "  <h1 class='text-center text-primary'>Reservations</h1>";

      $sql = "SELECT * FROM reservation";
      $result = $dbc->query($sql);

      $count = $result->num_rows;
      if ($count > 0) {
        echo "<div class='text-center'>" .   $count . " reservations";
        echo '<table class="table"> <thead> <tr> <th scope="col"> User </th> <th scope="col"> Food </th> <th scope="col"> Quantity </th> <th scope="col"> Drink </th> <th scope="col"> Quantity </th> <th scope="col"> Type </th> <th scope="col"> Price </th> </thead> <tbody>';
        while ($row = $result->fetch_assoc()) {
          echo '<tr> <td>' . $row["user"] . '</td> <td>' . $row["food"] . '</td> <td>' . $row["foodQuantity"] . '</td> <td>' . $row["drink"] . '</td> <td>' . $row["drinkQuantity"] . '</td> <td>' . $row["type"] . '</td> <td>' . $row["total"] . '$</td> </tr>';
        }
      } else {
        echo '<h1 class="text-center text-primary">No Reservations</h1>';
      }
    } else {
      echo '<p>No results</p>';
    }
  } else {
    header("Location: http://localhost/restaurant-diplomski/adminLogin.php");
    exit();
  }
  ?>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="./js/toastr.js"></script>
</body>

</html>