<?php
class db
{

    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "mydb";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

        return $conn;
    }


    function SearchEmployee($conn, $table, $ID, $Name)
    {
        $result = $conn->query("SELECT * FROM $table WHERE ID Like '$ID' or Name Like '$Name%' ");
        return $result;
    }

    function CloseCon($conn)
    {
        $conn->close();
    }
}
