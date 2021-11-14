<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="main">
        <div class="header">
            <div>
                <div class="header">
                    <p class="header-text">ABC Management System</p>
                    <p class="header-banner">We Create Future</p>
                </div>
            </div>
        </div>
        <div>
            <ul class="navbar">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Shop</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="main-box">
                <div class="main-form">
                    <div class="form-header-text">
                        <h1>Registration Form</h1>
                    </div>
                    <div class="form-box">
                        <div class="form-view ">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div>
                                        <div class="for-label">
                                            <label for="firstName">First Name</label>:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="firstName" size="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="lastName">Last Name:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="lastName" size="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="age">Age:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="age" size="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="designation">Designation:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="radio" id="juniorProgrammer" name="designation" value="Junior Programmer">
                                            <label for="juniorProgrammer">Junior Programmer</label>
                                            <input type="radio" id="seniorProgrammer" name="designation" value="Senior Programmer">
                                            <label for="seniorProgrammer">Senior Programmer</label>
                                            <input type="radio" id="projectLead" name="designation" value="Project Lead">
                                            <label for="projectLead">Project Lead</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="preferredLanguage">Preferred Language:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="checkbox" id="java" name="java" value="JAVA">
                                            <label for="java">JAVA</label>
                                            <input type="checkbox" id="php" name="php" value="PHP">
                                            <label for="php">PHP</label>
                                            <input type="checkbox" id="cPlusPlus" name="cPlusPlus" value="C++">
                                            <label for="cPlusPlus">C++</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="Email">E-mail:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="email" name="email" size="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="password">Password:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="password" name="password" size="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="image_file">Please Choose a Image</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="file" name="img_file" id="img_file" size="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="all-button">
                                            <input type="reset" name="reset" value="Reset">
                                            <input type="submit" name="submit" value="Submit">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>


</body>

</html>