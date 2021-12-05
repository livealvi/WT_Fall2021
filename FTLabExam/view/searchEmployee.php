<?php
include('../control/SearchEmployee.php');

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h2>Search Employee</h2>

    <form action="" method="post">
        <label>Search By ID:</label>
        <br>
        <input type="text" id="ID" name="ID">
        <br>
        <label>Search By Name:</label><br>
        <input type="text" id="Name" name="Name">
        <br>
        <label>Search By Salary:</label>
        <br>
        <label>maximum:</label>
        <input type="text" id="maximum" name="maximum">
        <br>
        <label>minimum:</label>
        <input type="text" id="minimum" name="minimum">
        <br>
        <input name="search" type="submit" value="Search">
    </form>
    <br>
    <?php echo $error; ?>

    <h2>Search Employee : Result</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>JoiningDate</th>
            <th>Salary</th>
        </tr>

        <?php
        foreach ($userQuery as $results) {
            echo '<tr>
    <td>' . $ID . '</td>
    <td> ' . $Name . '</td>
    <td>' . $Department . '</td>
    <td>  ' . $JoiningDate  . '</td>
    <td> ' . $Salary . '</td>
    </tr>';
        }
        ?>


    </table>

</body>

</html>