<?php
class db
{

    function OpenCon()
    {

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "aiub";

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            return $conn;
        }
    }

    function InsertValue($conn, $firstname, $lastname, $email, $genders, $mobile, $dob, $hsc, $ssc, $course, $year, $semester)
    {
        $sql = "INSERT INTO `new_students` (`FirstName`, `LastName`, `Email`, `Gender`, `Mobile`, `DOB`, `HSC_Result`, `SSC_Result`, `University_Course`, `University_Year`, `University_Semester`) VALUES ('$firstname', '$lastname', '$email', '$genders', '$mobile', '$dob', '$hsc', '$ssc', '$course', '$year', '$semester') ";

        $done = $conn->query($sql);
        return $done;
    }

    function CloseCon($conn)
    {
        $conn->close();
    }
}
