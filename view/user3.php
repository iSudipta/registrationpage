<?php
include("../controller/controller.php")
?>

<!DOCTYPE html>
<html>
<head>
    <title>User 3</title>
</head>
    <body>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1>User 3 Form</h1>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" ></br>
            <?php echo $nameErr; ?>
            <?php echo $name; ?>
            </br>
            </br>


            <label for="email">Email:</label>
            <input type="text" name="email" id="email"><br>
            <?php echo $emailErr ?>
            <?php echo $email ?>
            </br>
            </br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" ></br>
            <?php echo $passwordErr; ?>
            </br>
            </br>

            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="Male" id="male" 
            <?php echo isset($gender) && $gender=="Male" ? "checked" : ""; ?>> Male
            <input type="radio" name="gender" value="Female" id="female"  
            <?php echo isset($gender) && $gender=="Male" ? : ""; ?> > Female
            <input type="radio" name="gender" value="Other" id="other"  
            <?php echo isset($gender) && $gender=="Other" ? : ""; ?> > Other
            </br>
            <?php echo $genderErr; ?>
            <?php echo $gender; ?>
            </br>
            </br>

            <label for="phone">Enter phone:</label><br>
            <input type="tel" name="Phone" id="phone"></br>
            <?php echo $phoneErr ?>
            <?php echo $phone ?>
            </br>
            </br>

            <input type="submit" name="Submit" value="Submit">
            <input type="reset" name="Reset" value="Reset">
        </form>
    </body>
</html>