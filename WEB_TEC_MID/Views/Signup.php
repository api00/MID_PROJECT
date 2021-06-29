
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: lightgray">
<?php
include "../controllers/Signup_action.php";
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">


    <fieldset>
        <legend>SIGN UP</legend>
        <label for="fname"> Full Name  :</label>
        <input type="text" id="fname" name="fname" value="<?php echo $full_name;  ?>">
        <span style="color: red;"> * <?php echo $full_nameEr;  ?></span>
        <br>

        <label for="userName">User Name:</label>
        <input type="text" id="userName" name="userName">
        <span style="color: red;"> * <?php echo $User_NameEr;  ?></span>
        <br>
        <label for="Password">Password   :</label>
        <input type="password" id="Password" name="Password">
        <span style="color: red;"> * <?php echo $User_PasswordEr;  ?></span>
        <br>
        <label for="Rule">Rule   :</label>
        <select  name="rule" id="Rule">
            <option value="">Select one</option>
            <option value="Admin">Admin</option>
            <option value="Buyer">Buyer</option>
            <option value="Seller">Seller</option>
            <option value="Buyer">Tenat</option>

        </select>
        <br>
    </fieldset>
    <input type="submit" name="submit" value="Register"> <br>
   Already Have an account ? <a href="./Login.php">Sign In</a>

    <br>

</form>
<span><?php echo $successMesg ?></span>
<span><?php echo $errorMesg ?></span>
<?php

?>

</body>

</html>
