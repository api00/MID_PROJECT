<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:powderblue; color: black">


<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
<?php 
$username="";
$password="";

include "../controllers/Login_action.php";

?>

    <fieldset>
        <legend>LOG IN</legend>
    <label style="color:darkviolet;" for="username">User Name :</label>
    <input type="text" id="username" name="username">
    <span style="color: red;"> * </span><br> <br>
    <label style="color:darkviolet; "for="password">password :</label>
    <input type="password" id="password" name="password">
    <span style="color: red;"> * </span><br> <br>
    <br> <br>
    <input style="color:darkviolet; background-color:deepskyblue;" type="submit" name="submit" value="Login"> <br> <br>

</form>
<a href="./Signup.php">Click to register</a>
    </fieldset>


</body>
</html>