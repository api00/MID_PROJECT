<?php
$full_name = $User_Name = $User_Rule = $User_Password = "";
$full_nameEr = $User_NameEr = $User_RuleEr = $User_PasswordEr = '';
$flag = false;
$successMesg = $errorMesg = "";







    if($_SERVER["REQUEST_METHOD"]=="POST"){

 
        $User_Name = input($_POST["userName"]);
        $User_Password  = input($_POST["Password"]);
        $full_name = input($_POST["fname"]);
        $User_Rule = input($_POST["rule"]);
    if (empty($_POST["fname"])) {

        $full_nameEr = "FUll Name is required";
        $flag = true;
    }

    if (empty($_POST["rule"])) {

        $User_RuleEr = "Rule need to be specify";
        $flag = true;
    }



    if (empty($_POST["userName"])) {
        $User_NameEr = "User Name is required";
        $flag = true;
    }

    if (empty($_POST["Password"])) {
        $User_PasswordEr = "Password is required";
        $flag = true;
    }

    if (!$flag) {

        $file = "data.json";
        if (file_exists($file)) {
            $existing_data = read();
            if (empty($existing_data)) {
                $arr1[] = array("Full Name"=>$full_name,"UserName"=>$User_Name,"Password"=>$User_Password ,"Rule"=>$User_Rule);
                $result = write(json_encode($arr1));
            } else {

                $existing_data_decode = json_decode($existing_data);

                array_push($existing_data_decode, array("Full Name"=>$full_name,"UserName"=>$User_Name,"Password"=>$User_Password,"Rule"=>$User_Rule));

                write("");
                $json = json_encode($existing_data_decode);
                $result = write(($json)."\n");
            }
        }
        if ($result) {
            $successMesg = " Succesfully Saved";
        } else {
            $errorMesg = "Error While saving";
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
function write($value)
{
    $fileName = "data.json";
    $resors = fopen($fileName, "w");
    $fileWrite = fwrite($resors, $value);
    fclose($resors);
    return $fileWrite;
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