<?php
include('../model/db.php');


 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['nidno']) || empty($_POST['email']) )
 {
$error = "input given is invalid";
}


else
{
$connection = new db();
$conobj=$connection->OpenCon();

$nidno=$_REQUEST["nidno"];
$email=$_REQUEST["email"];
$address=$_REQUEST["address"];
$phone=$_REQUEST["phone"];
$password=$_REQUEST["password"];
$username=$_REQUEST["username"];
$gender=$area="";

if(isset($_REQUEST["gender"]))
{
    $gender=$_REQUEST["gender"];
}

if(!empty($_POST['area']))
 {
    $area = $_POST['area'];
}


   
$userQuery=$connection->UpdateResident($conobj,"resident",$username,$nidno,$email,$address,$phone,$password,$gender,$area);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>