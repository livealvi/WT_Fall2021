<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Task | Heroku</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/html/imgs/shuttle.png" type="image/gif" sizes="32x32">

    <!-- g-fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Styles CSS -->
    <link type="text/css" rel="stylesheet" href="assets/html/styles.css">
</head>

<body>

    <div class="container">
    <h1 class="h1 text-center" style="
    margin-top: 30px">WEB TECHNOLOGIES</h1>
    <h3 class="h3 text-center">All Task List</h3>
    <br>
        <table class='table table-bordered table-condensed table-striped table-hover'>
            <thead class="table-primary">
                <tr>
                    <th scope="col"># S/N</th>
                    <th>Date</th>
                    <th>Task</th>
                    <th class="text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-row" onclick="window.open('https://github-actions-task.herokuapp.com/task1/form.php', '_blank');">
                    <th scope="row">1</th>
                    <td>2021/09/25</td>
                    <td>Php Form Validation</td>
                    <td class="text-center">Done</td>
                </tr>
                <tr class="table-row" onclick="window.open('https://github-actions-task.herokuapp.com/task2/form.php', '_blank');">
                    <th scope="row">2</th>
                    <td>2021/10/10</td>
                    <td>Php Form Validation with JSON Data</td>
                    <td class="text-center">Done</td>
                </tr>
                <tr class="table-row" onclick="window.open('https://github-actions-task.herokuapp.com/LabExam/index.php', '_blank');">
                    <th scope="row">2</th>
                    <td>2021/10/10</td>
                    <td>Php Form Validation with JSON Data</td>
                    <td class="text-center">Done</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- All Js Files -->
    <!-- Popper  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>
    <!-- Main -->
    <script type="text/javascript" src="assets/html/main.js"></script>
</body>

</html>