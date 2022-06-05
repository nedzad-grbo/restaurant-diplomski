<?php
require './connect.php';

$name = $_REQUEST['name'];
$description = $_REQUEST['description'];
$price = $_REQUEST['price'];
$image = $_REQUEST['image'];


if ($_REQUEST['task'] == "add") {
  $query = "INSERT INTO menu (`name`, `description`, `image`, `price`) VALUES ('$name', '$description', '$image', '$price')";

  $response = @mysqli_query($dbc, $query);
  if ($response) {
    echo ('add');
  } else {
    echo mysqli_error($dbc);
  }
}
