<?php 
$A_nameEr = $A_emailEr = $A_phoneEr = $A_buildEr = $A_areaEr=  $A_priceEr = $A_Id = $Ap_nameEr = '';
$flag = false;
$successMesg = $errorMesg = "";
$A_Name = $A_Email = $A_Phone = $A_Build = $A_Area =$A_Price = $Ap_Name = $Aid  = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$A_Name = input($_POST["Aname"]);
$A_Id = input($_POST["Aid"]);
$A_Email  = input($_POST["Aemail"]);
$A_Phone = input($_POST["Aphone"]);
$A_Build = input($_POST["A_buliding"]);
$A_Area = input($_POST["A_area"]);
$A_Price = input($_POST["A_price"]);
$Ap_Name = input($_POST["A_pname"]); //Apartment NAme


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

if (empty($_POST["A_buliding"])) {
    $A_buildEr = "required";
    $flag = true;
}
if (empty($_POST["A_area"])) {
    $A_areaEr = "Area name required";
    $flag = true;
}
if (empty($_POST["A_price"])) {
    $A_priceEr = "Price must be required";
    $flag = true;
}
if (empty($_POST["A_pname"])) {
    $Ap_nameEr = "Apartment name  required";
    $flag = true;
}


if(!$flag){
    $file = "../Views/apartment.json";
  $arr = array("ApplicantID"=>$A_Id,"ApplicantName"=>$A_Name,"Applicantemail"=>$A_Email,"ApplicantPhone"=>$A_Phone,"ApartmentName"=>$Ap_Name,"ApartmentBuilding"=>$A_Build,"ApartmentArea"=>$A_Area,"ApartmentPrice"=>$A_Price);

  $data=read();
  if(!empty($data)){
      $jsonDecode = json_decode($data);
      $arr2= array();
      for($i=0; $i <count($jsonDecode); $i++){
          if($A_Id == $jsonDecode[$i]->ApplicantID ){
             
              array_push($arr2,$arr);
          }
          else
          {
            array_push($arr2,$jsonDecode[$i]);

          }
          write(json_encode($arr2));

  }
}
  if($result){
echo "success";
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
    $fileName = "../Views/apartment.json";
    $resors = fopen($fileName, "w");
    $fileWrite = fwrite($resors, $value);
    fclose($resors);
    return $fileWrite;
}
function read()
{
    $fileName = "../Views/apartment.json";
    $fileSize = filesize($fileName);
    $fr = "";
    if ($fileSize > 0) {
        $resource = fopen($fileName, "r");
        $fr = fread($resource, $fileSize);
        fclose($resource);
        return $fr;
    }
}

// function update($file,$arr){

// }
?>