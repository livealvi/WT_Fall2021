<?php include "control/validation.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Final Task 2</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="main">
        <div>
            <h1>Registration Forms</h1>
        </div>
        <div class="form-box">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit="return validateForm()">
                <!-- --input-label-- -->
                <div class="left-side">
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="fname">First Name:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="lname">Last Name:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="age">Age:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="designation">Designation:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="preferredLanguage">Preferred Language:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="email">E-mail:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label class="message" for="password">Password:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="file">Please choose a file</label>
                        </div>
                    </div>
                </div>
                <!-- --input-label-- -->
                <!-- --input-fields-- -->
                <div class="right-side">
                    <span id="message" class="message"></span>
                    <div class="padding-left">
                        <input type="text" id="firstName" name="firstName">
                        <?php echo $validationFirstName ?>

                    </div>
                    <div class="padding-left">
                        <input type="text" id="lastName" name="lastName">
                        <?php echo $validationLastName ?>
                    </div>
                    <div class="padding-left">
                        <input type="number" id="age" name="age">
                        <?php echo $validationAge ?>

                    </div>
                    <div class="padding-left">
                        <input type="radio" id="profession" name="designation" value="Junior Programmer">
                        <label for="juniorProgrammer">Junior Programmer</label>
                        <input type="radio" id="profession" name="designation" value="Senior Programmer">
                        <label for="seniorProgrammer">Senior Programmer</label>
                        <input type="radio" id="profession" name="designation" value="Project Lead">
                        <label for="projectLead">Project Lead</label>
                        <?php $validationRadioButtonNotSelected ?>

                    </div>
                    <div class="padding-left">
                        <input type="checkbox" id="java" name="java" value="JAVA">
                        <label for="java">JAVA</label>
                        <input type="checkbox" id="php" name="php" value="PHP">
                        <label for="php">PHP</label>
                        <input type="checkbox" id="cPlusPlus" name="cPlusPlus" value="C++">
                        <label for="cPlusPlus">C++</label>
                        <?php echo $validationCheckbox ?>

                    </div>
                    <div class="d-InlineBlock padding-left">
                        <input id="email" name="email">
                        <?php echo $validationEmail ?>

                    </div>
                    <div class="padding-left">
                        <input type="password" id="password" name="password">
                        <?php echo $validationPassword ?>

                    </div>
                    <div class="d-InlineBlock padding-left">
                        <input type="file" id="file" name="file">
                    </div>
                </div>
                <!-- --input-fields-- -->
                <!-- --buttons-- -->
                <div>
                    <div class="d-InlineBlock padding-right">
                        <input type="submit" name="registration" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </div>
                </div>
                <!-- --buttons-- -->
            </form>
        </div>

        <!-- --form-view-- -->
        <div>
            <h1>Registration Forms View</h1>
        </div>
        <div class="form-view">
            <form action="" method="">
                <!-- --view-label-- -->
                <div class="left-side">
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="fname">First Name:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="lname">Last Name:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="age">Age:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="designation">Designation:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="preferredLanguage">Preferred Language:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="email">E-mail:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="password">Password:</label>
                        </div>
                    </div>
                </div>
                <!-- --view-label-- -->
                <!-- --view-fields-- -->
                <div class="right-side">
                    <div class="view-padding">
                        <?php echo "<span style=\" font-weight: 900; padding-left: 20px;\">$firstName</span>" ?>
                    </div>
                    <div class="view-padding">
                        <?php echo "<span style=\" font-weight: 900; padding-left: 20px;\">$lastName</span>" ?>
                    </div>
                    <div class="view-padding">
                        <?php echo "<span style=\" font-weight: 900; padding-left: 20px;\">$age</span>" ?>
                    </div>
                    <div class="view-padding">
                        <?php echo "<span style=\" font-weight: 900; padding-left: 20px;\">$validationRadioButton</span>" ?>
                    </div>
                    <div class="view-padding">
                        <?php echo "<span style=\" font-weight: 900; padding-left: 20px;\">$checkbox1 &nbsp &nbsp $checkbox2 &nbsp &nbsp $checkbox3 </span>" ?>
                    </div>
                    <div class="d-InlineBlock view-padding">
                        <?php echo "<span style=\" font-weight: 900; padding-left: 20px;\">$email</span>" ?>
                    </div>
                    <div class="view-padding">
                        <?php echo "<span style=\" font-weight: 900; padding-left: 20px;\">$password</span>" ?>
                    </div>
                </div>
                <!-- --view-fields-- -->
            </form>
        </div>

    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>