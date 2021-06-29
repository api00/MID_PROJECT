<?php
session_start();
if(!isset($_SESSION["UserName"]))
{
    header("Location: ./Login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>Profile Information</legend>
    <h2>Full Name</h2>
    <h2>User Id</h2>
</fieldset>

<fieldset>
    <legend>Add Additional Information</legend>
<form>

    <tr>
        <td><label for="">Phone :</label></td>
        <td><input type="text" id="email" name="email"> <br></td>
    </tr> <tr>
        <td><label for="">Address:</label></td>
        <td><input type="text" id="address" name="address"> <br></td>
    </tr> <tr>
        <td><label for="">Email:</label></td>
        <td><input type="number" id="email" name="email"> <br></td>
    </tr>
    <tr>
        <td><input type="submit" name="Add" value="Add"> <br></td>
    </tr>
</form>
</fieldset>
</body>

</html>