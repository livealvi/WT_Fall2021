<?php
include('db.php');

$firstname = $lastname = $email = $genders = $mobile = $dob = $hsc = $ssc = $course = $year = $semester = "";

$insert ="";
$error = "";
// store session data
if (isset($_POST["submit"])) {
    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $email = $_REQUEST["email"];
    $genders = $_REQUEST["genders"];
    $mobile = $_REQUEST["mobile"];
    $dob = $_REQUEST["dob"];
    $hsc = $_REQUEST["hsc"];
    $ssc = $_REQUEST["ssc"];
    $course = $_REQUEST["course"];
    $year = $_REQUEST["year"];
    $semester = $_REQUEST["semester"];

    $connection = new db();
    $conobj = $connection->OpenCon();

    $insert = $connection->InsertValue($conobj, $firstname, $lastname, $email, $genders, $mobile, $dob, $hsc, $ssc, $course, $year, $semester);

    if($insert == true)
        $insert = "inserted successfully";
    else
        $error = "could not be inserted";

    $connection->CloseCon($conobj);
}
