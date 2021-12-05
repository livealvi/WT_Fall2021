<?php
include("../model/db.php");

$ID = $Name = $Department = $JoiningDate = $Salary = $results = "";

if (isset($_POST["search"])) {
  $connection = new db();
  $conobj = $connection->OpenCon();

  $userQuery = $connection->SearchEmployee($conobj, "employee", $ID, $Name);

  $results = $userQuery;

  if ($userQuery->num_rows > 0) {

    // output data of each row
    while ($row = $userQuery->fetch_assoc()) {
      $ID = $row["ID"];
      $Name = $row["Name"];
      $Department = $row["Department"];
      $JoiningDate = $row["JoiningDate"];
      $Salary = $row["Salary"];
    }
  } else {
    echo "0 results";
  }
}

$error = "";
