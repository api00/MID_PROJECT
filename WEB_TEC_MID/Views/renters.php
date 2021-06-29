<?php
session_start();
if(!isset($_SESSION["UserName"]))
{
    header("Location: ./Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<h2 style="text-align: center; color:aquamarine; background-color:blueviolet">Rental Application</h2>
    <fieldset>
        <legend> Applicant Details</legend>
        <label for="Aid">Applicant ID</label>
        <input type="number" name="Aid"> <br>
        <label for="Aname">Applicant Name</label>
        <input type="text" name="Aname"> <br>
        <label for="Aemail">Applicant Email</label>
        <input type="text" name="Aemail"> <br>
        <label for="Aphone">Applicant Phone No.</label>
        <input type="text" name="Aphone"> <br>
   
  
   
        
        <label for="P-adress"> Present Address</label>
        <input type="text" name="P-adress"> <br>
        <label for="Pr-address">How long in previous Address</label>
        <input type="text" name="Pr-address"> <br>
        <label for="S-income">Source of Income</label>
        <input type="text" name="S-income"> <br>
        <label for="M-income">Monthly income</label>
        <input type="number" name="M-income"> <br>
    </fieldset>
    <input type="submit" name="submit" value="Add"> <br> <br>
    <a href="update-appartment.php">Update</a> 
    <a href="delete-appartment.php">Delete</a> 

</form>
<?php  include "../controllers/renters-action.php"?>
<?php require "../controllers/includes/footer.php";?>

</body>
</html>