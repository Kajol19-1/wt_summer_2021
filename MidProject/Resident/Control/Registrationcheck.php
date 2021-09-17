<?php
include('../model/db.php');


 $error="";

if (isset($_POST['submit'])) {
if (empty($_POST['username']) ||empty($_POST['password']) ||empty($_POST['nidno']) ||empty($_POST['address']) || empty($_POST['gender']) ||empty($_POST['area']) ||empty($_POST['phone']) ||empty($_POST['email']) || empty($_FILES['image']['name']) )
{
$error = "input given is invalid";
}

else
{
$connection = new db();
$conobj=$connection->OpenCon();
$imageLocation="../files/". $_FILES["image"]["name"];


$userQuery=$connection->Addresident($conobj,"resident",$_POST['username'],$_POST['password'],$_POST['nidno'],$_POST['address'],$_POST['gender'],$_POST['area'],$_POST['phone'],$_POST['email'],$imageLocation);
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