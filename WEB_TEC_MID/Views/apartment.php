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
<?php
include "../controllers/apartment-action.php";
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<h2 style="text-align: center; color:aquamarine; background-color:blueviolet">Add New Appartment</h2>
    <fieldset>
        <legend> Applicant Details</legend>
        <label for="Aid">Applicant ID</label>
        <input type="number" name="Aid"> <br>
        <label for="Aname">Applicant Name</label>
        <input type="text" name="Aname"> <br>
        <label for="Aemail">Applicant Email</label>
        <input type="text" name="Aemail"> <br>
        <label for="Aphone">Applicant Cell No.</label>
        <input type="text" name="Aphone"> <br>
    </fieldset>
    <fieldset>
        <legend> Apartment Details</legend>
        <label for="A_pname"> Name Of Project</label>
        <input type="text" name="A_pname"> <br>
        <label for="A_buliding">Apartment Building No.</label>
        <input type="text" name="A_buliding"> <br>
        <label for="A_area">Apartment Area</label>
        <input type="text" name="A_area"> <br>
        <label for="A_price">Apartment Price</label>
        <input type="number" name="A_price"> <br>
    </fieldset>
    <input type="submit" name="submit" value="Add"> <br> <br>
    <a href="update-appartment.php">Update</a> 
    <a href="delete-appartment.php">Delete</a> 

</form>
<?php require "../controllers/includes/footer.php" ?>
</body>
</html>