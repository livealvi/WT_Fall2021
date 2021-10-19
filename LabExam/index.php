<?php
include('control/insertCheck.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MID | LAB EXAM</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="main">
        <div>
            <h1>Registration Forms</h1>
        </div>
        <div class="form-box">
            <form method="POST" action="">
                <!-- --input-label-- -->
                <div class="left-side">
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="firstname">First Name:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="lname">Last Name:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="email">Email:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="gender">Gender:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="mobile">Mobile No:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="DateofBirth">Date of Birth:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="HSC">HSC Result:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="SSC">SSC Result:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="Course">Select a course you want to enroll:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="year">Select a year you enrolling year:</label>
                        </div>
                    </div>
                    <div>
                        <div class="d-InlineBlock padding-right">
                            <label for="semester">Select a year you enrolling year:</label>
                        </div>
                    </div>
                </div>
                <!-- --input-label-- -->
                <!-- --input-fields-- -->
                <div class="right-side">
                    <div class="padding-left">
                        <input type="text" name="firstname">
                    </div>
                    <div class="padding-left">
                        <input type="text" name="lastname">
                    </div>
                    <div class="padding-left">
                        <input type="text" name="email">
                    </div>
                    <div class="padding-left">
                        <input type="radio" name="genders" value="Male">
                        <label for="male">Male</label>
                        <input type="radio" name="genders" value="Female">
                        <label for="female">Female</label>
                    </div>
                    <div class="padding-left">
                        <input type="number" name="mobile">
                    </div>
                    <div class="padding-left">
                        <input type="date" name="dob">
                    </div>
                    <div class="padding-left">
                        <input type="number" name="hsc">
                    </div>
                    <div class="padding-left">
                        <input type="number" name="ssc">
                    </div>
                    <div class="padding-left">
                        <select name="course" id="course">
                            <option value="CSE">CSE</option>
                            <option value="CSSE">CSSE</option>
                            <option value="EEE">EEE</option>
                            <option value="COE">COE</option>
                        </select>
                    </div>

                    <div class="padding-left">
                        <select name="year" id="year">
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>

                    <div class="padding-left">
                        <select name="semester" id="semester">
                            <option value="Spring">Spring</option>
                            <option value="Summer">Summer</option>
                            <option value="Fall">Fall</option>
                        </select>
                    </div>
                </div>
                <!-- --input-fields-- -->
                <!-- --buttons-- -->
                <div>
                    <div class="d-InlineBlock padding-right">
                        <input type="submit" name="submit" value="Insert Data">
                <?php echo $insert  ?>
                <?php echo $error ?>
                    </div>
                </div>
                <!-- --buttons-- -->
            </form>
        </div>


    </div>
</body>

</html>