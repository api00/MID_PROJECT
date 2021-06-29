<?php 
$A_Name = $A_Email = $A_Phone = $A_Id = $P_address = $Pr_address = $S_income = $M_Income = "";
$flag =false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$A_Name = input($_POST["Aname"]);
$A_Id = input($_POST["Aid"]);
$A_Email  = input($_POST["Aemail"]);
$P_address = input($_POST["P-adress"]);
$Pr_address = input($_POST["Pr-address"]);
$S_income = input($_POST["S-income"]);
$M_Income = input($_POST["M-income"]);

if (empty($_POST["Aname"])) {

    $A_nameEr = "Applicant Name is required";
    $flag = true;
}
if (empty($_POST["Aid"])) {

    $A_nameEr = "Applicant ID is required";
    $flag = true;
}

if (empty($_POST["Aemail"])) {

    $A_emailEr = "Email is required ";
    $flag = true;
}



if (empty($_POST["Aphone"])) {
    $A_phoneEr = "Number is required";
    $flag = true;
}

if (empty($_POST["P-adress"])) {
    $P_adress = "required";
    $flag = true;
}
if (empty($_POST["Pr-address"])) {
    $Pr_address = "Area name required";
    $flag = true;
}
if (empty($_POST["S-income"])) {
    $S_income = "Price must be required";
    $flag = true;
}
if (empty($_POST["M-income"])) {
    $M_income = "Price must be required";
    $flag = true;
}


if (!$flag) {

    $file = "../Views/renter.json";
    if (file_exists($file)) {
        $existing_data = read();
        if (empty($existing_data)) {
            $arr1[] = array("ApplicantID"=> $A_Id,"ApplicantName"=>$A_Name,"Applicantemail"=>$A_Email,"ApplicantPhone"=>$A_Phone,"PresentAddress"=>$P_address,"PreviousAddress"=>$Pr_address,"SourseOfIncome"=>$S_income,"MonthlyIncome"=>$M_Income);
            $result = write(json_encode($arr1));

        } else {

            $existing_data_decode = json_decode($existing_data);
            array_push($existing_data_decode, array("ApplicantID"=> $A_Id,"ApplicantName"=>$A_Name,"Applicantemail"=>$A_Email,"ApplicantPhone"=>$A_Phone,"PresentAddress"=>$P_address,"PreviousAddress"=>$Pr_address,"SourseOfIncome"=>$S_income,"MonthlyIncome"=>$M_Income));

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
    $fileName = "../Views/renter.json";
    $resors = fopen($fileName, "w");
    $fileWrite = fwrite($resors, $value);
    fclose($resors);
    return $fileWrite;
}
function read()
{
    $fileName = "../Views/renter.json";
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