<?php
include('../model/db.php');


 $error="";

if (isset($_POST['add'])) {
if (empty($_POST['affectedperson']) || empty($_POST['diseasename'])|| empty($_POST['address'])||  empty($_FILES['image']['name'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();
$imageLocation="../files/". $_FILES["image"]["name"];


$userQuery=$connection->Addmosquitoinfected($conobj,"mosquitoinfected",$_POST['affectedperson'],$_POST['diseasename'],$_POST['address'],$imageLocation);
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