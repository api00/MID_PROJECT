<?php
$username = "";

$flag =false;

$User_NameEr ="";
$Form_name =  input($_POST["username"]);

if($_SERVER["REQUEST_METHOD"]=="POST"){

if (empty($_POST["username"])) {
    $User_NameEr = "User Name is required";
    $flag = true;
}


if(!$flag){
    $readValue= read();
    $jsonDecode= json_decode($readValue,true);


    for($i=0; $i <count($jsonDecode); $i++){
        if($Form_name == $jsonDecode[$i]["UserName"] ){

            echo "Full Name :" .$jsonDecode[$i]["Full Name"]."<br>";
            echo "User Name :".$jsonDecode[$i]["UserName"]."<br>";
            echo"User Rule :" .$jsonDecode[$i]["Rule"]."<br>";

            break;
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
    $fileName = "renter.json";
    $fileSize = filesize($fileName);
    $fr = "";
    if ($fileSize > 0) {
        $resource = fopen($fileName, "r");
        $fr = fread($resource, $fileSize);
        fclose($resource);
        return $fr;
    }
}
}
?>
