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
<body style="background-color:pink; color: black">

<?php 
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";
?>

<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
    <fieldset>
        <legend>View User Details</legend>
        <label for="username">User Name :</label>
        <input type="text" id="username" name="username">

        <br> <br>
        <input type="submit" name="submit" value="Submit"> <br> <br>


</form>

</fieldset>

<?php
include "../controllers/user-action.php";
require "../controllers/includes/footer.php";

?>

</body>
</html>