<?php

$firstName = $lastName = $age = $email = $password = $succeed = $savedata = $notsavedata = "";
$checkbox1 = $checkbox2 = $checkbox3 = "";

$validationFirstName = "";
$validationLastName = "";
$validationAge = "";
$validationRadioButton = "";
$validationRadioButtonNotSelected = "";
$validationCheckbox = "";
$validationEmail = "";
$validationPassword = "";

if (isset($_POST["registration"])) {
    $firstName = $_REQUEST["firstName"];
    $lastName = $_REQUEST["lastName"];
    $age = $_REQUEST["age"];
    $email = $_REQUEST["email"];
    $password  = $_REQUEST["password"];


    if (empty($firstName) || (strlen($_REQUEST["firstName"]) < 5)) {
        $validationFirstName = "Please enter your First Name";
    } else {
        $firstName = $_REQUEST["firstName"];
        $succeed = "Successful";
    }

    if (empty($lastName) || (strlen($_REQUEST["lastName"]) < 5)) {
        $validationLastName = "Please enter your Last Name";
    } else {
        $lastName = $_REQUEST["lastName"];
        $succeed = "Successful";
    }

    if (empty($age) || (strlen($_REQUEST["age"]) < 1)) {
        $validationAge = "Please enter your Age";
    } else {
        $age = $_REQUEST["age"];
        $succeed = "Successful";
    }

    if (isset($_REQUEST["designation"])) {
        $validationRadioButton = $_REQUEST["designation"];
        $succeed = "Successful";
    } else {
        $validationRadioButtonNotSelected = "Please enter your Designation";
    }

    if (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $validationEmail = "Please enter your Email";
    } else {
        $email = $_REQUEST["email"];;
        $succeed = "Successful";
    }


    if (empty($password) || (strlen($_REQUEST["password"]) < 8)) {
        $validationPassword = "Please enter your Password";
    } else {
        $password = $_REQUEST["password"];;
        $succeed = "Successful";
    }

    if (!isset($_REQUEST["java"]) && !isset($_REQUEST["php"]) && !isset($_REQUEST["cPlusPlus"])) {
        $validationCheckbox = "Please select your Preferred Language or At least one";
    } else {
        if (isset($_REQUEST["java"])) {
            $checkbox1 = $_REQUEST["java"];
        }
        if (isset($_REQUEST["php"])) {
            $checkbox2 = $_REQUEST["php"];
        }
        if (isset($_REQUEST["cPlusPlus"])) {
            $checkbox3 = $_REQUEST["cPlusPlus"];
        }
        $succeed = "Successful";
    }


    $formdata = array(

        "firstName" => $firstName,
        "lastName" => $lastName,
        "age" => $age,
        "designation" =>  $validationRadioButton,
        "language" => $checkbox1 || $checkbox2 || $checkbox3,
        "email" => $email,
        "password"  => $password
    );


    $existingdata = file_get_contents('mydata.json');
    $tempJSONdata = json_decode($existingdata);
    $tempJSONdata[] = $formdata;
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

    if (file_put_contents("mydata.json", $jsondata)) {
        $savedata = "Data Save!";
        
    } else {
        $notsavedata = "Data Couldn't Save";
    }

    $data = file_get_contents("mydata.json");
    $mydata = json_decode($data);

    echo "<br><br> Name: ".$mydata[0]->firstName." ".$mydata[0]->lastName." <br> Designation: ".$mydata[0]->designation." Age: ".$mydata[0]->age." ";
    echo "<br> ".$mydata[0]->language." <br> Email: ".$mydata[0]->email." <br> Password: ".$mydata[0]->password." <br><br>";
    echo " <a href=\"mydata.json\">View All JSON Data</a>  <br><br>";


}
