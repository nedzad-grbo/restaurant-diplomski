<?php

require './connect.php';

$idnum = $_REQUEST["idnum"];

$query = "Delete from menu where ID = $idnum ";


$result = mysqli_query($dbc, $query);
if ($result) {
  echo ('Deleted');
  header("location: ../admin.php");
} else {
  mysqli_error($dbc);
}
