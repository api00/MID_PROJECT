<?php
$username = $password = "";
$Form_name = "";
$From_pass ="";
$flag =false;
$User_passwordEr = "";
$User_NameEr ="";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Form_name =  input($_POST["username"]);
    $From_pass = input($_POST["password"]);
if (empty($_POST["username"])) {
    $User_NameEr = "User Name is required";
    $flag = true;
}

if (empty($_POST["password"])) {
    $User_passwordEr = "password is required";
    $flag = true;
}
if(!$flag){
$readValue= read();
$jsonDecode= json_decode($readValue,true);


for($i=0; $i <count($jsonDecode); $i++){
    if($Form_name == $jsonDecode[$i]["UserName"] && $From_pass == $jsonDecode[$i]["Password"] ){
        session_start();
        $_SESSION["UserName"]=$Form_name;
        header("Location: ../Views/Home.php");
        break;
    }
}
}
}
function input($v)
{
    $v = htmlspecialchars($v);
    $v = trim($v);
    $v = stripslashes($v);
    return $v;
}

function read()
{
    $fileName = "data.json";
    $fileSize = filesize($fileName);
    $fr = "";
    if ($fileSize > 0) {
        $resource = fopen($fileName, "r");
        $fr = fread($resource, $fileSize);
        fclose($resource);
        return $fr;
    }
}
?>
