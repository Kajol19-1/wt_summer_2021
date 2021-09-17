<?php
include('../model/db.php');


 $error="";

if (isset($_POST['add'])) {
if (empty($_POST['issuetype']) || empty($_POST['location']) || empty($_POST['details'])||  empty($_FILES['image']['name'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();
$imageLocation="../files/". $_FILES["image"]["name"];


$userQuery=$connection->Addstreetlight($conobj,"streetlight",$_POST['issuetype'],$_POST['location'],$_POST['details'],$imageLocation);
if($userQuery==TRUE)
{
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $imageLocation)) {
       echo "data uploaded.";
    } else {
        echo "Sorry, data was not uploaded.";
    }
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>