<?php include "control/validation.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Task -1 | Forms Validation</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="main">
        <div>
            <h1>Registration Forms</h1>
        </div>
        <div class="form-box">
            <form action="" method="POST">
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
                            <label for="password">Password:</label>
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
                    <div class="padding-left">
                        <input type="text" id="firstName" name="firstName">
                        <?php echo "<span style=\"color:#FF5C58; font-weight: 900; padding-left: 20px;\">$validationFirstName</span>" ?>
                        <?php echo "<span style=\"color:#6ECB63; font-weight: 900; padding-right: 20px;\">$succeed</span>" ?>
                    </div>
                    <div class="padding-left">
                        <input type="text" id="lastName" name="lastName">
                        <?php echo "<span style=\"color:#FF5C58; font-weight: 900; padding-left: 20px;\">$validationLastName</span>" ?>
                        <?php echo "<span style=\"color:#6ECB63; font-weight: 900; padding-right: 20px;\">$succeed</span>" ?>
                    </div>
                    <div class="padding-left">
                        <input type="number" id="age" name="age">
                        <?php echo "<span style=\"color:#FF5C58; font-weight: 900; padding-left: 20px;\">$validationAge</span>" ?>
                        <?php echo "<span style=\"color:#6ECB63; font-weight: 900; padding-right: 20px;\">$succeed</span>" ?>
                    </div>
                    <div class="padding-left">
                        <input type="radio" id="juniorProgrammer" name="designation" value="Junior Programmer">
                        <label for="juniorProgrammer">Junior Programmer</label>
                        <input type="radio" id="seniorProgrammer" name="designation" value="Senior Programmer">
                        <label for="seniorProgrammer">Senior Programmer</label>
                        <input type="radio" id="projectLead" name="designation" value="Project Lead">
                        <label for="projectLead">Project Lead</label>
                        <?php echo "<span style=\"color:#FF5C58; font-weight: 900; padding-left: 20px;\">$validationRadioButtonNotSelected</span>" ?>
                        <?php echo "<span style=\"color:#6ECB63; font-weight: 900; padding-right: 20px;\">$succeed</span>" ?>
                    </div>
                    <div class="padding-left">
                        <input type="checkbox" id="java" name="java" value="JAVA">
                        <label for="java">JAVA</label>
                        <input type="checkbox" id="php" name="php" value="PHP">
                        <label for="php">PHP</label>
                        <input type="checkbox" id="cPlusPlus" name="cPlusPlus" value="C++">
                        <label for="cPlusPlus">C++</label>
                        <?php echo "<span style=\"color:#FF5C58; font-weight: 900; padding-left: 20px;\">$validationCheckbox</span>" ?>
                        <?php echo "<span style=\"color:#6ECB63; font-weight: 900; padding-right: 20px;\">$succeed</span>" ?>
                    </div>
                    <div class="d-InlineBlock padding-left">
                        <input id="email" name="email">
                        <?php echo "<span style=\"color:#FF5C58; font-weight: 900; padding-left: 20px;\">$validationEmail</span>" ?>
                        <?php echo "<span style=\"color:#6ECB63; font-weight: 900; padding-right: 20px;\">$succeed</span>" ?>
                    </div>
                    <div class="padding-left">
                        <input type="password" id="password" name="password">
                        <?php echo "<span style=\"color:#FF5C58; font-weight: 900; padding-left: 20px;\">$validationPassword</span>" ?>
                        <?php echo "<span style=\"color:#6ECB63; font-weight: 900; padding-right: 20px;\">$succeed</span>" ?>
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
                        <?php echo "<span style=\"color:#FF5C58; font-weight: 900; padding-left: 20px;\">$firstName</span>" ?>
                    </div>
                    <div class="view-padding">
                        <?php echo "<span style=\"color:#FF5C58; font-weight: 900; padding-left: 20px;\">$lastName</span>" ?>
                    </div>
                    <div class="view-padding">
                        <?php echo "<span style=\"color:#FF5C58; font-weight: 900; padding-left: 20px;\">$age</span>" ?>
                    </div>
                    <div class="view-padding">
                        <?php echo "<span style=\"color:#FF5C58; font-weight: 900; padding-left: 20px;\">$validationRadioButton</span>" ?>
                    </div>
                    <div class="view-padding">
                        <?php echo "<span style=\"color:#FF5C58; font-weight: 900; padding-left: 20px;\">$checkbox1 &nbsp &nbsp $checkbox2 &nbsp &nbsp $checkbox3 </span>" ?>
                    </div>
                    <div class="d-InlineBlock view-padding">
                        <?php echo "<span style=\"color:#FF5C58; font-weight: 900; padding-left: 20px;\">$email</span>" ?>
                    </div>
                    <div class="view-padding">
                        <?php echo "<span style=\"color:#FF5C58; font-weight: 900; padding-left: 20px;\">$password</span>" ?>
                    </div>
                </div>
                <!-- --view-fields-- -->
            </form>
        </div>

    </div>
</body>

</html>